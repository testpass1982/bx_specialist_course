<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("zFinanbox");
?><?$APPLICATION->IncludeComponent(
	"mycomponents:curr.date", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"DATE_TEMPLATE" => "M-d-Y"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>