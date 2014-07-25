<?php
/**
 * Copyright 2014 Vincent Letourneau. All rights Reserved.
 * Use of this source code is governed by a BSD-style
 * licence that can be found in the LICENCE file.
 */

namespace DesignPattern\Adapter\Social\Adapter;

use DesignPattern\Adapter\Social\Api;

class Facebook implements Writer
{
    /**
     * @var DesignPattern\Adapter\Social\Api\Facebook 
     */
    private $facebook;

    /**
     * Constructor
     *
     * @param  FacebookApi $fb
     * @return void
     */
    public function __construct(Api\Facebook $fb)
    {
        $this->facebook = $fb;
    }

    /**
     * Write a message
     *
     * @param  string $message
     * @return string
     */
    public function write($message)
    {
        return (string) $this->facebook->post($message);
    }
}
