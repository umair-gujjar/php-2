<?php
/**
 * Copyright 2014 Vincent Letourneau. All rights Reserved.
 * Use of this source code is governed by a BSD-style
 * licence that can be found in the LICENCE file.
 */

require_once 'Quackable.php';
require_once 'Duck.php';
require_once 'Rubber.php';
require_once 'Goose.php';
require_once 'GooseAdapter.php';

use DesignPattern\Adapter\Duck;

$duck   = new Duck\Duck();
$rubber = new Duck\Rubber();
$goose  = new Duck\GooseAdapter(new Duck\Goose());

foreach ([$duck, $rubber, $goose] as $duck) {
    $duck->quack() . '<br>';
}
