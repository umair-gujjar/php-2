<?php
/**
 * Copyright 2014 Vincent Letourneau. All rights Reserved.
 * Use of this source code is governed by a BSD-style
 * licence that can be found in the LICENCE file.
 */

namespace DesignPattern\Adapter\Social;

use DesignPattern\Adapter\Social\Adapter\Writer;

class Api implements Writer
{
    /**
     * @var \DesignPattern\Adapter\Social\Adapter\Writer;
     */
    private $adapter;

    /**
     * Constructor
     * 
     * @param  \DesignPattern\Adapter\Social\Adapter\Writer $adapter
     * &return void
     */
    public function __constructor(Writer $adapter = null)
    {
        if (null !== $adapter) {
            $this->setAdapter($adapter);
        }
    }

    /**
     * Sets a social adapter
     * 
     * @param  \DesignPattern\Adapter\Social\Adapter\Writer $adapter
     * @return \DesignPattern\Adapter\Api
     */
    public function setAdapter(Writer $adapter)
    {
        $this->adapter = $adapter;
        return $this;
    }

    /**
     * Returns a social adapter
     * 
     * @return Writer
     */
    public function getAdapter()
    {
        return $this->adapter;
    }

    /**
     * Write a basic social message
     * 
     * @param  string $message
     * @return string
     */
    public function write($message)
    {
        return (string) $this->getAdapter()->write($message);
    }
}
