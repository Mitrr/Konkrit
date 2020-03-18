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
<h2 class="h2"  id="anchor-serts">наши лицензии и сертификаты</h2>
<div class="cols">
    <?$i=0;
    foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="serts-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <a href="javascript:;" data-fancybox="sert" data-src="<?=$arItem["PREVIEW_PICTURE"]["RESIZE_URL_BIG"]?>">
                <img src="<?=$arItem["PREVIEW_PICTURE"]["RESIZE_URL"]?>" alt="<?=$arItem["NAME"]?>" />
            </a>
        </div>

        <?$i++;
    endforeach;?>
</div>


