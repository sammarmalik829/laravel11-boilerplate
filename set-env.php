<?php

$projectDir = basename(__DIR__);
$projectName = str_replace('-', ' ', ucwords($projectDir, '-'));

$envFile = file_get_contents(__DIR__ . '/.env');
$envFile = str_replace('APP_NAME=Laravel', 'APP_NAME=' . $projectName, $envFile);
file_put_contents(__DIR__ . '/.env', $envFile);
