<?php

namespace Wearescytale\CompaniesHouseBundle\Model;

use DateTime;

/**
 * Class CompanySearch
 */
class CompanySearch
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $companyNumber;

    /**
     * @var string
     */
    private $description;

    /**
     * @var array
     */
    private $descriptionIdentifier = array();

    /**
     * @var string
     */
    private $companyType;

    /**
     * @var string
     */
    private $companyStatus;

    /**
     * @var Address
     */
    private $address;

    /**
     * @var string
     */
    private $addressSnippet;

    /**
     * @var string
     */
    private $snippet;

    /**
     * @var DateTime
     */
    private $dateOfCreation;

    /**
     * @var string
     */
    private $kind;

    /**
     * @var array
     */
    private $matches = array();

    /**
     * @var array
     */
    private $links = array();

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return CompanySearch
     */
    public function setTitle(string $title): CompanySearch
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyNumber(): string
    {
        return $this->companyNumber;
    }

    /**
     * @param string $companyNumber
     *
     * @return CompanySearch
     */
    public function setCompanyNumber(string $companyNumber): CompanySearch
    {
        $this->companyNumber = $companyNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return CompanySearch
     */
    public function setDescription(string $description): CompanySearch
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return array
     */
    public function getDescriptionIdentifier(): array
    {
        return $this->descriptionIdentifier;
    }

    /**
     * @param array $descriptionIdentifier
     *
     * @return CompanySearch
     */
    public function setDescriptionIdentifier(array $descriptionIdentifier): CompanySearch
    {
        $this->descriptionIdentifier = $descriptionIdentifier;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyType(): string
    {
        return $this->companyType;
    }

    /**
     * @param string $companyType
     *
     * @return CompanySearch
     */
    public function setCompanyType(string $companyType): CompanySearch
    {
        $this->companyType = $companyType;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyStatus(): string
    {
        return $this->companyStatus;
    }

    /**
     * @param string $companyStatus
     *
     * @return CompanySearch
     */
    public function setCompanyStatus(string $companyStatus): CompanySearch
    {
        $this->companyStatus = $companyStatus;

        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     *
     * @return CompanySearch
     */
    public function setAddress(Address $address): CompanySearch
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressSnippet(): string
    {
        return $this->addressSnippet;
    }

    /**
     * @param string $addressSnippet
     *
     * @return CompanySearch
     */
    public function setAddressSnippet(string $addressSnippet): CompanySearch
    {
        $this->addressSnippet = $addressSnippet;

        return $this;
    }

    /**
     * @return string
     */
    public function getSnippet(): string
    {
        return $this->snippet;
    }

    /**
     * @param string $snippet
     *
     * @return CompanySearch
     */
    public function setSnippet(string $snippet): CompanySearch
    {
        $this->snippet = $snippet;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateOfCreation(): DateTime
    {
        return $this->dateOfCreation;
    }

    /**
     * @param DateTime $dateOfCreation
     *
     * @return CompanySearch
     */
    public function setDateOfCreation(DateTime $dateOfCreation): CompanySearch
    {
        $this->dateOfCreation = $dateOfCreation;

        return $this;
    }

    /**
     * @return string
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param string $kind
     *
     * @return CompanySearch
     */
    public function setKind(string $kind): CompanySearch
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * @return array
     */
    public function getMatches(): array
    {
        return $this->matches;
    }

    /**
     * @param array $matches
     *
     * @return CompanySearch
     */
    public function setMatches(array $matches): CompanySearch
    {
        $this->matches = $matches;

        return $this;
    }

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @param array $links
     *
     * @return CompanySearch
     */
    public function setLinks(array $links): CompanySearch
    {
        $this->links = $links;

        return $this;
    }
}