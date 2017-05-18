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
}