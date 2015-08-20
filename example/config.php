<?php

return [
    'bootstrap' => __DIR__ . '/bootstrap.php',
    'message_server' => [
        'host' => '127.0.0.1',
        'port' => 11130,
    ],
    'tubes' => [
        'Example1' => ['worker_num' => 5, 'class' => 'Footstones\\Plumber\\Example\\Example1Worker'],
        'Example2' => ['worker_num' => 3, 'class' => 'Footstones\\Plumber\\Example\\Example2Worker']
    ],
    'log_path' => '/tmp/plumber.log',
    'pid_path' => '/tmp/plumber.pid',
    'socket_path' => '/tmp/plumber.sock',
    'daemonize' => 0,
];