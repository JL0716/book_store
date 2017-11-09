<?php
include_once __DIR__."/vendor/autoload.php";
use Carbon\Carbon;
//printf("Right Now is %s", Carbon::now()->toDateTimeString());
//return Carbon::now()->toDateTimeString();

$t = ["time" => Carbon::now()->toDateTimeString()];
echo json_encode($t); //{"time":"value"}
?>
