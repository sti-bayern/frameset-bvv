<?php

namespace Stia\FramesetBvv\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Stia\FramesetBvv\FramesetBvv
 */
class FramesetBvv extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'frameset-bvv';
    }
}
