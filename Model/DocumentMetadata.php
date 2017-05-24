<?php

namespace Wearescytale\CompaniesHouseBundle\Model;

use DateTime;

/**
 * Class DocumentMetadata
 */
class DocumentMetadata
{
    /**
     * @var string
     */
    private $companyNumber;

    /**
     * @var string
     */
    private $category;

    /**
     * @var string
     */
    private $barcode;

    /**
     * @var int
     */
    private $pages;

    ///**
    // * @var DateTime
    // */
    //private $createdAt;
    //
    ///**
    // * @var DateTime
    // */
    //private $updatedAt;

    /**
     * @var DateTime
     */
    private $significantDate;

    /**
     * @var string
     */
    private $significantDateType;

    /**
     * @var string
     */
    private $etag;

    /**
     * @var array
     */
    private $links = array();

    /**
     * @var array
     */
    private $resources = array();

    /**
     * @return string|null
     */
    public function getDocumentContentLink()
    {
        $links = $this->getLinks();

        if ($links && isset($links['document'])) {

            return $links['document'];
        }

        return null;
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
     * @return DocumentMetadata
     */
    public function setCompanyNumber(string $companyNumber): DocumentMetadata
    {
        $this->companyNumber = $companyNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     *
     * @return DocumentMetadata
     */
    public function setCategory(string $category): DocumentMetadata
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode(): string
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     *
     * @return DocumentMetadata
     */
    public function setBarcode(string $barcode): DocumentMetadata
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * @return int
     */
    public function getPages(): int
    {
        return $this->pages;
    }

    /**
     * @param int $pages
     *
     * @return DocumentMetadata
     */
    public function setPages(int $pages): DocumentMetadata
    {
        $this->pages = $pages;

        return $this;
    }

    ///**
    // * @return DateTime
    // */
    //public function getCreatedAt(): DateTime
    //{
    //    return $this->createdAt;
    //}
    //
    ///**
    // * @param DateTime $createdAt
    // *
    // * @return DocumentMetadata
    // */
    //public function setCreatedAt(DateTime $createdAt): DocumentMetadata
    //{
    //    $this->createdAt = $createdAt;
    //
    //    return $this;
    //}
    //
    ///**
    // * @return DateTime
    // */
    //public function getUpdatedAt(): DateTime
    //{
    //    return $this->updatedAt;
    //}
    //
    ///**
    // * @param DateTime $updatedAt
    // *
    // * @return DocumentMetadata
    // */
    //public function setUpdatedAt(DateTime $updatedAt): DocumentMetadata
    //{
    //    $this->updatedAt = $updatedAt;
    //
    //    return $this;
    //}

    /**
     * @return DateTime
     */
    public function getSignificantDate(): DateTime
    {
        return $this->significantDate;
    }

    /**
     * @param DateTime $significantDate
     *
     * @return DocumentMetadata
     */
    public function setSignificantDate(DateTime $significantDate): DocumentMetadata
    {
        $this->significantDate = $significantDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignificantDateType(): string
    {
        return $this->significantDateType;
    }

    /**
     * @param string $significantDateType
     *
     * @return DocumentMetadata
     */
    public function setSignificantDateType(string $significantDateType): DocumentMetadata
    {
        $this->significantDateType = $significantDateType;

        return $this;
    }

    /**
     * @return string
     */
    public function getEtag(): string
    {
        return $this->etag;
    }

    /**
     * @param string $etag
     *
     * @return DocumentMetadata
     */
    public function setEtag(string $etag): DocumentMetadata
    {
        $this->etag = $etag;

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
     * @return DocumentMetadata
     */
    public function setLinks(array $links): DocumentMetadata
    {
        $this->links = $links;

        return $this;
    }

    /**
     * @return array
     */
    public function getResources(): array
    {
        return $this->resources;
    }

    /**
     * @param array $resources
     *
     * @return DocumentMetadata
     */
    public function setResources(array $resources): DocumentMetadata
    {
        $this->resources = $resources;

        return $this;
    }
}