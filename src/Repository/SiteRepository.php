<?php

/**
 * Class SiteRepository
 *
 * @category  Evaneos
 * @package   Evaneos\Repository
 * @author    Marvin Courcier <courciermarvin@gmail.com>
 * @copyright 2020
 */
class SiteRepository implements Repository
{
    use SingletonTrait;

    /**
     * Url
     *
     * @var string
     */
    private $url;

    /**
     * SiteRepository constructor.
     */
    private function __construct()
    {
        // DO NOT MODIFY THIS METHOD
        $this->url = Faker\Factory::create()->url;
    }

    /**
     * @param int $id
     *
     * @return Site
     */
    public function getById($id)
    {
        // DO NOT MODIFY THIS METHOD
        return new Site($id, $this->url);
    }
}
