<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1456399196,
    'checksum' => 'da245172d3bb0794dcd95d9607539995',
    'files' => [
        'user/config' => [
            'plugins/email' => [
                'file' => 'user/config/plugins/email.yaml',
                'modified' => 1452113577
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1452113640
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1452113577
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1452113577
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1452113599
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1452113599
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1452113599
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1452113599
            ]
        ],
        'user/plugins' => [
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1452113538
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1452113540
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1452113533
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1452113528
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'email' => [
                'enabled' => true,
                'from' => 'your@email.here',
                'from_name' => NULL,
                'to' => 'your@email.here',
                'to_name' => NULL,
                'mailer' => [
                    'engine' => 'mail',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail'
                    ]
                ],
                'content_type' => 'text/html'
            ],
            'form' => [
                'enabled' => true,
                'files' => [
                    'multiple' => false,
                    'destination' => '@self',
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
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
            'jpe' => [
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
            'aiff' => [
                'type' => 'audio',
                'mime' => 'audio/aiff'
            ],
            'aif' => [
                'type' => 'audio',
                'mime' => 'audio/aif'
            ],
            'txt' => [
                'type' => 'file',
                'thumb' => 'media/thumb-txt.png',
                'mime' => 'text/plain'
            ],
            'xml' => [
                'type' => 'file',
                'thumb' => 'media/thumb-xml.png',
                'mime' => 'application/xml'
            ],
            'doc' => [
                'type' => 'file',
                'thumb' => 'media/thumb-doc.png',
                'mime' => 'application/msword'
            ],
            'docx' => [
                'type' => 'file',
                'mime' => 'application/msword'
            ],
            'xls' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlt' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlm' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xld' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xla' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlc' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlw' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xll' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'ppt' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-powerpoint'
            ],
            'pps' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-powerpoint'
            ],
            'rtf' => [
                'type' => 'file',
                'mime' => 'application/rtf'
            ],
            'bmp' => [
                'type' => 'file',
                'mime' => 'image/bmp'
            ],
            'tiff' => [
                'type' => 'file',
                'mime' => 'image/tiff'
            ],
            'mpeg' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'mpg' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'mpe' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'avi' => [
                'type' => 'file',
                'mime' => 'video/msvideo'
            ],
            'wmv' => [
                'type' => 'file',
                'mime' => 'video/x-ms-wmv'
            ],
            'html' => [
                'type' => 'file',
                'thumb' => 'media/thumb-html.png',
                'mime' => 'text/html'
            ],
            'htm' => [
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
            '7z' => [
                'type' => 'file',
                'thumb' => 'media/thumb-7zip.png',
                'mime' => 'application/x-7z-compressed'
            ],
            'gz' => [
                'type' => 'file',
                'thumb' => 'media/thumb-gz.png',
                'mime' => 'application/gzip'
            ],
            'tar' => [
                'type' => 'file',
                'mime' => 'application/x-tar'
            ],
            'css' => [
                'type' => 'file',
                'thumb' => 'media/thumb-css.png',
                'mime' => 'text/css'
            ],
            'js' => [
                'type' => 'file',
                'thumb' => 'media/thumb-js.png',
                'mime' => 'application/javascript'
            ],
            'json' => [
                'type' => 'file',
                'thumb' => 'media/thumb-json.png',
                'mime' => 'application/json'
            ]
        ],
        'site' => [
            'title' => 'Free Responsive HTML5/CSS3 Template',
            'author' => [
                'name' => 'Peter Finla',
                'email' => 'john@email.com'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag'
            ],
            'metadata' => [
                'description' => 'An exclusive HTML5/CSS3 freebie by Peter Finlan, for Codrops.'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'redirects' => [
                '/redirect-test' => '/',
                '/old/(.*)' => '/new/$1'
            ],
            'routes' => [
                '/something/else' => '/blog/sample-3',
                '/new/(.*)' => '/blog/$1'
            ],
            'blog' => [
                'route' => '/blog'
            ],
            'header' => [
                'title' => 'I\'m Jonathan Doe.',
                'description' => 'I\'m a Manila based <span>graphic designer</span>, <span>illustrator</span> and <span>webdesigner</span> creating awesome and effective visual identities for companies of all sizes around the globe. Let\'s <a class="smoothscroll" href="#about">start scrolling</a> and learn more <a class="smoothscroll" href="#about">about me</a>.'
            ],
            'copyright' => [
                0 => [
                    'line' => 'Copyright 2014 CeeVee'
                ],
                1 => [
                    'line' => 'Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a>'
                ]
            ],
            'social' => [
                0 => [
                    'url' => '#',
                    'icon' => 'facebook'
                ],
                1 => [
                    'url' => '#',
                    'icon' => 'twitter'
                ],
                2 => [
                    'url' => '#',
                    'icon' => 'google-plus'
                ],
                3 => [
                    'url' => '#',
                    'icon' => 'linkedin'
                ],
                4 => [
                    'url' => '#',
                    'icon' => 'instagram'
                ],
                5 => [
                    'url' => '#',
                    'icon' => 'dribbble'
                ],
                6 => [
                    'url' => '#',
                    'icon' => 'skype'
                ]
            ],
            'twitter' => [
                'id' => '657554810648948736',
                'domId' => 'tw-widget1',
                'maxTweets' => 3,
                'enableLinks' => 'true',
                'showInteraction' => 'false',
                'showImages' => 'false',
                'showUser' => 'false'
            ]
        ],
        'streams' => [
            'schemes' => [
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
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'languages' => [
                'supported' => [
                    
                ],
                'include_default_lang' => true,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/home'
            ],
            'pages' => [
                'theme' => 'ceevee',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => NULL,
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
                    'extra' => true,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'htm',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => 301,
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true
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
                'undefined_filters' => true,
                'umask_fix' => false
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
                    'jquery' => 'system://assets/jquery/jquery-2.1.4.min.js'
                ]
            ],
            'errors' => [
                'display' => false,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'upload_limit' => 0,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ]
            ],
            'session' => [
                'enabled' => true,
                'timeout' => 1800,
                'name' => 'grav-site'
            ]
        ],
        'security' => [
            'salt' => '2IcPmgfz5WbFEV'
        ]
    ]
];
