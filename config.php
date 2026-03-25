<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'MDA - Full Stack Web Developer',
    'description' => 'Portfolio website for Muhammad Dawil Akmami.',

    'collections' => [
        'projects' => [
            'path' => 'projects/{filename}',
            'sort' => '-date',
        ],
    ],
];
