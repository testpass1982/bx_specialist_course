<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider">

					<?foreach($arResult["ITEMS"] as $arItem):?>
						<?
							$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
							$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
                        <li>
							<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
								alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
								title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
							/>
                            <div class="caption">
                                <h1><?=$arItem["NAME"]?></h1>
								<span><?=$arItem["PREVIEW_TEXT"]?></span><br>
								<a href="<?=$arItem['PROPERTIES']['button_url']['VALUE']?>" class="button button02">
								<?=$arItem['PROPERTIES']['button_text']['VALUE']?></a>
							</div>
						</li>
					<?endforeach;?>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
</div>
