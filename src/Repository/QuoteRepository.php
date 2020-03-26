<?php

namespace Evaneos\Repository;

use Evaneos\Helper\SingletonTrait;
use Evaneos\Entity\Quote;

/**
 * Class QuoteRepository
 *
 * @category  Evaneos
 * @package   Evaneos\Repository
 * @author    Marvin Courcier <courciermarvin@gmail.com>
 * @copyright 2020
 */
class QuoteRepository implements Repository
{
    use SingletonTrait;

    /**
     * Site Id
     *
     * @var int
     */
    private $siteId;

    /**
     * Destination Id
     *
     * @var int
     */
    private $destinationId;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $date;

    /**
     * QuoteRepository constructor.
     */
    private function __construct()
    {
        // DO NOT MODIFY THIS METHOD
        $generator = \Faker\Factory::create();

        $this->siteId        = $generator->numberBetween(1, 10);
        $this->destinationId = $generator->numberBetween(1, 200);
        $this->date          = new \DateTime();
    }

    /**
     * Get by Id
     *
     * @param int $id
     *
     * @return Quote
     */
    public function getById($id)
    {
        // DO NOT MODIFY THIS METHOD
        return new Quote(
            $id,
            $this->siteId,
            $this->destinationId,
            $this->date
        );
    }
}
