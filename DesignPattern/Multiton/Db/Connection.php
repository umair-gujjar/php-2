<?php
/**
 * Copyright 2014 Vincent Letourneau. All rights Reserved.
 * Use of this source code is governed by a BSD-style
 * licence that can be found in the LICENCE file.
 */

namespace DesignPattern\Multiton\Db;

class Connection
{
    const PARAM_CONF_DSN      = 'dsn';
    const PARAM_CONF_USERNAME = 'username';
    const PARAM_CONF_PASSWORD = 'password';
    const PARAM_CONF_OPTS     = 'options';

    /**
     * @var \DesignPattern\Multiton\Db\Connection
     */
    static private $instances = array();

    /**
     * @var array
     */
    private $defaultConf = array(
        self::PARAM_CONF_DSN      => '',
        self::PARAM_CONF_USERNAME => '',
        self::PARAM_CONF_PASSWORD => '',
        self::PARAM_CONF_OPTS     => array(),
    );

    /**
     * @var \PDO 
     */
    private $db = null;

    /**
     * Returns an instance of db
     * 
     * @return \PDO
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Returns an instance of Connection
     * 
     * @return \DesignPattern\Multiton\Db\Connection
     */
    static public function getInstance(array $conf = array())
    {
        $id = serialize($conf);

        if (!isset(static::$instances[$id])) {
            static::$instances[$id] = new static($conf);
        }
        return static::$instances[$id];
    }

    /**
     * Constructor
     * 
     * @param  array $conf
     * @throws \PDOException
     */
    private function __construct(array $conf)
    {
        $conf = array_merge($this->defaultConf, $conf);

        try {
            $this->db = new \PDO(
                $conf[static::PARAM_CONF_DSN],
                $conf[static::PARAM_CONF_USERNAME],
                $conf[static::PARAM_CONF_PASSWORD],
                $conf[static::PARAM_CONF_OPTS]
            );
        } catch (\PDOException $e) {
            throw $e;
        }
    }

    private function __clone() {}
}
