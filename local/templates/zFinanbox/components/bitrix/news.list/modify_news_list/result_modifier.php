<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

    foreach ($arResult['ITEMS'] as $key => $value) {
        // echo "<pre>" . var_dump($key, $value) . "</pre>";
        $arResult['ITEMS'][$key]['DISPLAY_PROPERTIES']['mass']['DISPLAY_VALUE'] =
            $value['PROPERTIES']['mass']['VALUE'] . " кг";
    }

?>
