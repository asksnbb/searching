<?php

namespace Monogram\Searchy\SearchDrivers;

class FuzzySearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \Monogram\Searchy\Matchers\ExactMatcher::class                 => 100,
        \Monogram\Searchy\Matchers\StartOfStringMatcher::class         => 50,
        \Monogram\Searchy\Matchers\AcronymMatcher::class               => 42,
        \Monogram\Searchy\Matchers\ConsecutiveCharactersMatcher::class => 40,
        \Monogram\Searchy\Matchers\StartOfWordsMatcher::class          => 35,
        \Monogram\Searchy\Matchers\StudlyCaseMatcher::class            => 32,
        \Monogram\Searchy\Matchers\InStringMatcher::class              => 30,
        \Monogram\Searchy\Matchers\TimesInStringMatcher::class         => 8,
];
}
