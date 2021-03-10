<?php
require_once "./pagesData.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Homework_PHP_5/css/style.css">
    <link rel="stylesheet" href="/Homework_PHP_5/css/media.css">
    <title><?= isset($_GET["id"]) ? $arPages[$_GET["id"]]["name"]: "Treehouse"?></title>
</head>
<body>
<header class="content">
    <div class="logo">
        <div class="logo_pic">
            <img src="/Homework_PHP_5/image/leaf.png" alt="Logo leaf">
        </div>
        <span>Treehouse</span>
    </div>
    <input type="checkbox" id="burgerCheck">
    <div class="burger_menu">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <ul class="nav">
        <? foreach($arPages as $page): ?>
        <li><a href="<?= $page["link"] ?>"><?= $page["name"] ?></a></li>
        <? endforeach; ?>
    </ul>
</header>
<main>
<?php
