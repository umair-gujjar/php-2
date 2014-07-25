<?php
/**
 * Copyright 2014 Vincent Letourneau. All rights Reserved.
 * Use of this source code is governed by a BSD-style
 * licence that can be found in the LICENCE file.
 */

namespace DesignPattern\Adapter\Social\Api;

class Twitter
{
    /**
     * Tweet a message on twitter
     *
     * @param  string $text
     * @return string
     */
    public function tweet($text)
    {
        return (string) $text;
    }
}
