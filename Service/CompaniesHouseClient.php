<?php

namespace Wearescytale\CompaniesHouseBundle\Service;

use Exception;
use GuzzleHttp\Client;

use Symfony\Component\Serializer\Serializer;
use Wearescytale\CompaniesHouseBundle\Model\CompanyProfile;

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
        $response = $client->get("company/$companyNumber");

        if ($response->getStatusCode() !== 200) {

            throw new Exception("An error occured when getting the company profile");
        }

        return $this->serializer->deserialize(
            $response->getBody()->getContents(),
            CompanyProfile::class,
            'json'
        );
    }

    /**
     * @param string $baseUri
     *
     * @return Client
     */
    public function createClient(string $baseUri = null)
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