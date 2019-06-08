<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("some.code");
?><?$APPLICATION->IncludeComponent(
	"custom:some.code",
	"",
	Array(
		"IBLOCK_ID" => "22",
		"IBLOCK_TYPE" => "auto",
		"ITEMS_LIMIT" => "10"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>