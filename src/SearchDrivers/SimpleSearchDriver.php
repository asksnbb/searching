<?php

namespace Monogram\Searchy\SearchDrivers;

class SimpleSearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \Monogram\Searchy\Matchers\ExactMatcher::class                 => 100,
        \Monogram\Searchy\Matchers\StartOfStringMatcher::class         => 50,
        \Monogram\Searchy\Matchers\InStringMatcher::class              => 30,
    ];
}
