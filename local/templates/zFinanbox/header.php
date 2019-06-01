<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
include_once('meta.php');
global $APPLICATION;
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">

    <?$APPLICATION->ShowHead();?>
    <title>
        <?$APPLICATION->ShowTitle()?>
    </title>
    <meta name="description" content="Free Responsive Html5 Css3 Templates | Zerotheme.com">
    <meta name="author" content="www.zerotheme.com">

    <!-- Mobile Specific Metas
	================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <?use Bitrix\Main\Page\Asset;?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/zerogrid.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/responsiveslides.css");?>

    <!-- <link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsiveslides.css"> -->

    <!-- Custom Fonts -->
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/font-awesome/css/font-awesome.min.css");?>
    <!-- <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

    <!-- Owl Carousel Assets -->
    <!-- <link href="owl-carousel/owl.carousel.css" rel="stylesheet"> -->
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/owl-carousel/owl.carousel.css");?>
    <!-- <link href="owl-carousel/owl.theme.css" rel="stylesheet"> -->

    <!-- <link rel="stylesheet" href="css/menu.css"> -->
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/menu.css");?>
    <!-- <script src="js/jquery183.min.js"></script> -->
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery183.min.js");?>
    <!-- <script src="js/script.js"></script> -->
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/script.js");?>

    <!-- <script src="js/jquery-latest.min.js"></script> -->
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-latest.min.js");?>
    <!-- <script src="js/responsiveslides.min.js"></script> -->
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/responsiveslides.min.js");?>
    <script>
    // You can also use "$(window).load(function() {"
    $(function() {
        // Slideshow 
        $("#slider").responsiveSlides({
            auto: true,
            pager: false,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function() {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function() {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
    </script>

    <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="<?=SITE_TEMPLATE_PATH?>/http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->

</head>

<body class="home-page">
    <div id="panel">
        <?$APPLICATION->ShowPanel();?>
    </div>
    <div class="wrap-body">
        <header>
            <div class="top-bar">
                <div class="wrap-top zerogrid">
                    <div class="row">
                        <div class="col-2-3">
                            <ul class="list-inline">
                                <li class="mail"><span><i class="fa fa-envelope"></i> ContacUs@Gmail.com</span></li>
                                <li class="phone"><span><i class="fa fa-phone"></i>(9999) 123 888 7</span></li>
                                <li class="clock"><span><i class="fa fa-clock-o"></i>Mon - Sat | 7:00 - 17:00</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-1-3">
                            <ul class="list-inline top-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-logo">
                <a href="index.html"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png"></a>
            </div>





            <!-- <div id='cssmenu'>
                <ul>
                    <li class="active"><a href='index.html'><span>zFinanBox</span></a></li>
                    <li class=' has-sub'><a href='#'><span>Category</span></a>
                        <ul>
                            <li class='has-sub'><a href='#'><span>Item 1</span></a>
                                <ul>
                                    <li><a href='#'><span>Sub Item</span></a></li>
                                    <li class='last'><a href='#'><span>Sub Item</span></a></li>
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>Item 2</span></a>
                                <ul>
                                    <li><a href='#'><span>Sub Item</span></a></li>
                                    <li class='last'><a href='#'><span>Sub Item</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href='archive.html'><span>Archive</span></a></li>
                    <li><a href='single.html'><span>About</span></a></li>
                    <li class='last'><a href='contact.html'><span>Contact</span></a></li>
                </ul>
            </div> -->

            <?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel_custom_top", 
            Array(
                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "3",	// Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                "COMPONENT_TEMPLATE" => "horizontal_multilevel"
            ),
            false
            );?>

        <!--
            <div class="slider">
     
                <div class="callbacks_container">
                    <ul class="rslides" id="slider">
                        <li>
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/slideshow-image1.jpg" alt="">
                            <div class="caption">
                                <h1>SED UT PERSPICIATEIS UNDE OMNIS</h1>
                                <span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,<br> sed diam nonumy
                                    eirmod tempor invidunt ut labore et dolore magna aliquyam erat, <br>sed diam
                                    voluptua. At vero eos et accusam et justo duo dolores et ea rebum</span>
                            </div>
                        </li>
                        <li>
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/slideshow-image2.jpg" alt="">
                            <div class="caption">
                                <h1>TEMPORIBUS AUTEM QUIBUSDAM ET AUT</h1>
                                <span>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis <br>
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat.</span>
                            </div>
                        </li>
                        <li>
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/slideshow-image3.jpg" alt="">
                            <div class="caption">
                                <h1>AENEAN FEUGIAT IN ANTE</h1>
                                <span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,<br> sed diam
                                    nonumy</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>

        -->

            <?$APPLICATION->IncludeComponent("bitrix:news.list", "main_page_top_slider", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "24",	// Код информационного блока
		"IBLOCK_TYPE" => "promo",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "button_url",
			1 => "button_text",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
);?>


        </header>
        <!--////////////////////////////////////Container-->