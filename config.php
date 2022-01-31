<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Luke Bouch',
    'siteDescription' => 'Luke Bouch is a full-stacked Laravel developer specializing in the TALL stack.',
    'siteAuthor' => 'Luke',

    'collections' => [],

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
];
