<?php
require_once '/var/www/bitrix/Homework_PHP_5/functions.php';

include_once '/var/www/bitrix/Homework_PHP_5/templates/header.php';
if(isset($arPages[$_GET["id"]]["content"]) && is_array($arPages[$_GET["id"]]["content"])){
    if(isset($_GET["article"]))
        echo $arPages[$_GET["id"]]["content"][$_GET["article"]]["content"];
    else {
        $text = "<h2>Список статей</h2><ul>";
        foreach ($arPages[$_GET["id"]]["content"] as $key => $item) {
            $text .= "<li><a href='{$arPages[$_GET["id"]]["link"]}&article={$key}'>{$item["name"]}</a></li>";
        }
        echo $text . "</ul>";
    }
}
else
    echo isset($arPages[$_GET["id"]]["content"]) ? $arPages[$_GET["id"]]["content"] : "";
include_once "/var/www/bitrix/Homework_PHP_5/templates/footer.php";

//6. Если значения формы проходят проверку, то должна выполнятся
//переадресация на страницу успешной отправки с любым благодарственным
//текстом, а через 10 секунд возвращать посетителя на страницу с контактами.
