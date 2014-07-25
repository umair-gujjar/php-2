<?php
/**
 * Copyright 2014 Vincent Letourneau. All rights Reserved.
 * Use of this source code is governed by a BSD-style
 * licence that can be found in the LICENCE file.
 */

namespace DesignPattern\Adapter\Social\Adapter;

interface Writer
{
    /**
     * Write a text
     * 
     * @param string $text
     */
    public function write($text);
}
