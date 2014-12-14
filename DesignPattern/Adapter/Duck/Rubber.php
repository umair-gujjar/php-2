<?php
/**
 * Copyright 2014 Vincent Letourneau. All rights Reserved.
 * Use of this source code is governed by a BSD-style
 * licence that can be found in the LICENCE file.
 */

namespace DesignPattern\Adapter\Duck;

class Rubber implements Quackable
{
    public function quack()
    {
        echo 'Rubber: Squeak <br>';
    }
}
