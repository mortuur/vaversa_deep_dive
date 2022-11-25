<?php
require __DIR__ . '/vendor/autoload.php';

$options = array(
    'cluster' => 'eu',
    'useTLS' => true
);
$pusher = new Pusher\Pusher(
    'cae7dac27fa6d070710d',
    '36e2956b75e2c16875db',
    '1511961',
    $options
);

$data['message'] = 'test 123';
$pusher->trigger('my-channel', 'my-event', $data);
