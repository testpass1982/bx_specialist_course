<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
include_once('meta.php');
global $APPLICATION;
use Bitrix\Main\Page\Asset;
?>
<!doctype html>
<html lang="ru">
	<head>
        <?$APPLICATION->AddHeadScript('local/templates/responsive/js/head.js');?>
        <?$APPLICATION->SetAdditionalCSS('local/templates/responsive/css/font-awesome.css', true);?>
        <?Asset::getInstance()->addCss('/bitrix/css/main/bootstrap.min.css');?>

		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle()?></title>
        <?//$this->addExternalCss("local/templates/responsive/css/style.css");?>
        <?//$APPLICATION->SetAdditionalCSS('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');?>
        <!-- //Meta tag Keywords -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->
	</head>
	<body>
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<h1 id="pagetitle"><?$APPLICATION->ShowTitle(false);?></h1>