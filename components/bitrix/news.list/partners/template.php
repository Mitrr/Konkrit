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
<div class="swiper-slider swiper-slider--review"
     data-slider-slides-per-view="6"
     data-slider-centered-slides="false"
     data-slider-slides-per-group="1"
     data-slider-effect="slide"
     data-slider-loop="true"
     data-slider-autoplay="false"
     data-slider-speed="600"
     data-slider-grabcursor="false"
     data-slider-space-between="0">
    <div class="swiper-right-angle">
        <div class="swiper-container container ">
            <div class="swiper-wrapper">
    <?$i=0;
    foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <div class="partners-wrapper-left-img swiper-slide">
            <img src="<?=$arItem["PREVIEW_PICTURE"]["RESIZE_URL"]?>" alt="<?=$arItem["NAME"]?>">
        </div>

        <?$i++;
    endforeach;?>
            </div>
        </div>
    </div>
</div>

