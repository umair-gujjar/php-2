<?php
/**
 * Copyright 2014 Vincent Letourneau. All rights Reserved.
 * Use of this source code is governed by a BSD-style
 * licence that can be found in the LICENCE file.
 */

namespace DesignPattern\Adapter\Social\Api;

class Facebook
{
    /**
     * Post a message on the wall
     *
     * @param  string $message
     * @return string
     */
    public function post($message)
    {
        return (string) $message;
    }
}
