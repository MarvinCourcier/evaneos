<?php

namespace Evaneos\Entity;

/**
 * Class Quote
 *
 * @category  Evaneos
 * @package   Evaneos\Entity
 * @author    Marvin Courcier <courciermarvin@gmail.com>
 * @copyright 2020
 */
class Quote
{
    /**
     * Id
     *
     * @var int
     */
    private $id;

    /**
     * SiteId
     *
     * @var int
     */
    private $siteId;

    /**
     * DestinationId
     *
     * @var int
     */
    private $destinationId;

    /**
     * DateQuoted
     *
     * @var \DateTime
     */
    private $dateQuoted;

    /**
     * Quote
     *
     * @param integer   $id
     * @param integer   $siteId
     * @param integer   $destinationId
     * @param \DateTime $dateQuoted
     */
    public function __construct(int $id, int $siteId, int $destinationId, $dateQuoted)
    {
        $this->id            = $id;
        $this->siteId        = $siteId;
        $this->destinationId = $destinationId;
        $this->dateQuoted    = $dateQuoted;
    }

    /**
     * Render Id Quote in HTML
     *
     * @param Quote $quote
     *
     * @return string
     */
    public static function renderHtml(Quote $quote): string
    {
        return '<p>' . $quote->id . '</p>';
    }

    /**
     * Cast Id to string
     *
     * @param Quote $quote
     *
     * @return string
     */
    public static function renderText(Quote $quote)
    {
        return (string) $quote->id;
    }

    /**
     * Get Id
     *
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Id
     *
     * @param integer $id
     *
     * @return self
     */
    public function setid(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Site Id
     *
     * @return integer
     */
    public function getSiteId(): int
    {
        return $this->siteId;
    }

    /**
     * Set Site Id
     *
     * @param integer $siteId
     *
     * @return self
     */
    public function setSiteId(int $siteId): self
    {
        $this->siteId = $siteId;

        return $this;
    }

    /**
     * Get Destination Id
     *
     * @return integer
     */
    public function getDestinationId(): int
    {
        return $this->destinationId;
    }

    /**
     * Set Destination Id
     *
     * @param integer $destinationId
     *
     * @return self
     */
    public function setDestinationId(int $destinationId): self
    {
        $this->destinationId = $destinationId;

        return $this;
    }

    /**
     * Get Date Quoted
     *
     * @return \DateTime
     */
    public function getDateQuoted()
    {
        return $this->dateQuoted;
    }

    /**
     * Set Date Quoted
     *
     * @param \DateTime $dateQuoted
     *
     * @return self
     */
    public function setDateQuoted($dateQuoted): self
    {
        $this->dateQuoted = $dateQuoted;

        return $this;
    }
}
