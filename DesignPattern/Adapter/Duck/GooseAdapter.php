<?php
/**
 * Copyright 2014 Vincent Letourneau. All rights Reserved.
 * Use of this source code is governed by a BSD-style
 * licence that can be found in the LICENCE file.
 */

namespace DesignPattern\Adapter\Duck;

class GooseAdapter implements Quackable
{
    /**
     * @var Goose 
     */
    private $goose;

    /**
     * Constructor
     * 
     * @param  \DesignPattern\Adapter\Duck\Goose $goose
     * @return void
     */
    public function __construct(Goose $goose)
    {
        $this->goose = $goose;
    }

    /**
     * Quack
     * 
     * @return void
     */
    public function quack()
    {
        $this->goose->honk();
    }
}
