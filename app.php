<?php

namespace App;

use Symfony\Component\Console\Application;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new Application('console app');
$app->add(new SayHello());
$app->add(new ShowString());
$app->add(new AskUser());
$app->run();
