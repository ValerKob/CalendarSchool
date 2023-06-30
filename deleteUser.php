<?php

$connect = mysqli_connect('localhost', 'cw04582', 'm38nsMVs', 'cw04582_cq');

$id = $_POST['deleteUser'];

mysqli_query($connect, "DELETE FROM applications WHERE `applications`.`id` = $id");

$new_url = 'http://cw04582.tw1.ru/Ad134Qfg5d.php';
header('Location: ' . $new_url);
