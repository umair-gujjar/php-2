<?php
/**
 * Copyright 2014 Vincent Letourneau. All rights Reserved.
 * Use of this source code is governed by a BSD-style
 * licence that can be found in the LICENCE file.
 */

require_once 'Connection.php';

use DesignPattern\Multiton\Db\Connection;

$confA = array(
    Connection::PARAM_CONF_DSN      => 'mysql:host=localhost;dbname=demo',
    Connection::PARAM_CONF_USERNAME => 'foo',
    Connection::PARAM_CONF_PASSWORD => 'secret',
);

$confB = array(
    Connection::PARAM_CONF_DSN      => 'mysql:host=localhost;dbname=mode',
    Connection::PARAM_CONF_USERNAME => 'bar',
    Connection::PARAM_CONF_PASSWORD => 'secret',
);

try {
    $db1 = Connection::getInstance($confA);
    $db2 = Connection::getInstance($confB);
} catch (\Exception $e) {
    exit($e->getMessage());
}

$db1 = Connection::getInstance()->getDb();
$db1->query(/* query string */);

$db2 = Connection::getInstance()->getDb();
$db2->query(/* query string */);