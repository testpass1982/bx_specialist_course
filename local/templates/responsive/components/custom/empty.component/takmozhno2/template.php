<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

foreach ($arResult['SOME_CONTENT'] as $arItem) {
    $name = $arItem['NAME'];
    $message = $arItem['MESSAGE'];
    echo "<p>$name:$message";
}
?>