<?php

namespace App;

use Symfony\Component\Console\Application;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new Application('demo application');
$app->add(new ShowString());
$app->run();
