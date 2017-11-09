<?php

include_once __DIR__."/../vendor/autoload.php"; //Need to return back to the top level directory to get the autoload.php
include_once __DIR__."/read.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('orders', function ($table) {
    $table->increments('id');
    $table->string('customer_name');
    $table->json('book_ids_price');
    $table->string('address');
    $table->string('phone');
    $table->integer('total_price');
    $table->timestamps();
});

//直接在GitBash下 php 2017_11_09_xxxx_create_xxxx_tables.php