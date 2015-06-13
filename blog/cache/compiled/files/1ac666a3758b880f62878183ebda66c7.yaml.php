<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/config/site.yaml',
    'modified' => 1434186515,
    'data' => [
        'title' => 'Notepad',
        'description' => 'Blogging is fun',
        'author' => [
            'name' => 'Karol Orzel',
            'email' => 'karol@rockettheme.com'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'taxonomies' => [
            0 => 'tag'
        ],
        'owner' => [
            'name' => 'Your Name',
            'email' => 'you@email.com',
            'description' => 'Awesome Dude, Awesome Life',
            'twitter' => 'getgrav',
            'facebook' => 'getgrav',
            'github' => 'getgrav',
            'instagram' => 'getgrav',
            'google_plus' => 'https://plus.google.com/+getgrav'
        ],
        'logo' => '/user/themes/notepad/images/logo.png',
        'google_analytics' => NULL,
        'google_verify' => NULL,
        'bing_verify' => NULL,
        'links' => [
            0 => [
                'title' => 'Featured Posts',
                'url' => '/featured'
            ],
            1 => [
                'title' => 'Categories',
                'url' => '/categories'
            ],
            2 => [
                'title' => 'About',
                'url' => '/about'
            ]
        ],
        'include' => [
            0 => '.htaccess'
        ],
        'exclude' => [
            0 => 'lib',
            1 => 'config.rb',
            2 => 'Gemfile',
            3 => 'Capfile',
            4 => 'Gemfile.lock',
            5 => 'config',
            6 => 'log',
            7 => 'Rakefile',
            8 => 'Rakefile.rb',
            9 => 'tmp',
            10 => 'less',
            11 => '*.sublime-project',
            12 => '*.sublime-workspace',
            13 => 'test',
            14 => 'spec',
            15 => 'Gruntfile.js',
            16 => 'package.json',
            17 => 'node_modules'
        ]
    ]
];
