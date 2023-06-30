<?php

if ($_POST['dataZa'] == '0') {
    $new_url = 'http://app.ru/Projects/CalendarSchool/index.php?dateZaProv=0';
    header('Location: ' . $new_url);
} else {
    $connect = mysqli_connect('localhost', 'root', '', 'calendarSchool');

    $fio = $_POST['fio'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $dataZa = $_POST['dataZa'];

    mysqli_query($connect, "INSERT INTO `applications` (`id`, `fio`, `email`, `tel`, `dataZa`) VALUES (NULL, '$fio', '$email', '$tel', '$dataZa')");

    $new_url = 'http://app.ru/Projects/CalendarSchool/phoneConf.php?dataZa=' . $dataZa;
    header('Location: ' . $new_url);
}
