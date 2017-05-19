<?php

namespace Wearescytale\CompaniesHouseBundle\Model;

use DateTime;

/**
 * Class CompanyProfile
 */
class CompanyProfile
{
    /**
     * @var string
     */
    private $companyName;

    /**
     * @var string
     */
    private $companyNumber;

    /**
     * @var string
     */
    private $type;

    /**
     * @var Address
     */
    private $registeredOfficeAddress;

    /**
     * @var string
     */
    private $jurisdiction;

    /**
     * @var DateTime
     */
    private $dateOfCreation;

    /**
     * @var bool
     */
    private $undeliverableRegisteredOfficeAddress;

    /**
     * @var string
     */
    private $companyStatus;

    /**
     * @var bool
     */
    private $hasInsolvencyHistory;

    /**
     * @var bool
     */
    private $registeredOfficeIsInDispute;

    /**
     * @var array
     */
    private $accounts;

    /**
     * @var array
     */
    private $links;

    /**
     * @var array
     */
    private $sicCodes;

    /**
     * @var string
     */
    private $etag;

    /**
     * CompanyProfile constructor.
     */
    public function __construct()
    {
        $this->setLinks(array());
        $this->setSicCodes(array());
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     *
     * @return CompanyProfile
     */
    public function setCompanyName(string $companyName): CompanyProfile
    {
        $this->companyName = $companyName;

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
     * @return CompanyProfile
     */
    public function setCompanyNumber(string $companyNumber): CompanyProfile
    {
        $this->companyNumber = $companyNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return CompanyProfile
     */
    public function setType(string $type): CompanyProfile
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getJurisdiction(): string
    {
        return $this->jurisdiction;
    }

    /**
     * @param string $jurisdiction
     *
     * @return CompanyProfile
     */
    public function setJurisdiction(string $jurisdiction): CompanyProfile
    {
        $this->jurisdiction = $jurisdiction;

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
     * @return CompanyProfile
     */
    public function setDateOfCreation(DateTime $dateOfCreation): CompanyProfile
    {
        $this->dateOfCreation = $dateOfCreation;

        return $this;
    }

    /**
     * @return bool
     */
    public function isUndeliverableRegisteredOfficeAddress(): bool
    {
        return $this->undeliverableRegisteredOfficeAddress;
    }

    /**
     * @param bool $undeliverableRegisteredOfficeAddress
     *
     * @return CompanyProfile
     */
    public function setUndeliverableRegisteredOfficeAddress(bool $undeliverableRegisteredOfficeAddress): CompanyProfile
    {
        $this->undeliverableRegisteredOfficeAddress = $undeliverableRegisteredOfficeAddress;

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
     * @return CompanyProfile
     */
    public function setCompanyStatus(string $companyStatus): CompanyProfile
    {
        $this->companyStatus = $companyStatus;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasInsolvencyHistory(): bool
    {
        return $this->hasInsolvencyHistory;
    }

    /**
     * @param bool $hasInsolvencyHistory
     *
     * @return CompanyProfile
     */
    public function setHasInsolvencyHistory(bool $hasInsolvencyHistory): CompanyProfile
    {
        $this->hasInsolvencyHistory = $hasInsolvencyHistory;

        return $this;
    }

    /**
     * @return bool
     */
    public function isRegisteredOfficeIsInDispute(): bool
    {
        return $this->registeredOfficeIsInDispute;
    }

    /**
     * @param bool $registeredOfficeIsInDispute
     *
     * @return CompanyProfile
     */
    public function setRegisteredOfficeIsInDispute(bool $registeredOfficeIsInDispute): CompanyProfile
    {
        $this->registeredOfficeIsInDispute = $registeredOfficeIsInDispute;

        return $this;
    }

    /**
     * @return Address
     */
    public function getRegisteredOfficeAddress(): Address
    {
        return $this->registeredOfficeAddress;
    }

    /**
     * @param Address $registeredOfficeAddress
     *
     * @return CompanyProfile
     */
    public function setRegisteredOfficeAddress(Address $registeredOfficeAddress): CompanyProfile
    {
        $this->registeredOfficeAddress = $registeredOfficeAddress;

        return $this;
    }

    /**
     * @return array
     */
    public function getAccounts(): array
    {
        return $this->accounts;
    }

    /**
     * @param array $accounts
     *
     * @return CompanyProfile
     */
    public function setAccounts(array $accounts): CompanyProfile
    {
        $this->accounts = $accounts;

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
     * @return CompanyProfile
     */
    public function setLinks(array $links)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * @return array
     */
    public function getSicCodes(): array
    {
        return $this->sicCodes;
    }

    /**
     * @param array $sicCodes
     *
     * @return CompanyProfile
     */
    public function setSicCodes(array $sicCodes): CompanyProfile
    {
        $this->sicCodes = $sicCodes;

        return $this;
    }

    /**
     * @return string
     */
    public function getEtag(): ?string
    {
        return $this->etag;
    }

    /**
     * @param string $etag
     *
     * @return CompanyProfile
     */
    public function setEtag(string $etag)
    {
        $this->etag = $etag;

        return $this;
    }
}