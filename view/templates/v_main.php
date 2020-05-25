<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=$BASE_URL?>assets/styles/styles.css" rel="stylesheet"> 
    <link href="<?=$BASE_URL?>assets/styles/bootstrap.min.css" rel="stylesheet">

    <title><?=$title?></title>
</head>
<body>

<header class="header">
    <div class="header-container row">
        <div class="logo-container col-12">
            <h2 class="header-title">
                SomeShop.com
            </h2>
            <p class="header-subtitle">
                Магазин электронных товаров
            </p>
        </div>
    </div>

    </div>
</header>

<nav class="header-nav">
    <div class="header-nav__inner row">
        <ul class="row col col-12 nav-board">
            <li><a href="<?=$BASE_URL?>">Главная</a></li>
            <li><a href="<?=$BASE_URL?>catalog">Каталог</a></li>
            <li><a href="<?=$BASE_URL?>contacts">Контакты</a></li>
            <li><a href="<?=$BASE_URL?>sharing">Отзывы</a></li>
            <li><a href="<?=$BASE_URL?>reg">Регистрация</a></li>
            <? if ($user === null): ?>
            <li><a href="<?=$BASE_URL?>login">Войти</a></li>
            <? else: ?>
            <li><a href="<?=$BASE_URL?>logout">Выйти</a></li>
            <? endif;?>

    </div>
</nav>

<div class="cart">
    <div class="cart__inner row">
        <? if ($user !== null): ?>
        <p>Вы авторизованы как: <?=$user['login']?></p>
        <? endif;?>
        <div class="col col-6">Корзина</div>
    </div>

</div>

<? if($regSuccessful):?>

<div class="alert alert-success">
Вы успешно зарегистрированы
</div>
<? endif;?>


<section class="main-content">
    <div class="main-content__inner">
    <?=$content?>
    </div>

</section>

<footer class="footer">
    <div class="footer__inner">
        <div>&copy;Все права не защищены</div>
    </div>
</footer>
<script
  src="https://code.jquery.com/jquery-3.5.0.min.js"
  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
  crossorigin="anonymous"></script>
</body>
</html>