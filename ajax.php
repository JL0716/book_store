<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>
<body>
<H1>Hello World~</H1>
<H1>哈囉~</H1>

<?php
echo "test"
?>
<p>Test JQuery</p>
<p id="now">Time</p>
</body>
</html>

<?php
//include_once __DIR__."/vendor/autoload.php";
//use Carbon\Carbon;
//printf("Right Now is %s", Carbon::now()->toDateTimeString());
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("p").click(function(){
            $(this).hide();
        })
    });

    (function loop() {
        setTimeout(function(){
            QueryData();
            loop();
        },1000);
    })();

    function QueryData() {
        jQuery.getJSON("http://carbon.app/json.php",function (data) {
            var tmp = data;
            document.getElementById("now").innerHTML = data.time;
        });
    }
</script>

