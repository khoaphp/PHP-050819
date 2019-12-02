<!DOCTYPE html>
<html lang="en">
<head>
    <base href="http://localhost/admin/" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/main.css" />
    </head>
<body>
    <div class="container">
        <?php require_once "./mvc/views/blocks/headerMenu.php" ?>
        <?php require_once "./mvc/views/blocks/slider.php" ?>

    
        <div class="row">
            <div id="leftCol" class="col-lg-3">

            <?php require_once "./mvc/views/blocks/cart.php" ?>
            <?php require_once "./mvc/views/blocks/login.php" ?>
            <?php require_once "./mvc/views/blocks/menu.php" ?>
            <?php require_once "./mvc/views/blocks/ads.php" ?>

            </div>
            <div id="rightCol" class="col-lg-9">
            <?php require_once "./mvc/views/pages/". $data["page"] .".php"; ?>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./public/js/main.js"></script>
</body>
</html>