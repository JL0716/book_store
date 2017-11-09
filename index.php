<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>
<body>
<H1>Hello Composer World~</H1>
<H1>哈囉~</H1>
<?php

include_once __DIR__."/vendor/autoload.php";

 use Carbon\Carbon;

 printf("Right Now is %s", Carbon::now()->toDateTimeString());

 ?>
</body>
</html>



