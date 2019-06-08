<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Так делать можно");
?><?$APPLICATION->IncludeComponent(
	"custom:empty.component",
	"takmozhno2",
Array()
);?><?$APPLICATION->IncludeComponent(
	"some.code", 
	".default", 
	array(
		"IBLOCK_ID" => "22",
		"IBLOCK_TYPE" => "auto",
		"ITEMS_LIMIT" => "10",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>