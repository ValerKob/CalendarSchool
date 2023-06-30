<?php

$connect = mysqli_connect('localhost', 'root', '', 'calendarSchool');

$id = $_POST['deleteUser'];

mysqli_query($connect, "DELETE FROM applications WHERE `applications`.`id` = $id");

$new_url = 'http://app.ru/Projects/CalendarSchool/Ad134Qfg5d.php';
header('Location: ' . $new_url);
