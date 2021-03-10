<?php
include_once './functions.php';
include_once './pagesData.php';

if (isset($_GET["id"]) && $_GET["id"] == "contact" && isset($_REQUEST["sendMessage"]) && validateFormData()) {
    $arPages["contact"]["content"] = $arPages["contact"]["content_success"];
    header("refresh:10;url=/Homework_PHP_5/page.php?id=contact");
}

include_once './templates/header.php';

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
include_once "./templates/footer.php";
