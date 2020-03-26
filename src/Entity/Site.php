<?php

namespace Evaneos\Entity;

/**
 * Class Site
 *
 * @category  Evaneos
 * @package   Evaneos\Entity
 * @author    Marvin Courcier <courciermarvin@gmail.com>
 * @copyright 2020
 */
class Site
{
    /**
     * Id
     *
     * @var int
     */
    private $id;

    /**
     * Url
     *
     * @var string
     */
    private $url;

    /**
     * Site Constructor.
     *
     * @param int    $id
     * @param string $url
     */
    public function __construct(int $id, string $url)
    {
        $this->id  = $id;
        $this->url = $url;
    }

    /**
     * Get Id
     *
     * @return int
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
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set Url
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }
}
