<?php

namespace Evaneos\Repository;

use Evaneos\Helper\SingletonTrait;
use Evaneos\Entity\Destination;

/**
 * Class DestinationRepository
 *
 * @category  Evaneos
 * @package   Evaneos\Repository
 * @author    Marvin Courcier <courciermarvin@gmail.com>
 * @copyright 2020
 */
class DestinationRepository implements Repository
{
    use SingletonTrait;

    /**
     * Country
     *
     * @var string
     */
    private $country;

    /**
     * Conjunction
     *
     * @var string
     */
    private $conjunction;

    /**
     * Computer Name
     *
     * @var string
     */
    private $computerName;

    /**
     * DestinationRepository constructor.
     */
    private function __construct()
    {
        $this->country      = \Faker\Factory::create()->country;
        $this->conjunction  = 'en';
        $this->computerName = \Faker\Factory::create()->slug();
    }

    /**
     * @param int $id
     *
     * @return Destination
     */
    public function getById($id)
    {
        // DO NOT MODIFY THIS METHOD
        return new Destination(
            $id,
            $this->country,
            $this->conjunction,
            $this->computerName
        );
    }

    /**
     * Get Country
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Set Country
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;

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
     * @param string $conjunctions
     *
     * @return self
     */
    public function setConjunction(string $conjunctions): self
    {
        $this->conjunction = $conjunctions;

        return $this;
    }

    /**
     * Get ComputerName
     *
     * @return string
     */
    public function getComputerName(): string
    {
        return $this->computerName;
    }

    /**
     * Set Computer Name
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
