<?php
/**
 * Copyright 2014 Vincent Letourneau. All rights Reserved.
 * Use of this source code is governed by a BSD-style
 * licence that can be found in the LICENCE file.
 */

require_once 'Connection.php';

use DesignPattern\Singleton\Db\Connection;

define('DB_DSN', 'mysql:host=localhost;dbname=demo');
define('DB_USERNAME', 'foo');
define('DB_PASSWORD', 'secret');

try {
    Connection::getInstance(DB_DSN, DB_USERNAME, DB_PASSWORD);
} catch (\PDOException $e) {
    exit($e->getMessage());
}

$db = Connection::getInstance()->getDb();
$db->query(/* query string */);
