<?php

namespace Monogram\Searchy\SearchDrivers;

class LevenshteinSearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \Monogram\Searchy\Matchers\LevenshteinMatcher::class           => 100,
    ];
}
