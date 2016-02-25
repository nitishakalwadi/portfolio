<?php
return [
    '@class' => 'Grav\\Common\\Config\\Config',
    'checksum' => 'b3b479c3ff114da69d68c18a1884f6c1:666c6a89825b541e8658b8790dab9756',
    'files' => [
        'user/plugins' => [
            'plugins/error' => [
                'file' => 'user/plugins/error/blueprints.yaml',
                'modified' => 1434186536
            ],
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/blueprints.yaml',
                'modified' => 1434186544
            ],
            'plugins/feed' => [
                'file' => 'user/plugins/feed/blueprints.yaml',
                'modified' => 1434186540
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/blueprints.yaml',
                'modified' => 1434186546
            ]
        ],
        'system/blueprints/config' => [
            'system' => [
                'file' => 'system/blueprints/config/system.yaml',
                'modified' => 1434186496
            ],
            'site' => [
                'file' => 'system/blueprints/config/site.yaml',
                'modified' => 1434186494
            ],
            'streams' => [
                'file' => 'system/blueprints/config/streams.yaml',
                'modified' => 1434186495
            ],
            'media' => [
                'file' => 'system/blueprints/config/media.yaml',
                'modified' => 1434186494
            ]
        ]
    ],
    'data' => [
        'items' => [
            'plugins.error.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.error.enabled'
            ],
            'plugins.pagination.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.pagination.enabled'
            ],
            'plugins.pagination.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.pagination.built_in_css'
            ],
            'plugins.feed.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.feed.enabled'
            ],
            'plugins.feed.count' => [
                'type' => 'text',
                'label' => 'Feed count',
                'validate' => [
                    'type' => 'int',
                    'min' => 10,
                    'max' => 1000
                ],
                'name' => 'plugins.feed.count'
            ],
            'plugins.feed.description' => [
                'type' => 'textarea',
                'label' => 'Description',
                'name' => 'plugins.feed.description'
            ],
            'plugins.feed.lang' => [
                'type' => 'text',
                'label' => 'Feed language code',
                'placeholder' => 'en-us',
                'validate' => [
                    'pattern' => '[a-zA-Z]{2,3}-a-zA-Z]{2,3}'
                ],
                'name' => 'plugins.feed.lang'
            ],
            'plugins.feed.length' => [
                'type' => 'text',
                'label' => 'Feed Length',
                'validate' => [
                    'type' => 'int',
                    'min' => 10,
                    'max' => 10000
                ],
                'name' => 'plugins.feed.length'
            ],
            'plugins.problems.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.problems.enabled'
            ],
            'system.home.alias' => [
                'type' => 'pages',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Home Page',
                'show_all' => false,
                'show_modular' => false,
                'show_root' => false,
                'help' => 'The page that Grav will use as the default landing page',
                'name' => 'system.home.alias'
            ],
            'system.pages.theme' => [
                'type' => 'themeselect',
                'classes' => 'fancy',
                'size' => 'medium',
                'label' => 'Default Theme',
                'help' => 'Set the theme (defaults to \'default\')',
                'name' => 'system.pages.theme'
            ],
            'system.pages.markdown.extra' => [
                'type' => 'toggle',
                'label' => 'Markdown Extra',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.extra'
            ],
            'system.pages.process' => [
                'type' => 'checkboxes',
                'label' => 'Process',
                'default' => [
                    0 => [
                        'markdown' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'markdown' => 'Markdown',
                    'twig' => 'Twig'
                ],
                'use' => 'keys',
                'name' => 'system.pages.process'
            ],
            'system.pages.dateformat.short' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Short Date Format',
                'help' => 'Set the short date format',
                'default' => 'jS M Y',
                'options' => [
                    'F jS \\\\a\\\\t g:ia' => 'January 1st at 11:59pm',
                    'l jS of F g:i A' => 'Monday 1st of January at 11:59 PM',
                    'D, m M Y G:i:s' => 'Mon, 01 Jan 2014 23:59:00',
                    'd-m-y G:i' => '01-01-14 23:59',
                    'jS M Y' => '10th Feb 2014'
                ],
                'name' => 'system.pages.dateformat.short'
            ],
            'system.pages.dateformat.long' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Long Date Format',
                'help' => 'Set the long date format',
                'options' => [
                    'F jS \\a\\t g:ia' => 'January 1st at 11:59pm',
                    'l jS of F g:i A' => 'Monday 1st of January at 11:59 PM',
                    'D, m M Y G:i:s' => 'Mon, 01 Jan 2014 23:59:00',
                    'd-m-y G:i' => '01-01-14 23:59',
                    'jS M Y' => '10th Feb 2014'
                ],
                'name' => 'system.pages.dateformat.long'
            ],
            'system.pages.order.by' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Default Ordering',
                'options' => [
                    'default' => 'Default - based on folder name',
                    'folder' => 'Folder - based on prefix-less folder name',
                    'title' => 'Title - based on title field in header',
                    'date' => 'Date - based on date field in header'
                ],
                'name' => 'system.pages.order.by'
            ],
            'system.pages.order.dir' => [
                'type' => 'toggle',
                'label' => 'Default Order Direction',
                'highlight' => 'asc',
                'default' => 'desc',
                'options' => [
                    'asc' => 'Ascending',
                    'desc' => 'Descending'
                ],
                'name' => 'system.pages.order.dir'
            ],
            'system.pages.list.count' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Default Item Count',
                'help' => 'Default max pages count',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.list.count'
            ],
            'system.pages.publish_dates' => [
                'type' => 'toggle',
                'label' => 'Date-based publishing',
                'help' => 'Automatically (un)publish posts based on their date',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.publish_dates'
            ],
            'system.pages.events.page' => [
                'type' => 'toggle',
                'label' => 'Page events',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.events.page'
            ],
            'system.pages.events.twig' => [
                'type' => 'toggle',
                'label' => 'Twig events',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.events.twig'
            ],
            'system.cache.enabled' => [
                'type' => 'toggle',
                'label' => 'Caching',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.enabled'
            ],
            'system.cache.check.method' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Cache Check Method',
                'options' => [
                    'file' => 'File',
                    'folder' => 'Folder',
                    'none' => 'None'
                ],
                'name' => 'system.cache.check.method'
            ],
            'system.cache.driver' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Cache driver',
                'options' => [
                    'auto' => 'Auto detect',
                    'file' => 'File',
                    'apc' => 'APC',
                    'xcache' => 'XCache',
                    'memcache' => 'MemCache',
                    'wincache' => 'WinCache'
                ],
                'name' => 'system.cache.driver'
            ],
            'system.cache.prefix' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Cache Prefix',
                'placeholder' => 'Derived from base URL (override by entering random string)',
                'name' => 'system.cache.prefix'
            ],
            'system.cache.gzip' => [
                'type' => 'toggle',
                'label' => 'GZIP compression',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.gzip'
            ],
            'system.assets.enable_asset_timestamp' => [
                'type' => 'toggle',
                'label' => 'Enable timestamps on assets',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.enable_asset_timestamp'
            ],
            'system.media.enable_media_timestamp' => [
                'type' => 'toggle',
                'label' => 'Enable timestamps on media',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.media.enable_media_timestamp'
            ],
            'system.twig.cache' => [
                'type' => 'toggle',
                'label' => 'Twig caching',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.cache'
            ],
            'system.twig.debug' => [
                'type' => 'toggle',
                'label' => 'Twig debug',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.debug'
            ],
            'system.twig.auto_reload' => [
                'type' => 'toggle',
                'label' => 'Detect changes',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.auto_reload'
            ],
            'system.twig.autoescape' => [
                'type' => 'toggle',
                'label' => 'Autoescape variables',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.autoescape'
            ],
            'system.assets.css_pipeline' => [
                'type' => 'toggle',
                'label' => 'CSS Pipeline',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline'
            ],
            'system.assets.css_minify' => [
                'type' => 'toggle',
                'label' => 'CSS Minify',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify'
            ],
            'system.assets.css_minify_windows' => [
                'type' => 'toggle',
                'label' => 'CSS Minify Windows Override',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify_windows'
            ],
            'system.assets.css_rewrite' => [
                'type' => 'toggle',
                'label' => 'CSS Rewrite',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_rewrite'
            ],
            'system.assets.js_pipeline' => [
                'type' => 'toggle',
                'label' => 'JavaScript Pipeline',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline'
            ],
            'system.assets.js_minify' => [
                'type' => 'toggle',
                'label' => 'JavaScript Minify',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_minify'
            ],
            'system.errors.display' => [
                'type' => 'toggle',
                'label' => 'Display errors',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.display'
            ],
            'system.errors.log' => [
                'type' => 'toggle',
                'label' => 'Log errors',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.log'
            ],
            'system.debugger.enabled' => [
                'type' => 'toggle',
                'label' => 'Debugger',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.enabled'
            ],
            'system.debugger.mode' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Mode',
                'options' => [
                    'detect' => 'Auto-Detect',
                    'development' => 'Development',
                    'production' => 'Production'
                ],
                'name' => 'system.debugger.mode'
            ],
            'system.debugger.strict' => [
                'type' => 'toggle',
                'label' => 'Strict',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.strict'
            ],
            'system.debugger.max_depth' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Detail Level',
                'placeholder' => 'How many nested levels to display for objects or arrays',
                'options' => [
                    1 => '1 level',
                    2 => '2 levels',
                    3 => '3 levels',
                    4 => '4 levels',
                    5 => '5 levels',
                    6 => '6 levels',
                    7 => '7 levels',
                    8 => '8 levels',
                    9 => '9 levels',
                    10 => '10 levels'
                ],
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.debugger.max_depth'
            ],
            'system.debugger.log.enabled' => [
                'type' => 'toggle',
                'label' => 'Logging',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.log.enabled'
            ],
            'system.debugger.shutdown.close_connection' => [
                'type' => 'toggle',
                'label' => 'Shutdown Close Connection',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.shutdown.close_connection'
            ],
            'system.images.default_image_quality' => [
                'type' => 'text',
                'label' => 'Default image quality',
                'classes' => 'x-small',
                'validate' => [
                    'type' => 'number',
                    'min' => 1,
                    'max' => 100
                ],
                'name' => 'system.images.default_image_quality'
            ],
            'system.images.debug' => [
                'type' => 'toggle',
                'label' => 'Image debug watermark',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.debug'
            ],
            'system.media.upload_limit' => [
                'type' => 'text',
                'label' => 'File upload limit',
                'classes' => 'small',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.media.upload_limit'
            ],
            'system.timezone' => [
                'type' => 'select',
                'label' => 'Timezone',
                'classes' => 'fancy',
                '@data-options' => '\\Grav\\Common\\Utils::timezones',
                'default' => '',
                'options' => [
                    '' => '- None -',
                    'Pacific/Niue' => '(UTC-11:00) Pacific/Niue',
                    'Pacific/Midway' => '(UTC-11:00) Pacific/Midway',
                    'Pacific/Pago_Pago' => '(UTC-11:00) Pacific/Pago_Pago',
                    'Pacific/Rarotonga' => '(UTC-10:00) Pacific/Rarotonga',
                    'America/Adak' => '(UTC-10:00) America/Adak',
                    'Pacific/Johnston' => '(UTC-10:00) Pacific/Johnston',
                    'Pacific/Tahiti' => '(UTC-10:00) Pacific/Tahiti',
                    'Pacific/Honolulu' => '(UTC-10:00) Pacific/Honolulu',
                    'Pacific/Marquesas' => '(UTC-09:30) Pacific/Marquesas',
                    'America/Sitka' => '(UTC-09:00) America/Sitka',
                    'America/Yakutat' => '(UTC-09:00) America/Yakutat',
                    'America/Anchorage' => '(UTC-09:00) America/Anchorage',
                    'America/Nome' => '(UTC-09:00) America/Nome',
                    'Pacific/Gambier' => '(UTC-09:00) Pacific/Gambier',
                    'America/Juneau' => '(UTC-09:00) America/Juneau',
                    'America/Vancouver' => '(UTC-08:00) America/Vancouver',
                    'America/Metlakatla' => '(UTC-08:00) America/Metlakatla',
                    'America/Los_Angeles' => '(UTC-08:00) America/Los_Angeles',
                    'America/Santa_Isabel' => '(UTC-08:00) America/Santa_Isabel',
                    'America/Tijuana' => '(UTC-08:00) America/Tijuana',
                    'America/Whitehorse' => '(UTC-08:00) America/Whitehorse',
                    'Pacific/Pitcairn' => '(UTC-08:00) Pacific/Pitcairn',
                    'America/Dawson' => '(UTC-08:00) America/Dawson',
                    'America/Creston' => '(UTC-07:00) America/Creston',
                    'America/Mazatlan' => '(UTC-07:00) America/Mazatlan',
                    'America/Dawson_Creek' => '(UTC-07:00) America/Dawson_Creek',
                    'America/Ojinaga' => '(UTC-07:00) America/Ojinaga',
                    'America/Inuvik' => '(UTC-07:00) America/Inuvik',
                    'America/Denver' => '(UTC-07:00) America/Denver',
                    'America/Chihuahua' => '(UTC-07:00) America/Chihuahua',
                    'America/Boise' => '(UTC-07:00) America/Boise',
                    'America/Edmonton' => '(UTC-07:00) America/Edmonton',
                    'America/Hermosillo' => '(UTC-07:00) America/Hermosillo',
                    'America/Cambridge_Bay' => '(UTC-07:00) America/Cambridge_Bay',
                    'America/Phoenix' => '(UTC-07:00) America/Phoenix',
                    'America/Yellowknife' => '(UTC-07:00) America/Yellowknife',
                    'America/Indiana/Knox' => '(UTC-06:00) America/Indiana/Knox',
                    'America/Merida' => '(UTC-06:00) America/Merida',
                    'America/Chicago' => '(UTC-06:00) America/Chicago',
                    'America/Winnipeg' => '(UTC-06:00) America/Winnipeg',
                    'America/Monterrey' => '(UTC-06:00) America/Monterrey',
                    'America/Belize' => '(UTC-06:00) America/Belize',
                    'America/North_Dakota/Beulah' => '(UTC-06:00) America/North_Dakota/Beulah',
                    'America/Tegucigalpa' => '(UTC-06:00) America/Tegucigalpa',
                    'America/North_Dakota/Center' => '(UTC-06:00) America/North_Dakota/Center',
                    'America/North_Dakota/New_Salem' => '(UTC-06:00) America/North_Dakota/New_Salem',
                    'America/Swift_Current' => '(UTC-06:00) America/Swift_Current',
                    'America/Costa_Rica' => '(UTC-06:00) America/Costa_Rica',
                    'America/Menominee' => '(UTC-06:00) America/Menominee',
                    'America/El_Salvador' => '(UTC-06:00) America/El_Salvador',
                    'America/Resolute' => '(UTC-06:00) America/Resolute',
                    'America/Bahia_Banderas' => '(UTC-06:00) America/Bahia_Banderas',
                    'America/Matamoros' => '(UTC-06:00) America/Matamoros',
                    'America/Managua' => '(UTC-06:00) America/Managua',
                    'America/Guatemala' => '(UTC-06:00) America/Guatemala',
                    'America/Regina' => '(UTC-06:00) America/Regina',
                    'America/Indiana/Tell_City' => '(UTC-06:00) America/Indiana/Tell_City',
                    'America/Rainy_River' => '(UTC-06:00) America/Rainy_River',
                    'America/Rankin_Inlet' => '(UTC-06:00) America/Rankin_Inlet',
                    'Pacific/Galapagos' => '(UTC-06:00) Pacific/Galapagos',
                    'America/Mexico_City' => '(UTC-06:00) America/Mexico_City',
                    'America/Thunder_Bay' => '(UTC-05:00) America/Thunder_Bay',
                    'America/Guayaquil' => '(UTC-05:00) America/Guayaquil',
                    'America/Cayman' => '(UTC-05:00) America/Cayman',
                    'America/Detroit' => '(UTC-05:00) America/Detroit',
                    'America/Eirunepe' => '(UTC-05:00) America/Eirunepe',
                    'Pacific/Easter' => '(UTC-05:00) Pacific/Easter',
                    'America/Atikokan' => '(UTC-05:00) America/Atikokan',
                    'America/Toronto' => '(UTC-05:00) America/Toronto',
                    'America/Cancun' => '(UTC-05:00) America/Cancun',
                    'America/Bogota' => '(UTC-05:00) America/Bogota',
                    'America/Havana' => '(UTC-05:00) America/Havana',
                    'America/Indiana/Vincennes' => '(UTC-05:00) America/Indiana/Vincennes',
                    'America/Indiana/Winamac' => '(UTC-05:00) America/Indiana/Winamac',
                    'America/Indiana/Indianapolis' => '(UTC-05:00) America/Indiana/Indianapolis',
                    'America/Kentucky/Monticello' => '(UTC-05:00) America/Kentucky/Monticello',
                    'America/Port-au-Prince' => '(UTC-05:00) America/Port-au-Prince',
                    'America/Indiana/Vevay' => '(UTC-05:00) America/Indiana/Vevay',
                    'America/Rio_Branco' => '(UTC-05:00) America/Rio_Branco',
                    'America/Indiana/Marengo' => '(UTC-05:00) America/Indiana/Marengo',
                    'America/Indiana/Petersburg' => '(UTC-05:00) America/Indiana/Petersburg',
                    'America/Kentucky/Louisville' => '(UTC-05:00) America/Kentucky/Louisville',
                    'America/Nassau' => '(UTC-05:00) America/Nassau',
                    'America/Lima' => '(UTC-05:00) America/Lima',
                    'America/Jamaica' => '(UTC-05:00) America/Jamaica',
                    'America/Pangnirtung' => '(UTC-05:00) America/Pangnirtung',
                    'America/New_York' => '(UTC-05:00) America/New_York',
                    'America/Iqaluit' => '(UTC-05:00) America/Iqaluit',
                    'America/Nipigon' => '(UTC-05:00) America/Nipigon',
                    'America/Panama' => '(UTC-05:00) America/Panama',
                    'America/Caracas' => '(UTC-04:30) America/Caracas',
                    'America/Martinique' => '(UTC-04:00) America/Martinique',
                    'America/Manaus' => '(UTC-04:00) America/Manaus',
                    'America/Glace_Bay' => '(UTC-04:00) America/Glace_Bay',
                    'America/Grenada' => '(UTC-04:00) America/Grenada',
                    'America/Guadeloupe' => '(UTC-04:00) America/Guadeloupe',
                    'America/Halifax' => '(UTC-04:00) America/Halifax',
                    'America/La_Paz' => '(UTC-04:00) America/La_Paz',
                    'America/Kralendijk' => '(UTC-04:00) America/Kralendijk',
                    'America/Grand_Turk' => '(UTC-04:00) America/Grand_Turk',
                    'America/Lower_Princes' => '(UTC-04:00) America/Lower_Princes',
                    'America/Guyana' => '(UTC-04:00) America/Guyana',
                    'America/Goose_Bay' => '(UTC-04:00) America/Goose_Bay',
                    'America/Moncton' => '(UTC-04:00) America/Moncton',
                    'Atlantic/Bermuda' => '(UTC-04:00) Atlantic/Bermuda',
                    'America/Santo_Domingo' => '(UTC-04:00) America/Santo_Domingo',
                    'America/Dominica' => '(UTC-04:00) America/Dominica',
                    'America/Puerto_Rico' => '(UTC-04:00) America/Puerto_Rico',
                    'America/Porto_Velho' => '(UTC-04:00) America/Porto_Velho',
                    'America/St_Barthelemy' => '(UTC-04:00) America/St_Barthelemy',
                    'America/St_Kitts' => '(UTC-04:00) America/St_Kitts',
                    'America/Thule' => '(UTC-04:00) America/Thule',
                    'America/St_Vincent' => '(UTC-04:00) America/St_Vincent',
                    'America/St_Thomas' => '(UTC-04:00) America/St_Thomas',
                    'America/St_Lucia' => '(UTC-04:00) America/St_Lucia',
                    'America/Tortola' => '(UTC-04:00) America/Tortola',
                    'America/Port_of_Spain' => '(UTC-04:00) America/Port_of_Spain',
                    'America/Anguilla' => '(UTC-04:00) America/Anguilla',
                    'America/Barbados' => '(UTC-04:00) America/Barbados',
                    'America/Blanc-Sablon' => '(UTC-04:00) America/Blanc-Sablon',
                    'America/Boa_Vista' => '(UTC-04:00) America/Boa_Vista',
                    'America/Cuiaba' => '(UTC-04:00) America/Cuiaba',
                    'America/Curacao' => '(UTC-04:00) America/Curacao',
                    'America/Antigua' => '(UTC-04:00) America/Antigua',
                    'America/Montserrat' => '(UTC-04:00) America/Montserrat',
                    'America/Marigot' => '(UTC-04:00) America/Marigot',
                    'America/Aruba' => '(UTC-04:00) America/Aruba',
                    'America/Campo_Grande' => '(UTC-04:00) America/Campo_Grande',
                    'America/St_Johns' => '(UTC-03:30) America/St_Johns',
                    'Antarctica/Palmer' => '(UTC-03:00) Antarctica/Palmer',
                    'Antarctica/Rothera' => '(UTC-03:00) Antarctica/Rothera',
                    'Atlantic/Stanley' => '(UTC-03:00) Atlantic/Stanley',
                    'America/Recife' => '(UTC-03:00) America/Recife',
                    'America/Miquelon' => '(UTC-03:00) America/Miquelon',
                    'America/Santarem' => '(UTC-03:00) America/Santarem',
                    'America/Santiago' => '(UTC-03:00) America/Santiago',
                    'America/Sao_Paulo' => '(UTC-03:00) America/Sao_Paulo',
                    'America/Paramaribo' => '(UTC-03:00) America/Paramaribo',
                    'America/Argentina/Mendoza' => '(UTC-03:00) America/Argentina/Mendoza',
                    'America/Argentina/Rio_Gallegos' => '(UTC-03:00) America/Argentina/Rio_Gallegos',
                    'America/Argentina/Salta' => '(UTC-03:00) America/Argentina/Salta',
                    'America/Argentina/San_Juan' => '(UTC-03:00) America/Argentina/San_Juan',
                    'America/Argentina/La_Rioja' => '(UTC-03:00) America/Argentina/La_Rioja',
                    'America/Argentina/Jujuy' => '(UTC-03:00) America/Argentina/Jujuy',
                    'America/Maceio' => '(UTC-03:00) America/Maceio',
                    'America/Argentina/Buenos_Aires' => '(UTC-03:00) America/Argentina/Buenos_Aires',
                    'America/Argentina/Catamarca' => '(UTC-03:00) America/Argentina/Catamarca',
                    'America/Argentina/Cordoba' => '(UTC-03:00) America/Argentina/Cordoba',
                    'America/Argentina/San_Luis' => '(UTC-03:00) America/Argentina/San_Luis',
                    'America/Araguaina' => '(UTC-03:00) America/Araguaina',
                    'America/Bahia' => '(UTC-03:00) America/Bahia',
                    'America/Belem' => '(UTC-03:00) America/Belem',
                    'America/Cayenne' => '(UTC-03:00) America/Cayenne',
                    'America/Fortaleza' => '(UTC-03:00) America/Fortaleza',
                    'America/Asuncion' => '(UTC-03:00) America/Asuncion',
                    'America/Argentina/Tucuman' => '(UTC-03:00) America/Argentina/Tucuman',
                    'America/Argentina/Ushuaia' => '(UTC-03:00) America/Argentina/Ushuaia',
                    'America/Godthab' => '(UTC-03:00) America/Godthab',
                    'America/Montevideo' => '(UTC-02:00) America/Montevideo',
                    'Atlantic/South_Georgia' => '(UTC-02:00) Atlantic/South_Georgia',
                    'America/Noronha' => '(UTC-02:00) America/Noronha',
                    'Atlantic/Azores' => '(UTC-01:00) Atlantic/Azores',
                    'Atlantic/Cape_Verde' => '(UTC-01:00) Atlantic/Cape_Verde',
                    'America/Scoresbysund' => '(UTC-01:00) America/Scoresbysund',
                    'Atlantic/Madeira' => '(UTC+00:00) Atlantic/Madeira',
                    'UTC' => '(UTC+00:00) UTC',
                    'Africa/Dakar' => '(UTC+00:00) Africa/Dakar',
                    'Africa/Freetown' => '(UTC+00:00) Africa/Freetown',
                    'Atlantic/Faroe' => '(UTC+00:00) Atlantic/Faroe',
                    'Africa/Conakry' => '(UTC+00:00) Africa/Conakry',
                    'Africa/El_Aaiun' => '(UTC+00:00) Africa/El_Aaiun',
                    'Atlantic/Reykjavik' => '(UTC+00:00) Atlantic/Reykjavik',
                    'Africa/Banjul' => '(UTC+00:00) Africa/Banjul',
                    'Europe/Isle_of_Man' => '(UTC+00:00) Europe/Isle_of_Man',
                    'Europe/Jersey' => '(UTC+00:00) Europe/Jersey',
                    'Europe/Lisbon' => '(UTC+00:00) Europe/Lisbon',
                    'Europe/London' => '(UTC+00:00) Europe/London',
                    'Africa/Bamako' => '(UTC+00:00) Africa/Bamako',
                    'Africa/Bissau' => '(UTC+00:00) Africa/Bissau',
                    'Atlantic/Canary' => '(UTC+00:00) Atlantic/Canary',
                    'Africa/Abidjan' => '(UTC+00:00) Africa/Abidjan',
                    'Europe/Dublin' => '(UTC+00:00) Europe/Dublin',
                    'Africa/Casablanca' => '(UTC+00:00) Africa/Casablanca',
                    'Antarctica/Troll' => '(UTC+00:00) Antarctica/Troll',
                    'Europe/Guernsey' => '(UTC+00:00) Europe/Guernsey',
                    'Africa/Sao_Tome' => '(UTC+00:00) Africa/Sao_Tome',
                    'Africa/Accra' => '(UTC+00:00) Africa/Accra',
                    'Atlantic/St_Helena' => '(UTC+00:00) Atlantic/St_Helena',
                    'Africa/Ouagadougou' => '(UTC+00:00) Africa/Ouagadougou',
                    'America/Danmarkshavn' => '(UTC+00:00) America/Danmarkshavn',
                    'Africa/Nouakchott' => '(UTC+00:00) Africa/Nouakchott',
                    'Africa/Lome' => '(UTC+00:00) Africa/Lome',
                    'Africa/Monrovia' => '(UTC+00:00) Africa/Monrovia',
                    'Africa/Algiers' => '(UTC+01:00) Africa/Algiers',
                    'Africa/Lagos' => '(UTC+01:00) Africa/Lagos',
                    'Europe/Budapest' => '(UTC+01:00) Europe/Budapest',
                    'Africa/Bangui' => '(UTC+01:00) Africa/Bangui',
                    'Europe/Busingen' => '(UTC+01:00) Europe/Busingen',
                    'Europe/Tirane' => '(UTC+01:00) Europe/Tirane',
                    'Africa/Porto-Novo' => '(UTC+01:00) Africa/Porto-Novo',
                    'Europe/Brussels' => '(UTC+01:00) Europe/Brussels',
                    'Europe/Madrid' => '(UTC+01:00) Europe/Madrid',
                    'Europe/Vatican' => '(UTC+01:00) Europe/Vatican',
                    'Africa/Tunis' => '(UTC+01:00) Africa/Tunis',
                    'Europe/Amsterdam' => '(UTC+01:00) Europe/Amsterdam',
                    'Europe/Warsaw' => '(UTC+01:00) Europe/Warsaw',
                    'Europe/Monaco' => '(UTC+01:00) Europe/Monaco',
                    'Europe/Zurich' => '(UTC+01:00) Europe/Zurich',
                    'Europe/Andorra' => '(UTC+01:00) Europe/Andorra',
                    'Europe/Vienna' => '(UTC+01:00) Europe/Vienna',
                    'Europe/Luxembourg' => '(UTC+01:00) Europe/Luxembourg',
                    'Europe/Malta' => '(UTC+01:00) Europe/Malta',
                    'Europe/Bratislava' => '(UTC+01:00) Europe/Bratislava',
                    'Europe/Berlin' => '(UTC+01:00) Europe/Berlin',
                    'Europe/Belgrade' => '(UTC+01:00) Europe/Belgrade',
                    'Europe/Vaduz' => '(UTC+01:00) Europe/Vaduz',
                    'Europe/Copenhagen' => '(UTC+01:00) Europe/Copenhagen',
                    'Africa/Malabo' => '(UTC+01:00) Africa/Malabo',
                    'Africa/Douala' => '(UTC+01:00) Africa/Douala',
                    'Europe/Sarajevo' => '(UTC+01:00) Europe/Sarajevo',
                    'Europe/Podgorica' => '(UTC+01:00) Europe/Podgorica',
                    'Europe/Gibraltar' => '(UTC+01:00) Europe/Gibraltar',
                    'Europe/San_Marino' => '(UTC+01:00) Europe/San_Marino',
                    'Europe/Rome' => '(UTC+01:00) Europe/Rome',
                    'Africa/Kinshasa' => '(UTC+01:00) Africa/Kinshasa',
                    'Africa/Libreville' => '(UTC+01:00) Africa/Libreville',
                    'Africa/Luanda' => '(UTC+01:00) Africa/Luanda',
                    'Europe/Ljubljana' => '(UTC+01:00) Europe/Ljubljana',
                    'Europe/Paris' => '(UTC+01:00) Europe/Paris',
                    'Africa/Ceuta' => '(UTC+01:00) Africa/Ceuta',
                    'Africa/Ndjamena' => '(UTC+01:00) Africa/Ndjamena',
                    'Arctic/Longyearbyen' => '(UTC+01:00) Arctic/Longyearbyen',
                    'Europe/Oslo' => '(UTC+01:00) Europe/Oslo',
                    'Africa/Brazzaville' => '(UTC+01:00) Africa/Brazzaville',
                    'Europe/Prague' => '(UTC+01:00) Europe/Prague',
                    'Europe/Skopje' => '(UTC+01:00) Europe/Skopje',
                    'Europe/Stockholm' => '(UTC+01:00) Europe/Stockholm',
                    'Europe/Zagreb' => '(UTC+01:00) Europe/Zagreb',
                    'Africa/Niamey' => '(UTC+01:00) Africa/Niamey',
                    'Europe/Riga' => '(UTC+02:00) Europe/Riga',
                    'Europe/Vilnius' => '(UTC+02:00) Europe/Vilnius',
                    'Asia/Nicosia' => '(UTC+02:00) Asia/Nicosia',
                    'Europe/Kaliningrad' => '(UTC+02:00) Europe/Kaliningrad',
                    'Europe/Tallinn' => '(UTC+02:00) Europe/Tallinn',
                    'Europe/Kiev' => '(UTC+02:00) Europe/Kiev',
                    'Europe/Uzhgorod' => '(UTC+02:00) Europe/Uzhgorod',
                    'Africa/Windhoek' => '(UTC+02:00) Africa/Windhoek',
                    'Europe/Sofia' => '(UTC+02:00) Europe/Sofia',
                    'Africa/Tripoli' => '(UTC+02:00) Africa/Tripoli',
                    'Africa/Mbabane' => '(UTC+02:00) Africa/Mbabane',
                    'Africa/Maseru' => '(UTC+02:00) Africa/Maseru',
                    'Africa/Cairo' => '(UTC+02:00) Africa/Cairo',
                    'Africa/Bujumbura' => '(UTC+02:00) Africa/Bujumbura',
                    'Asia/Amman' => '(UTC+02:00) Asia/Amman',
                    'Africa/Maputo' => '(UTC+02:00) Africa/Maputo',
                    'Africa/Lusaka' => '(UTC+02:00) Africa/Lusaka',
                    'Africa/Johannesburg' => '(UTC+02:00) Africa/Johannesburg',
                    'Africa/Kigali' => '(UTC+02:00) Africa/Kigali',
                    'Africa/Harare' => '(UTC+02:00) Africa/Harare',
                    'Africa/Gaborone' => '(UTC+02:00) Africa/Gaborone',
                    'Africa/Lubumbashi' => '(UTC+02:00) Africa/Lubumbashi',
                    'Africa/Blantyre' => '(UTC+02:00) Africa/Blantyre',
                    'Europe/Chisinau' => '(UTC+02:00) Europe/Chisinau',
                    'Europe/Mariehamn' => '(UTC+02:00) Europe/Mariehamn',
                    'Europe/Athens' => '(UTC+02:00) Europe/Athens',
                    'Asia/Jerusalem' => '(UTC+02:00) Asia/Jerusalem',
                    'Europe/Helsinki' => '(UTC+02:00) Europe/Helsinki',
                    'Europe/Istanbul' => '(UTC+02:00) Europe/Istanbul',
                    'Europe/Zaporozhye' => '(UTC+02:00) Europe/Zaporozhye',
                    'Asia/Hebron' => '(UTC+02:00) Asia/Hebron',
                    'Asia/Beirut' => '(UTC+02:00) Asia/Beirut',
                    'Asia/Gaza' => '(UTC+02:00) Asia/Gaza',
                    'Asia/Damascus' => '(UTC+02:00) Asia/Damascus',
                    'Europe/Bucharest' => '(UTC+02:00) Europe/Bucharest',
                    'Europe/Minsk' => '(UTC+03:00) Europe/Minsk',
                    'Africa/Addis_Ababa' => '(UTC+03:00) Africa/Addis_Ababa',
                    'Europe/Moscow' => '(UTC+03:00) Europe/Moscow',
                    'Asia/Baghdad' => '(UTC+03:00) Asia/Baghdad',
                    'Africa/Djibouti' => '(UTC+03:00) Africa/Djibouti',
                    'Africa/Dar_es_Salaam' => '(UTC+03:00) Africa/Dar_es_Salaam',
                    'Antarctica/Syowa' => '(UTC+03:00) Antarctica/Syowa',
                    'Asia/Aden' => '(UTC+03:00) Asia/Aden',
                    'Africa/Juba' => '(UTC+03:00) Africa/Juba',
                    'Africa/Kampala' => '(UTC+03:00) Africa/Kampala',
                    'Africa/Nairobi' => '(UTC+03:00) Africa/Nairobi',
                    'Africa/Mogadishu' => '(UTC+03:00) Africa/Mogadishu',
                    'Africa/Khartoum' => '(UTC+03:00) Africa/Khartoum',
                    'Asia/Bahrain' => '(UTC+03:00) Asia/Bahrain',
                    'Africa/Asmara' => '(UTC+03:00) Africa/Asmara',
                    'Asia/Qatar' => '(UTC+03:00) Asia/Qatar',
                    'Asia/Riyadh' => '(UTC+03:00) Asia/Riyadh',
                    'Europe/Simferopol' => '(UTC+03:00) Europe/Simferopol',
                    'Europe/Volgograd' => '(UTC+03:00) Europe/Volgograd',
                    'Asia/Kuwait' => '(UTC+03:00) Asia/Kuwait',
                    'Indian/Mayotte' => '(UTC+03:00) Indian/Mayotte',
                    'Indian/Comoro' => '(UTC+03:00) Indian/Comoro',
                    'Indian/Antananarivo' => '(UTC+03:00) Indian/Antananarivo',
                    'Asia/Tehran' => '(UTC+03:30) Asia/Tehran',
                    'Asia/Dubai' => '(UTC+04:00) Asia/Dubai',
                    'Indian/Mauritius' => '(UTC+04:00) Indian/Mauritius',
                    'Indian/Mahe' => '(UTC+04:00) Indian/Mahe',
                    'Asia/Muscat' => '(UTC+04:00) Asia/Muscat',
                    'Europe/Samara' => '(UTC+04:00) Europe/Samara',
                    'Indian/Reunion' => '(UTC+04:00) Indian/Reunion',
                    'Asia/Baku' => '(UTC+04:00) Asia/Baku',
                    'Asia/Tbilisi' => '(UTC+04:00) Asia/Tbilisi',
                    'Asia/Yerevan' => '(UTC+04:00) Asia/Yerevan',
                    'Asia/Kabul' => '(UTC+04:30) Asia/Kabul',
                    'Asia/Yekaterinburg' => '(UTC+05:00) Asia/Yekaterinburg',
                    'Asia/Tashkent' => '(UTC+05:00) Asia/Tashkent',
                    'Asia/Ashgabat' => '(UTC+05:00) Asia/Ashgabat',
                    'Asia/Aqtobe' => '(UTC+05:00) Asia/Aqtobe',
                    'Antarctica/Mawson' => '(UTC+05:00) Antarctica/Mawson',
                    'Asia/Aqtau' => '(UTC+05:00) Asia/Aqtau',
                    'Asia/Dushanbe' => '(UTC+05:00) Asia/Dushanbe',
                    'Asia/Samarkand' => '(UTC+05:00) Asia/Samarkand',
                    'Asia/Karachi' => '(UTC+05:00) Asia/Karachi',
                    'Indian/Kerguelen' => '(UTC+05:00) Indian/Kerguelen',
                    'Asia/Oral' => '(UTC+05:00) Asia/Oral',
                    'Indian/Maldives' => '(UTC+05:00) Indian/Maldives',
                    'Asia/Kolkata' => '(UTC+05:30) Asia/Kolkata',
                    'Asia/Colombo' => '(UTC+05:30) Asia/Colombo',
                    'Asia/Kathmandu' => '(UTC+05:45) Asia/Kathmandu',
                    'Indian/Chagos' => '(UTC+06:00) Indian/Chagos',
                    'Antarctica/Vostok' => '(UTC+06:00) Antarctica/Vostok',
                    'Asia/Novosibirsk' => '(UTC+06:00) Asia/Novosibirsk',
                    'Asia/Urumqi' => '(UTC+06:00) Asia/Urumqi',
                    'Asia/Omsk' => '(UTC+06:00) Asia/Omsk',
                    'Asia/Thimphu' => '(UTC+06:00) Asia/Thimphu',
                    'Asia/Qyzylorda' => '(UTC+06:00) Asia/Qyzylorda',
                    'Asia/Bishkek' => '(UTC+06:00) Asia/Bishkek',
                    'Asia/Dhaka' => '(UTC+06:00) Asia/Dhaka',
                    'Asia/Almaty' => '(UTC+06:00) Asia/Almaty',
                    'Asia/Rangoon' => '(UTC+06:30) Asia/Rangoon',
                    'Indian/Cocos' => '(UTC+06:30) Indian/Cocos',
                    'Asia/Hovd' => '(UTC+07:00) Asia/Hovd',
                    'Asia/Phnom_Penh' => '(UTC+07:00) Asia/Phnom_Penh',
                    'Asia/Pontianak' => '(UTC+07:00) Asia/Pontianak',
                    'Asia/Jakarta' => '(UTC+07:00) Asia/Jakarta',
                    'Antarctica/Davis' => '(UTC+07:00) Antarctica/Davis',
                    'Asia/Krasnoyarsk' => '(UTC+07:00) Asia/Krasnoyarsk',
                    'Asia/Bangkok' => '(UTC+07:00) Asia/Bangkok',
                    'Asia/Novokuznetsk' => '(UTC+07:00) Asia/Novokuznetsk',
                    'Indian/Christmas' => '(UTC+07:00) Indian/Christmas',
                    'Asia/Ho_Chi_Minh' => '(UTC+07:00) Asia/Ho_Chi_Minh',
                    'Asia/Vientiane' => '(UTC+07:00) Asia/Vientiane',
                    'Asia/Macau' => '(UTC+08:00) Asia/Macau',
                    'Asia/Makassar' => '(UTC+08:00) Asia/Makassar',
                    'Asia/Manila' => '(UTC+08:00) Asia/Manila',
                    'Asia/Kuala_Lumpur' => '(UTC+08:00) Asia/Kuala_Lumpur',
                    'Asia/Kuching' => '(UTC+08:00) Asia/Kuching',
                    'Asia/Taipei' => '(UTC+08:00) Asia/Taipei',
                    'Asia/Irkutsk' => '(UTC+08:00) Asia/Irkutsk',
                    'Asia/Choibalsan' => '(UTC+08:00) Asia/Choibalsan',
                    'Asia/Chita' => '(UTC+08:00) Asia/Chita',
                    'Asia/Brunei' => '(UTC+08:00) Asia/Brunei',
                    'Antarctica/Casey' => '(UTC+08:00) Antarctica/Casey',
                    'Asia/Ulaanbaatar' => '(UTC+08:00) Asia/Ulaanbaatar',
                    'Asia/Shanghai' => '(UTC+08:00) Asia/Shanghai',
                    'Asia/Hong_Kong' => '(UTC+08:00) Asia/Hong_Kong',
                    'Asia/Singapore' => '(UTC+08:00) Asia/Singapore',
                    'Australia/Perth' => '(UTC+08:00) Australia/Perth',
                    'Australia/Eucla' => '(UTC+08:45) Australia/Eucla',
                    'Asia/Dili' => '(UTC+09:00) Asia/Dili',
                    'Asia/Khandyga' => '(UTC+09:00) Asia/Khandyga',
                    'Pacific/Palau' => '(UTC+09:00) Pacific/Palau',
                    'Asia/Jayapura' => '(UTC+09:00) Asia/Jayapura',
                    'Asia/Yakutsk' => '(UTC+09:00) Asia/Yakutsk',
                    'Asia/Tokyo' => '(UTC+09:00) Asia/Tokyo',
                    'Asia/Seoul' => '(UTC+09:00) Asia/Seoul',
                    'Asia/Pyongyang' => '(UTC+09:00) Asia/Pyongyang',
                    'Australia/Darwin' => '(UTC+09:30) Australia/Darwin',
                    'Pacific/Saipan' => '(UTC+10:00) Pacific/Saipan',
                    'Australia/Brisbane' => '(UTC+10:00) Australia/Brisbane',
                    'Australia/Lindeman' => '(UTC+10:00) Australia/Lindeman',
                    'Pacific/Port_Moresby' => '(UTC+10:00) Pacific/Port_Moresby',
                    'Pacific/Chuuk' => '(UTC+10:00) Pacific/Chuuk',
                    'Antarctica/DumontDUrville' => '(UTC+10:00) Antarctica/DumontDUrville',
                    'Pacific/Guam' => '(UTC+10:00) Pacific/Guam',
                    'Asia/Ust-Nera' => '(UTC+10:00) Asia/Ust-Nera',
                    'Asia/Vladivostok' => '(UTC+10:00) Asia/Vladivostok',
                    'Asia/Magadan' => '(UTC+10:00) Asia/Magadan',
                    'Asia/Sakhalin' => '(UTC+10:00) Asia/Sakhalin',
                    'Australia/Broken_Hill' => '(UTC+10:30) Australia/Broken_Hill',
                    'Australia/Adelaide' => '(UTC+10:30) Australia/Adelaide',
                    'Pacific/Pohnpei' => '(UTC+11:00) Pacific/Pohnpei',
                    'Pacific/Kosrae' => '(UTC+11:00) Pacific/Kosrae',
                    'Antarctica/Macquarie' => '(UTC+11:00) Antarctica/Macquarie',
                    'Australia/Hobart' => '(UTC+11:00) Australia/Hobart',
                    'Pacific/Noumea' => '(UTC+11:00) Pacific/Noumea',
                    'Asia/Srednekolymsk' => '(UTC+11:00) Asia/Srednekolymsk',
                    'Pacific/Bougainville' => '(UTC+11:00) Pacific/Bougainville',
                    'Australia/Currie' => '(UTC+11:00) Australia/Currie',
                    'Pacific/Guadalcanal' => '(UTC+11:00) Pacific/Guadalcanal',
                    'Australia/Melbourne' => '(UTC+11:00) Australia/Melbourne',
                    'Pacific/Efate' => '(UTC+11:00) Pacific/Efate',
                    'Australia/Lord_Howe' => '(UTC+11:00) Australia/Lord_Howe',
                    'Australia/Sydney' => '(UTC+11:00) Australia/Sydney',
                    'Pacific/Norfolk' => '(UTC+11:30) Pacific/Norfolk',
                    'Pacific/Wallis' => '(UTC+12:00) Pacific/Wallis',
                    'Pacific/Tarawa' => '(UTC+12:00) Pacific/Tarawa',
                    'Pacific/Wake' => '(UTC+12:00) Pacific/Wake',
                    'Pacific/Majuro' => '(UTC+12:00) Pacific/Majuro',
                    'Pacific/Nauru' => '(UTC+12:00) Pacific/Nauru',
                    'Pacific/Fiji' => '(UTC+12:00) Pacific/Fiji',
                    'Asia/Kamchatka' => '(UTC+12:00) Asia/Kamchatka',
                    'Pacific/Funafuti' => '(UTC+12:00) Pacific/Funafuti',
                    'Pacific/Kwajalein' => '(UTC+12:00) Pacific/Kwajalein',
                    'Asia/Anadyr' => '(UTC+12:00) Asia/Anadyr',
                    'Pacific/Tongatapu' => '(UTC+13:00) Pacific/Tongatapu',
                    'Pacific/Auckland' => '(UTC+13:00) Pacific/Auckland',
                    'Pacific/Enderbury' => '(UTC+13:00) Pacific/Enderbury',
                    'Pacific/Fakaofo' => '(UTC+13:00) Pacific/Fakaofo',
                    'Antarctica/McMurdo' => '(UTC+13:00) Antarctica/McMurdo',
                    'Pacific/Chatham' => '(UTC+13:45) Pacific/Chatham',
                    'Pacific/Apia' => '(UTC+14:00) Pacific/Apia',
                    'Pacific/Kiritimati' => '(UTC+14:00) Pacific/Kiritimati'
                ],
                'name' => 'system.timezone'
            ],
            'system.param_sep' => [
                'type' => 'select',
                'label' => 'Parameter separator',
                'classes' => 'fancy',
                'default' => '',
                'options' => [
                    ':' => ': (default)',
                    ';' => '; (use this for apache on Windows)'
                ],
                'name' => 'system.param_sep'
            ],
            'site.title' => [
                'type' => 'text',
                'label' => 'Site Title',
                'size' => 'large',
                'placeholder' => 'Site wide title',
                'help' => 'Default title for your site',
                'name' => 'site.title'
            ],
            'site.author.name' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Default Author',
                'name' => 'site.author.name'
            ],
            'site.author.email' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Default Email',
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'site.author.email'
            ],
            'site.taxonomies' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Taxonomy Types',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'site.taxonomies'
            ],
            'site.metadata' => [
                'type' => 'array',
                'label' => 'Metadata',
                'placeholder_key' => 'Name',
                'placeholder_value' => 'Content',
                'name' => 'site.metadata'
            ],
            'site.blog.route' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Blog URL',
                'name' => 'site.blog.route'
            ],
            'site.summary.size' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Summary Size',
                'validate' => NULL,
                'min' => 0,
                'max' => 65536,
                'name' => 'site.summary.size'
            ],
            'site.routes' => [
                'type' => 'array',
                'label' => 'Custom',
                'placeholder_key' => '/your/alias',
                'placeholder_value' => '/your/route',
                'name' => 'site.routes'
            ],
            'streams.schemes.xxx' => [
                'type' => 'array',
                'name' => 'streams.schemes.xxx'
            ]
        ],
        'rules' => [
            
        ],
        'nested' => [
            'plugins' => [
                'error' => [
                    'enabled' => 'plugins.error.enabled'
                ],
                'pagination' => [
                    'enabled' => 'plugins.pagination.enabled',
                    'built_in_css' => 'plugins.pagination.built_in_css'
                ],
                'feed' => [
                    'enabled' => 'plugins.feed.enabled',
                    'count' => 'plugins.feed.count',
                    'description' => 'plugins.feed.description',
                    'lang' => 'plugins.feed.lang',
                    'length' => 'plugins.feed.length'
                ],
                'problems' => [
                    'enabled' => 'plugins.problems.enabled'
                ]
            ],
            'system' => [
                'home' => [
                    'alias' => 'system.home.alias'
                ],
                'pages' => [
                    'theme' => 'system.pages.theme',
                    'markdown' => [
                        'extra' => 'system.pages.markdown.extra'
                    ],
                    'process' => 'system.pages.process',
                    'dateformat' => [
                        'short' => 'system.pages.dateformat.short',
                        'long' => 'system.pages.dateformat.long'
                    ],
                    'order' => [
                        'by' => 'system.pages.order.by',
                        'dir' => 'system.pages.order.dir'
                    ],
                    'list' => [
                        'count' => 'system.pages.list.count'
                    ],
                    'publish_dates' => 'system.pages.publish_dates',
                    'events' => [
                        'page' => 'system.pages.events.page',
                        'twig' => 'system.pages.events.twig'
                    ]
                ],
                'cache' => [
                    'enabled' => 'system.cache.enabled',
                    'check' => [
                        'method' => 'system.cache.check.method'
                    ],
                    'driver' => 'system.cache.driver',
                    'prefix' => 'system.cache.prefix',
                    'gzip' => 'system.cache.gzip'
                ],
                'assets' => [
                    'enable_asset_timestamp' => 'system.assets.enable_asset_timestamp',
                    'css_pipeline' => 'system.assets.css_pipeline',
                    'css_minify' => 'system.assets.css_minify',
                    'css_minify_windows' => 'system.assets.css_minify_windows',
                    'css_rewrite' => 'system.assets.css_rewrite',
                    'js_pipeline' => 'system.assets.js_pipeline',
                    'js_minify' => 'system.assets.js_minify'
                ],
                'media' => [
                    'enable_media_timestamp' => 'system.media.enable_media_timestamp',
                    'upload_limit' => 'system.media.upload_limit'
                ],
                'twig' => [
                    'cache' => 'system.twig.cache',
                    'debug' => 'system.twig.debug',
                    'auto_reload' => 'system.twig.auto_reload',
                    'autoescape' => 'system.twig.autoescape'
                ],
                'errors' => [
                    'display' => 'system.errors.display',
                    'log' => 'system.errors.log'
                ],
                'debugger' => [
                    'enabled' => 'system.debugger.enabled',
                    'mode' => 'system.debugger.mode',
                    'strict' => 'system.debugger.strict',
                    'max_depth' => 'system.debugger.max_depth',
                    'log' => [
                        'enabled' => 'system.debugger.log.enabled'
                    ],
                    'shutdown' => [
                        'close_connection' => 'system.debugger.shutdown.close_connection'
                    ]
                ],
                'images' => [
                    'default_image_quality' => 'system.images.default_image_quality',
                    'debug' => 'system.images.debug'
                ],
                'timezone' => 'system.timezone',
                'param_sep' => 'system.param_sep'
            ],
            'site' => [
                'title' => 'site.title',
                'author' => [
                    'name' => 'site.author.name',
                    'email' => 'site.author.email'
                ],
                'taxonomies' => 'site.taxonomies',
                'metadata' => 'site.metadata',
                'blog' => [
                    'route' => 'site.blog.route'
                ],
                'summary' => [
                    'size' => 'site.summary.size'
                ],
                'routes' => 'site.routes'
            ],
            'streams' => [
                'schemes' => [
                    'xxx' => 'streams.schemes.xxx'
                ]
            ]
        ],
        'filter' => [
            'validation' => true
        ]
    ]
];
