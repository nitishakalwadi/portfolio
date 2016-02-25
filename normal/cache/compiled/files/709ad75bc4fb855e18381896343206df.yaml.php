<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/portfolio/normal-version/user/config/plugins/email.yaml',
    'modified' => 1452113577,
    'data' => [
        'enabled' => true,
        'from' => 'your@email.here',
        'to' => 'your@email.here',
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
        ]
    ]
];
