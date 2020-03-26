<?php

namespace Evaneos\Entity;

/**
 * Class Destination
 *
 * @category  Evaneos
 * @package   Evaneos\Entity
 * @author    Marvin Courcier <courciermarvin@gmail.com>
 * @copyright 2020
 */
class Destination
{
    /**
     * Id
     *
     * @var int
     */
    private $id;

    /**
     * CountryName
     *
     * @var string
     */
    private $countryName;

    /**
     * Conjunction
     *
     * @var string
     */
    private $conjunction;

    /**
     * Name
     *
     * @var string
     */
    private $name;

    /**
     * ComputerName
     *
     * @var string
     */
    private $computerName;

    /**
     * Destination Constructor.
     *
     * @param integer $id
     * @param string  $countryName
     * @param string  $conjunction
     * @param string  $computerName
     */
    public function __construct(int $id, string $countryName, string $conjunction, string $computerName)
    {
        $this->id           = $id;
        $this->countryName  = $countryName;
        $this->conjunction  = $conjunction;
        $this->computerName = $computerName;
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
     * Get CountryName
     *
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }

    /**
     * Set CountryName
     *
     * @param string $countryName
     *
     * @return self
     */
    public function setCountryName(string $countryName): self
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * Get Conjunction
     *
     * @return string
     */
    public function getConjunction(): string
    {
        return $this->conjunction;
    }

    /**
     * Set Conjunction
     *
     * @param string $conjunction
     *
     * @return self
     */
    public function setConjunction(string $conjunction): self
    {
        $this->conjunction = $conjunction;

        return $this;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Computer Name
     *
     * @return string
     */
    public function getComputerName(): string
    {
        return $this->computerName;
    }

    /**
     * Set ComputerName
     *
     * @param string $computerName
     *
     * @return self
     */
    public function setComputerName(string $computerName): self
    {
        $this->computerName = $computerName;

        return $this;
    }
}
