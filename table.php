<?php
    $file = fopen('users.txt', 'r');

    while (feof ( $file) === false) {

        $str = fgets($file);
        echo $str;
        echo "<br>";
        $arr = explode("\t", $str);
        //var_dump($arr);

        $first_name = $arr[0];
        $last_name = $arr[1];
        $email = $arr[2];
        $password = $arr[3];

        echo '<table border="1" cellpadding="12" cellspacing="0">';
        echo '<tr> <td></td> <td></td> </tr>';
    }
    fclose($file);

?>

<!--<table border="1" cellpadding="12" cellspacing="0">-->
<!--    <tr>-->
<!--        <td rowspan="2">Номер</td>-->
<!--        <td colspan="2">Теги</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>Тег</td>-->
<!--        <td>Значение</td>-->
<!--    </tr>-->




<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Title</title>-->
<!--</head>-->
<!--<body>-->
<!---->
<!---->
<!---->
<!--</body>-->


