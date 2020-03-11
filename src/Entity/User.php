<?php

/**
 * Class User
 *
 * @category  Evaneos
 * @package   Evaneos\Entity
 * @author    Marvin Courcier <courciermarvin@gmail.com>
 * @copyright 2020
 */
class User
{
    /**
     * Id
     *
     * @var int
     */
    private $id;

    /**
     * Firstname
     *
     * @var string
     */
    private $firstname;

    /**
     * Lastname
     *
     * @var string
     */
    private $lastname;

    /**
     * Email
     *
     * @var string
     */
    private $email;

    /**
     * User Constructor.
     *
     * @param integer $id
     * @param string  $firstname
     * @param string  $lastname
     * @param string  $email
     */
    public function __construct(int $id, string $firstname, string $lastname, string $email)
    {
        $this->id        = $id;
        $this->firstname = $firstname;
        $this->lastname  = $lastname;
        $this->email     = $email;
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
     * Get Firstname
     *
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set Firstname
     *
     * @param string $firstname
     *
     * @return self
     */
    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;
        
        return $this;
    }

    /**
     * Get Lastname
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * Set LastName
     *
     * @param string $lastname
     *
     * @return self
     */
    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get Email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set Email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
