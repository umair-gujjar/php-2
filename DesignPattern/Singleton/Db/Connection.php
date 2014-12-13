<?php
/**
 * Copyright 2014 Vincent Letourneau. All rights Reserved.
 * Use of this source code is governed by a BSD-style
 * licence that can be found in the LICENCE file.
 */

namespace DesignPattern\Singleton\Db;

class Connection
{
    /**
     * @var \DesignPattern\Singleton\Db\Connection
     */
    static private $instance = null;

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
     * @return \DesignPattern\Singleton\Db\Connection
     */
    static public function getInstance($dsn = '', $username = '', $passwd = '', $opts = [])
    {
        if (null === static::$instance) {
            static::$instance = new static($dsn, $username, $passwd, $opts);
        }
        return static::$instance;
    }

    /**
     * Constructor
     * 
     * @param  string $dsn
     * @param  string $username
     * @param  string $passwd
     * @param  array $opts
     * @throws \PDOException
     */
    private function __construct($dsn, $username, $passwd, $opts)
    {
        try {
            $this->db = new \PDO($dsn, $username, $passwd, $opts);
        } catch (\PDOException $e) {
            throw $e;
        }
    }

    private function __clone() {}
}
