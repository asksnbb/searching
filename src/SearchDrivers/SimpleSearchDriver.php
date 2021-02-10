<?php

namespace Monogram\Searching\SearchDrivers;

class SimpleSearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \Monogram\Searching\Matchers\ExactMatcher::class                 => 100,
        \Monogram\Searching\Matchers\StartOfStringMatcher::class         => 50,
        \Monogram\Searching\Matchers\InStringMatcher::class              => 30,
    ];
}
