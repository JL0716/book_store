<?php

include_once __DIR__."/../vendor/autoload.php"; //Need to return back to the top level directory to get the autoload.php
include_once __DIR__."/read.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->table('users', function ($table) {
    $table->string('email')->unique()->change();
});

//直接在GitBash下 php 2017_11_09_xxxx_create_xxxx_tables.php