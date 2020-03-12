<?php

/**
 * Trait SingletonTrait
 *
 * @category  Evaneos
 * @package   Evaneos\Helper
 * @author    Marvin Courcier <courciermarvin@gmail.com>
 * @copyright 2020
 */
trait SingletonTrait
{
    /**
     * @var $this
     */
    protected static $instance = null;

    /**
     * Get Class Instance
     *
     * @return $this
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new static();
        }

        return self::$instance;
    }
}
