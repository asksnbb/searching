<?php

namespace Monogram\Searching\SearchDrivers;

class FuzzySearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \Monogram\Searching\Matchers\ExactMatcher::class                 => 100,
        \Monogram\Searching\Matchers\StartOfStringMatcher::class         => 50,
        \Monogram\Searching\Matchers\AcronymMatcher::class               => 42,
        \Monogram\Searching\Matchers\ConsecutiveCharactersMatcher::class => 40,
        \Monogram\Searching\Matchers\StartOfWordsMatcher::class          => 35,
        \Monogram\Searching\Matchers\StudlyCaseMatcher::class            => 32,
        \Monogram\Searching\Matchers\InStringMatcher::class              => 30,
        \Monogram\Searching\Matchers\TimesInStringMatcher::class         => 8,
];
}
