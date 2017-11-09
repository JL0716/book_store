<?php

include_once __DIR__."/../vendor/autoload.php"; //Need to return back to the top level directory to get the autoload.php
include_once __DIR__."/read.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$faker = Faker\Factory::create();

//echo $faker->name."<br>";
//echo $faker->address."<br>";
//echo $faker->text."<br>";

for ($i=0; $i<5; $i++) {

    Capsule::table('users')->insert(
        [
            'name' => $faker->name,
            'phone' => $faker->phoneNumber,
            "address" => $faker->address,
            "email" => $faker->email
        ]
    );
}

?>