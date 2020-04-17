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
    table, tr, td {
        border: solid black 1px;
        border-collapse: collapse;
    }
    td {
        padding: 10px;
    }
    img {

        margin-right: 5px;
    }
    td.plaatjes {
        border: solid white 1px;
    }
</style>

<table>
<?php

$zwemclubs = [

    "de spartelkuikens" => 25,
    "de waterbuffels" => 32,
    "plonsmderin" => 11,
    "bommetje" => 23
];

foreach ($zwemclubs as $clubnaam => $zwemmers) {

    echo '<tr>';

    //Clubnamen
    echo "<td>$clubnaam</td>";

    //Zwemmersaantallen
    echo "<td>$zwemmers</td>";

    //Plaatjes
    echo '<td class="plaatjes">';
    $plaatjes = floor($zwemmers/5);
    for ($i = 0; $i < $plaatjes; $i++) {
        echo '<img src="../img%203/Anime1.jpg" alt="plaatje" height="100" width="100">';
    }
    echo '</td>';

    echo '</tr>';

}
?>

</table>

</body>
</html>



