<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    .red {
        border: solid red 5px;
    }
    .green {
        border: solid green 5px;
    }
</style>

<?php

for ($i = 1; $i <=9; $i++) {
    if ($i % 2 == 0) {
        $class = "class='red'";
    } else {
        $class = "class='green'";
    }
    echo "<img ".$class. "src='../img1/aap".$i.".jpg'>";
}
?>
</body>
</html>

