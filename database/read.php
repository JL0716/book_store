<?php

include_once __DIR__."/../vendor/autoload.php"; //Need to return back to the top level directory to get the autoload.php

use Illuminate\Database\Capsule\Manager as Capsule;

$Capsule = new Capsule();

$Capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'phpMySQL',
    'username'  => 'homestead',
    'password'  => 'secret',
    'charset'   => 'utf8mb4',
    'collation' => 'utf8mb4_general_ci',
    'prefix'    => '',
]);
$Capsule->setAsGlobal();

$students = Capsule::table('students')->get();

var_dump($students);

$students = Capsule::select("select * from students"); //直接使用SQL語法得到跟上面一樣的結果

var_dump($students);

//不用要以下方式,以免使用者輸入的SQL語法造成安全性的問題
//$userInput = $_GET["sql"]
//$results = Capsule::select($userInput);
 ?>