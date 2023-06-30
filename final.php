<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/css/style.css?rnd=<?= rand(0, 999) ?>">
    <title>Школа № 7</title>
</head>

<body>

    <div class="container">
        <!-- code here -->
        <div class="card" style="padding: 0; margin-top: -300px;">
            <img style="border-radius: 10px;" src="./assets/images/head.png" alt="">
        </div>

        <div class="card">
            <h3 style="margin-bottom: 0;">Вы записаны на <?php echo $_GET['dataZa'] ?>.08.2023, будем вас ждать в 19:00, по адресу: г. Архангельск, территориальный округ Майская горка ул.<br>
                Карпогорская, д. 36</h3>
            </p>
        </div>

    </div>

</body>

</html>