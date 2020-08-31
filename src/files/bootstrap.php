<?php

use ZelFramework\Kernel\Doctrine\DoctrineManager;
use ZelFramework\Kernel\Environment;

define('PROJECT_DIR', __DIR__ . '/');

require 'vendor/autoload.php';

new Environment();
$entityManager = DoctrineManager::get();