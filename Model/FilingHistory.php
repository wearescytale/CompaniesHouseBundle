<?php

namespace Wearescytale\CompaniesHouseBundle\Model;

use DateTime;

/**
 * Class FilingHistory
 */
class FilingHistory
{
    /**
     * @var string
     */
    private $category;

    /**
     * @var string
     */
    private $subcategory;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $pages;

    /**
     * @var string
     */
    private $barcode;

    /**
     * @var DateTime
     */
    private $actionDate;

    /**
     * @var DateTime
     */
    private $date;

    /**
     * @var array
     */
    private $descriptionValues = array();

    /**
     * @var array
     */
    private $links = array();

    /**
     * @var array
     */
    private $resolutions = array();

    /**
     * @var array
     */
    private $annotations = array();

    /**
     * @var array
     */
    private $associatedFilings = array();

    /**
     * @var string
     */
    private $transactionId;

    /**
     * @var bool
     */
    private $paperFiled = false;

    /**
     * @return string|null
     */
    public function getDocumentMetadataLink()
    {
        $links = $this->getLinks();

        if ($links && isset($links['document_metadata'])) {

            return $links['document_metadata'];
        }

        return null;
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
     * @return FilingHistory
     */
    public function setCategory(string $category): FilingHistory
    {
        $this->category = $category;

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
     * @return FilingHistory
     */
    public function setType(string $type): FilingHistory
    {
        $this->type = $type;

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
     * @return FilingHistory
     */
    public function setDescription(string $description): FilingHistory
    {
        $this->description = $description;

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
     * @return FilingHistory
     */
    public function setPages(int $pages): FilingHistory
    {
        $this->pages = $pages;

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
     * @return FilingHistory
     */
    public function setBarcode(string $barcode): FilingHistory
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getActionDate(): DateTime
    {
        return $this->actionDate;
    }

    /**
     * @param DateTime $actionDate
     *
     * @return FilingHistory
     */
    public function setActionDate(DateTime $actionDate): FilingHistory
    {
        $this->actionDate = $actionDate;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     *
     * @return FilingHistory
     */
    public function setDate(DateTime $date): FilingHistory
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return array
     */
    public function getDescriptionValues(): array
    {
        return $this->descriptionValues;
    }

    /**
     * @param array $descriptionValues
     *
     * @return FilingHistory
     */
    public function setDescriptionValues(array $descriptionValues): FilingHistory
    {
        $this->descriptionValues = $descriptionValues;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     *
     * @return FilingHistory
     */
    public function setTransactionId(string $transactionId): FilingHistory
    {
        $this->transactionId = $transactionId;

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
     * @return FilingHistory
     */
    public function setLinks(array $links): FilingHistory
    {
        $this->links = $links;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubcategory(): string
    {
        return $this->subcategory;
    }

    /**
     * @param string $subcategory
     *
     * @return FilingHistory
     */
    public function setSubcategory(string $subcategory): FilingHistory
    {
        $this->subcategory = $subcategory;

        return $this;
    }

    /**
     * @return array
     */
    public function getResolutions(): array
    {
        return $this->resolutions;
    }

    /**
     * @param array $resolutions
     *
     * @return FilingHistory
     */
    public function setResolutions(array $resolutions): FilingHistory
    {
        $this->resolutions = $resolutions;

        return $this;
    }

    /**
     * @return array
     */
    public function getAnnotations(): array
    {
        return $this->annotations;
    }

    /**
     * @param array $annotations
     *
     * @return FilingHistory
     */
    public function setAnnotations(array $annotations): FilingHistory
    {
        $this->annotations = $annotations;

        return $this;
    }

    /**
     * @return array
     */
    public function getAssociatedFilings(): array
    {
        return $this->associatedFilings;
    }

    /**
     * @param array $associatedFilings
     *
     * @return FilingHistory
     */
    public function setAssociatedFilings(array $associatedFilings): FilingHistory
    {
        $this->associatedFilings = $associatedFilings;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPaperFiled(): bool
    {
        return $this->paperFiled;
    }

    /**
     * @param bool $paperFiled
     *
     * @return FilingHistory
     */
    public function setPaperFiled(bool $paperFiled): FilingHistory
    {
        $this->paperFiled = $paperFiled;

        return $this;
    }
}