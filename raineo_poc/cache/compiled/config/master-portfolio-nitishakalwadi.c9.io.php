<?php
return [
    '@class' => 'Grav\\Common\\Config\\Config',
    'timestamp' => 1434454544,
    'checksum' => '044767aec417928f8b443564b6d65196',
    'data' => [
        'streams' => [
            'schemes' => [
                'system' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'system'
                        ]
                    ]
                ],
                'user' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user'
                        ]
                    ]
                ],
                'blueprints' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://blueprints',
                            1 => 'system/blueprints'
                        ]
                    ]
                ],
                'config' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://config',
                            1 => 'system/config'
                        ]
                    ]
                ],
                'plugins' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://plugins'
                        ]
                    ]
                ],
                'plugin' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://plugins'
                        ]
                    ]
                ],
                'themes' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://themes'
                        ]
                    ]
                ],
                'cache' => [
                    'type' => 'Stream',
                    'prefixes' => [
                        '' => [
                            0 => 'cache'
                        ],
                        'images' => [
                            0 => 'images'
                        ]
                    ]
                ],
                'log' => [
                    'type' => 'Stream',
                    'prefixes' => [
                        '' => [
                            0 => 'logs'
                        ]
                    ]
                ],
                'backup' => [
                    'type' => 'Stream',
                    'prefixes' => [
                        '' => [
                            0 => 'backup'
                        ]
                    ]
                ],
                'asset' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'assets'
                    ]
                ],
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'plugins' => [
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'simple_form' => [
                'enabled' => true,
                'token' => '',
                'template_file' => 'simple_form',
                'fields' => [
                    'name' => [
                        'type' => 'text',
                        'title' => 'Name',
                        'default' => '',
                        'placeholder' => 'Add your name',
                        'class' => '',
                        'required' => true
                    ],
                    'category' => [
                        'type' => 'select',
                        'title' => 'Category',
                        'class' => '',
                        'default' => 'Select one category',
                        'options' => [
                            0 => 'Category 1',
                            1 => 'Category 2'
                        ],
                        'required' => true
                    ],
                    'email' => [
                        'type' => 'email',
                        'title' => 'Email',
                        'default' => '',
                        'placeholder' => 'Add your email',
                        'class' => '',
                        'required' => true
                    ],
                    'message' => [
                        'type' => 'textarea',
                        'title' => 'Message',
                        'default' => '',
                        'placeholder' => 'Add your message',
                        'class' => '',
                        'required' => true
                    ],
                    'submit' => [
                        'type' => 'submit',
                        'title' => 'Submit',
                        'default' => '',
                        'class' => ''
                    ]
                ],
                'messages' => [
                    'success' => 'Your message has been sent.'
                ]
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'param_sep' => ':',
            'home' => [
                'alias' => '/home'
            ],
            'pages' => [
                'theme' => 'agency',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => false,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => 'txt|xml|html|json|rss|atom',
                'expires' => 0,
                'markdown_extra' => false
            ],
            'cache' => [
                'enabled' => false,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'lifetime' => 604800,
                'gzip' => false
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.1.3.min.js'
                ]
            ],
            'errors' => [
                'display' => true,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'twig' => true,
                'shutdown' => [
                    'close_connection' => true
                ]
            ],
            'images' => [
                'default_image_quality' => 85,
                'debug' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'upload_limit' => 0
            ],
            'security' => [
                'default_hash' => '$2y$10$kwsyMVwM8/7j0K/6LHT.g.Fs49xOCTp2b8hh/S5.dPJuJcJB6T.UK'
            ]
        ],
        'media' => [
            'defaults' => [
                'type' => 'file',
                'thumb' => 'media/thumb.png',
                'mime' => 'application/octet-stream',
                'image' => [
                    'filters' => [
                        'default' => [
                            0 => 'enableProgressive'
                        ]
                    ]
                ]
            ],
            'jpg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpg.png',
                'mime' => 'image/jpeg'
            ],
            'jpeg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpeg.png',
                'mime' => 'image/jpeg'
            ],
            'png' => [
                'type' => 'image',
                'thumb' => 'media/thumb-png.png',
                'mime' => 'image/png'
            ],
            'gif' => [
                'type' => 'animated',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/gif'
            ],
            'svg' => [
                'type' => 'vector',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/svg+xml'
            ],
            'mp4' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mp4.png',
                'mime' => 'video/mp4'
            ],
            'mov' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mov.png',
                'mime' => 'video/quicktime'
            ],
            'm4v' => [
                'type' => 'video',
                'thumb' => 'media/thumb-m4v.png',
                'mime' => 'video/x-m4v'
            ],
            'swf' => [
                'type' => 'video',
                'thumb' => 'media/thumb-swf.png',
                'mime' => 'video/x-flv'
            ],
            'flv' => [
                'type' => 'video',
                'thumb' => 'media/thumb-flv.png',
                'mime' => 'video/x-flv'
            ],
            'mp3' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-mp3.png',
                'mime' => 'audio/mp3'
            ],
            'ogg' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-ogg.png',
                'mime' => 'audio/ogg'
            ],
            'wma' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wma.png',
                'mime' => 'audio/wma'
            ],
            'm4a' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-m4a.png',
                'mime' => 'audio/m4a'
            ],
            'wav' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wav.png',
                'mime' => 'audio/wav'
            ],
            'txt' => [
                'type' => 'file',
                'thumb' => 'media/thumb-txt.png',
                'mime' => 'text/plain'
            ],
            'doc' => [
                'type' => 'file',
                'thumb' => 'media/thumb-doc.png',
                'mime' => 'application/msword'
            ],
            'html' => [
                'type' => 'file',
                'thumb' => 'media/thumb-html.png',
                'mime' => 'text/html'
            ],
            'pdf' => [
                'type' => 'file',
                'thumb' => 'media/thumb-pdf.png',
                'mime' => 'application/pdf'
            ],
            'zip' => [
                'type' => 'file',
                'thumb' => 'media/thumb-zip.png',
                'mime' => 'application/zip'
            ],
            'gz' => [
                'type' => 'file',
                'thumb' => 'media/thumb-gz.png',
                'mime' => 'application/gzip'
            ]
        ],
        'site' => [
            'title' => 'Grav',
            'author' => [
                'name' => 'Joe Bloggs',
                'email' => 'joe@test.com'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag'
            ],
            'blog' => [
                'route' => '/blog'
            ],
            'metadata' => [
                'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'routes' => [
                '/something/else' => '/blog/sample-3',
                '/another/one/here' => '/blog/sample-3',
                '/new/*' => '/blog/*'
            ],
            'email' => 'your-email@domain.com',
            'description' => 'Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search results) and in your feed.xml site description.',
            'links' => [
                0 => [
                    'title' => 'Services',
                    'url' => '#services'
                ],
                1 => [
                    'title' => 'Portfolio',
                    'url' => '#portfolio'
                ],
                2 => [
                    'title' => 'About',
                    'url' => '#about'
                ],
                3 => [
                    'title' => 'Team',
                    'url' => '#team'
                ],
                4 => [
                    'title' => 'Contact',
                    'url' => '#contact'
                ]
            ],
            'social' => [
                0 => [
                    'title' => 'twitter',
                    'url' => 'http://twitter.com/jekyllrb'
                ],
                1 => [
                    'title' => 'facebook',
                    'url' => NULL
                ],
                2 => [
                    'title' => 'stack-overflow',
                    'url' => 'http://stackoverflow.com/questions/tagged/jekyll'
                ],
                3 => [
                    'title' => 'bitbucket',
                    'url' => 'http://bitbucket.org/jekyll'
                ],
                4 => [
                    'title' => 'github',
                    'url' => 'http://github.com/jekyll'
                ]
            ],
            'address' => [
                0 => [
                    'line' => '3481 Melrose Place'
                ],
                1 => [
                    'line' => 'Beverly Hills, CA 90210'
                ]
            ],
            'quicklinks' => [
                0 => [
                    'title' => 'Privacy Policy',
                    'url' => '#'
                ],
                1 => [
                    'title' => 'Terms of Use',
                    'url' => '#'
                ]
            ]
        ]
    ]
];
