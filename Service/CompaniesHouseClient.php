<?php

namespace Wearescytale\CompaniesHouseBundle\Service;

use Exception;
use GuzzleHttp\Client;
use Symfony\Component\Serializer\Serializer;
use Wearescytale\CompaniesHouseBundle\Exception\CompaniesHouseException;
use Wearescytale\CompaniesHouseBundle\Model\CompanyProfile;
use Wearescytale\CompaniesHouseBundle\Model\DocumentMetadata;
use Wearescytale\CompaniesHouseBundle\Model\FilingHistory;

/**
 * Class CompaniesHouseClient
 */
class CompaniesHouseClient
{
    /**
     * The base URL for the Companies House API
     */
    const API_BASE_URL = 'https://api.companieshouse.gov.uk/';

    /**
     * The base url for the documents api
     */
    const DOCUMENTS_API_BASE_URL = 'http://document-api.companieshouse.gov.uk/';

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * CompaniesHouseClient constructor.
     *
     * @param string $apiKey
     */
    public function __construct(string $apiKey, Serializer $serializer)
    {
        $this->apiKey     = $apiKey;
        $this->serializer = $serializer;
    }

    /**
     * Get the company profile given a company number
     *
     * https://developer.companieshouse.gov.uk/api/docs/company/company_number/company_number.html
     *
     * @param string $companyNumber
     *
     * @return CompanyProfile
     * @throws Exception
     */
    public function getCompanyProfile(string $companyNumber)
    {
        $client   = $this->createClient();

        try {
            $response = $client->get("company/$companyNumber");
        } catch (Exception $exception) {

            throw new CompaniesHouseException(
                "Company profile not found"
            );
        }

        if ($response->getStatusCode() !== 200) {

            throw new CompaniesHouseException("An error occured when getting the company profile");
        }

        return $this->serializer->deserialize(
            $response->getBody()->getContents(),
            CompanyProfile::class,
            'json'
        );
    }

    /**
     * Search for a companies by text search
     *
     * https://developer.companieshouse.gov.uk/api/docs/search/companies/companysearch.html
     *
     * @param string $query
     * @param int    $itemsPerPage
     * @param int    $startIndex
     *
     * @return array
     * @throws Exception
     */
    public function companySearch(string $query, $itemsPerPage = null, $startIndex = null)
    {
        $client = $this->createClient();

        try {
            $response = $client->get(
                "search/companies",
                array(
                    'query' => array(
                        'q'              => $query,
                        'items_per_page' => $itemsPerPage,
                        'start_index'    => $startIndex,
                    )
                )
            );
        } catch (Exception $exception) {

            throw new CompaniesHouseException(
                "An error occured when searching for companies"
            );
        }

        if ($response->getStatusCode() !== 200) {

            throw new CompaniesHouseException(
                "An error occured when searching for companies"
            );
        }

        $data = json_decode($response->getBody()->getContents(), true);

        if (!$data || !isset($data['items'])) {

            throw new CompaniesHouseException(
                "An error occured when searching for companies"
            );
        }

        return $this->serializer->deserialize(
            json_encode($data['items']),
            'Wearescytale\CompaniesHouseBundle\Model\CompanySearch[]',
            'json'
        );
    }

    /**
     * List the filing history of the company. It's possible to search the
     * filing history for one or more categories by suppling a comma separated
     * categories to the categories field
     *
     * https://developer.companieshouse.gov.uk/api/docs/company/company_number/filing-history/getFilingHistoryList.html
     *
     * @param string $companyNumber
     * @param string $categories
     * @param int    $itemsPerPage
     * @param int    $startIndex
     *
     * @return FilingHistory[]
     * @throws CompaniesHouseException
     */
    public function getFilingHistoryList(
        string $companyNumber,
        string $categories = null,
        int    $itemsPerPage = null,
        int    $startIndex = null)
    {
        try {
            $client = $this->createClient();

            $uri = sprintf("company/%s/filing-history",
                $companyNumber
            );

            $response = $client->get(
                $uri,
                array(
                    'query' => array(
                        'category'       => $categories,
                        'items_per_page' => $itemsPerPage,
                        'start_index'    => $startIndex
                    )
                )
            );
        } catch (Exception $exception) {

            throw new CompaniesHouseException(
                "An error occured when searching for company filing history"
            );
        }

        $data = json_decode($response->getBody()->getContents(), true);

        if (!$data || !isset($data['items'])) {

            throw new CompaniesHouseException(
                "An error occured when searching for company filing history"
            );
        }

        return $this->serializer->deserialize(
            json_encode($data['items']),
            'Wearescytale\CompaniesHouseBundle\Model\FilingHistory[]',
            'json'
        );
    }

    /**
     * @param string $url
     *
     * @return DocumentMetadata
     * @throws CompaniesHouseException
     */
    public function getDocumentMetadata(string $url)
    {
        try {
            $client   = $this->createClient();
            $response = $client->get($url);
        } catch (Exception $exception) {

            throw new CompaniesHouseException(
                "Unable to get document metadata"
            );
        }

        if ($response->getStatusCode() !== 200) {

            throw new CompaniesHouseException("Unable to get document metadata");
        }

        return $this->serializer->deserialize(
            $response->getBody()->getContents(),
            DocumentMetadata::class,
            'json'
        );
    }

    /**
     * Returns the document content in the specified contentType (if available)
     *
     * @param string $url
     * @param string $contentType
     *
     * @return mixed $data
     * @throws CompaniesHouseException
     */
    public function getDocumentContent(string $url, string $contentType)
    {
        try {
            $client   = $this->createClient();
            $response = $client->get(
                $url,
                array(
                    'query' => array('accept' => $contentType)
                )
            );
        } catch (Exception $exception) {

            throw new CompaniesHouseException(
                "Unable to get document contents"
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode !== 200) {

            throw new CompaniesHouseException("Invalid document content");
        }

        // TODO: Follow redirect
        if ($statusCode === 302) {
        }

        return $response->getBody()->getContents();
    }

    /**
     * @param string $baseUri
     *
     * @return Client
     */
    private function createClient(string $baseUri = null)
    {
        if (!$baseUri) {
            $baseUri = self::API_BASE_URL;
        }

        $config = array(
            'base_uri' => $baseUri,
            'auth'     => array($this->apiKey, '')
        );

        return new Client($config);
    }
}