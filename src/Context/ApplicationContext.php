<?php

/**
 * Class ApplicationContext
 *
 * @category  Evaneos
 * @package   Evaneos\Context
 * @author    Marvin Courcier <courciermarvin@gmail.com>
 * @copyright 2020
 */
class ApplicationContext
{
    use SingletonTrait;

    /**
     * @var Site
     */
    private $currentSite;

    /**
     * @var User
     */
    private $currentUser;

    /**
     * ApplicationContext Constructor.
     */
    private function __construct()
    {
        $faker             = \Faker\Factory::create();
        $this->currentSite = new Site($faker->randomNumber(), $faker->url);
        $this->currentUser = new User($faker->randomNumber(), $faker->firstName, $faker->lastName, $faker->email);
    }

    /**
     * Get Current Site
     *
     * @return Site|null
     */
    public function getCurrentSite(): ?Site
    {
        return $this->currentSite;
    }

    /**
     * Set Current Site
     *
     * @param Site $currentSite
     *
     * @return self
     */
    public function setCurrentSite(Site $currentSite)
    {
        $this->currentSite = $currentSite;

        return $this;
    }

    /**
     * Get Current User
     *
     * @return User
     */
    public function getCurrentUser()
    {
        return $this->currentUser;
    }

    /**
     * Set Current User
     *
     * @param User $currentUser
     *
     * @return self
     */
    public function setCurrentUser(User $currentUser)
    {
        $this->getCurrentUser = $currentUser;

        return $this;
    }
}
