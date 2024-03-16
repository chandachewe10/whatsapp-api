<?php
require_once './vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));
$dotenv->load();
it('asserts DotEnv is working Fine', function () {
    // Prepare
    $base_url_exchangerate = 'https://graph.facebook.com';

    // Act
    $dot_env_base_url_exchangerate = $_ENV['BASE_URI'];

    // Assert
    expect($base_url_exchangerate)->toEqual($dot_env_base_url_exchangerate);
});