<?php

require_once __DIR__ . '../../bootstrap/init.php';

$app_name = getenv('APP_NAME');

use Illuminate\Database\Capsule\Manager as Capsule;

$category = Capsule::table('categories')->where('id', 1)->first();

var_dump($category);
