<?php
/**
 * Copyright 2014 Vincent Letourneau. All rights Reserved.
 * Use of this source code is governed by a BSD-style
 * licence that can be found in the LICENCE file.
 */

namespace DesignPattern\Adapter\Social\Adapter;

use DesignPattern\Adapter\Social\Api;

class Twitter implements Writer
{
    /**
     * @var \DesignPattern\Adapter\Social\Api\Twitter
     */
    private $twitter;

    /**
     * Constructor
     *
     * @param  \DesignPattern\Adapter\Social\Api\Twitter $t
     * @return void
     */
    public function __construct(Api\Twitter $t)
    {
        $this->twitter = $t;
    }

    /**
     * Write a message on twitter
     *
     * @param  string $message
     * @return string
     */
    public function write($message)
    {
        return (string) $this->twitter->tweet($message);
    }
}
