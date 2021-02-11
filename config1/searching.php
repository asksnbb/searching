<?php

return [

    'default' => 'fuzzy',

    'fieldName' => 'relevance',

    'drivers' => [

        'fuzzy' => [
            'class' => 'Monogram\Searching\SearchDrivers\FuzzySearchDriver',
        ],

        'ufuzzy' => [
            'class' => 'Monogram\Searching\SearchDrivers\FuzzySearchUnicodeDriver',
        ],

        'simple' => [
            'class' => 'Monogram\Searching\SearchDrivers\SimpleSearchDriver',
        ],

        'levenshtein' => [
            'class' => 'Monogram\Searching\SearchDrivers\LevenshteinSearchDriver',
        ],

    ],

];
