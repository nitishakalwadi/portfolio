<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/portfolio/blog2/user/config/plugins/relatedpages.yaml',
    'modified' => 1456923674,
    'data' => [
        'enabled' => true,
        'limit' => 4,
        'show_score' => false,
        'score_threshold' => 20,
        'filter' => [
            'items' => [
                '@page' => '/blog'
            ],
            'order' => [
                'by' => 'date',
                'dir' => 'desc'
            ]
        ],
        'page_in_filter' => true,
        'explicit_pages' => [
            'process' => true,
            'score' => 100
        ],
        'taxonomy_match' => [
            'taxonomy' => 'tag',
            'taxonomy_taxonomy' => [
                'process' => true,
                'score_scale' => [
                    1 => 50,
                    2 => 75,
                    3 => 100
                ]
            ],
            'taxonomy_content' => [
                'process' => true,
                'score_scale' => [
                    1 => 20,
                    2 => 30,
                    3 => 45,
                    4 => 60,
                    5 => 70,
                    6 => 80,
                    7 => 90,
                    8 => 100
                ]
            ]
        ],
        'content_match' => [
            'process' => true
        ]
    ]
];
