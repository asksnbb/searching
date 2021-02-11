<?php

namespace Monogram\Searching\SearchDrivers;

class LevenshteinSearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \Monogram\Searching\Matchers\LevenshteinMatcher::class           => 100,
    ];
}
