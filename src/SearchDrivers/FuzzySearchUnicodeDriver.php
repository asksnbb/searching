<?php

namespace Monogram\Searchy\SearchDrivers;

class FuzzySearchUnicodeDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \Monogram\Searchy\Matchers\ExactMatcher::class                        => 100,
        \Monogram\Searchy\Matchers\StartOfStringMatcher::class                => 50,
        \Monogram\Searchy\Matchers\AcronymUnicodeMatcher::class               => 42,
        \Monogram\Searchy\Matchers\ConsecutiveCharactersUnicodeMatcher::class => 40,
        \Monogram\Searchy\Matchers\StartOfWordsMatcher::class                 => 35,
        \Monogram\Searchy\Matchers\StudlyCaseUnicodeMatcher::class            => 32,
        \Monogram\Searchy\Matchers\InStringMatcher::class                     => 30,
        \Monogram\Searchy\Matchers\TimesInStringMatcher::class                => 8,
  ];
}
