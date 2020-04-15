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
</body>
</html>

<?php

for ($i =0; $i <=9; $i++) {
    if ($i == 2) {
        $class = "class='red'";
    } else {
        $class = "class='green'";
    }
    echo "<img".$class."src='PHP/img1/aap".$i.".jpg'>";
}
