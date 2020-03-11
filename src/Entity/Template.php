<?php

/**
 * Class Template
 *
 * @category  Evaneos
 * @package   Evaneos\Entity
 * @author    Marvin Courcier <courciermarvin@gmail.com>
 * @copyright 2020
 */
class Template
{
    /**
     * Id
     *
     * @var int
     */
    private $id;

    /**
     * Subject
     *
     * @var string
     */
    private $subject;

    /**
     * Content
     *
     * @var string
     */
    private $content;

    /**
     * Template Constructor.
     *
     * @param int    $id
     * @param string $subject
     * @param string $content
     */
    public function __construct(int $id, string $subject, string $content)
    {
        $this->id      = $id;
        $this->subject = $subject;
        $this->content = $content;
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
     * Get Subject
     *
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * Set Subject
     *
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get Content
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set Content
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
}