<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
\Bitrix\Main\UI\Extension::load("ui.buttons"); 
$arResult['DATE'] = date($arParams['DATE_TEMPLATE']);
$this->IncludeComponentTemplate();
?>


