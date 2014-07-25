<?php
/**
 * Copyright 2014 Vincent Letourneau. All rights Reserved.
 * Use of this source code is governed by a BSD-style
 * licence that can be found in the LICENCE file.
 */

require_once 'Api/Facebook.php';
require_once 'Api/Twitter.php';
require_once 'Adapter/Writer.php';
require_once 'Adapter/Facebook.php';
require_once 'Adapter/Twitter.php';
require_once 'Api.php';

use DesignPattern\Adapter\Social\Api;
use DesignPattern\Adapter\Social\Adapter;

// Simple social api
$api = new Api();

// Facebook Adapter
$facebook = new Api\Facebook();
$facebookAdapter = new Adapter\Facebook($facebook);

// Twitter Adapter
$twitter = new Api\Twitter();
$twitterAdapter = new Adapter\Twitter($twitter);

// Using API
foreach([$facebookAdapter, $twitterAdapter] as $writer) {
    echo $api->setAdapter($writer)->write(
        sprintf('<p>%s: %s</p>', get_class($writer), 'Hey !')
    );
}
