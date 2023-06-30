<?php
$connect = mysqli_connect('localhost', 'root', '', 'calendarSchool');

$post = mysqli_query($connect, "SELECT * FROM `applications` ORDER BY `applications`.`dataZa` ASC");

while ($data = mysqli_fetch_assoc($post)) {
    $array_Post[] = $data;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/css/admin.css">
    <title>Админка</title>
</head>

<body>
    <div class="container">
        <h2>Responsive Tables Using LI <small>Triggers on 767px</small></h2>
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-1">ID</div>
                <div class="col col-2">ФИО</div>
                <div class="col col-2">Телефон</div>
                <div class="col col-3">Email</div>
                <div class="col col-4">Дата записи</div>
            </li>
            <?php
            foreach ($array_Post as $db) {
                echo '
                    <li class="table-row">
                <div class="col col-1" data-label="ID">' . $db['id'] . '</div>
                <div class="col col-2" data-label="ФИО">' . $db['fio'] . '</div>
                <div class="col col-2" data-label="Телефон">' . $db['email'] . '</div>
                <div class="col col-3" data-label="Email">' . $db['tel'] . '</div>
                <div class="col col-4" data-label="Дата записи">' . $db['dataZa'] . '.08.2023</div>
                <form action="deleteUser.php" method="POST">
                    <input type="number" name="deleteUser" value="' . $db['id'] . '" style="display: none;" />
                    <button type="submit" style="color: red;">Удалить</button>
                </form>
            </li>';
            }
            ?>
        </ul>
    </div>
</body>

</html>