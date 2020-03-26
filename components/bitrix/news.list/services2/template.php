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
<div class="service-line">
    <?$i=0;
    foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="service-line-block" style="justify-content: space-between;"  id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div><img src="<?=$arItem["PROPERTIES"]["ICON"]["PATH"]?>" alt="<?=$arItem["NAME"]?>"></div>
            <h2><?=$arItem["NAME"]?></h2>
            <p><?=$arItem["PREVIEW_TEXT"]?></p>
            <div><a class="btn" href="<?=$arItem["DETAIL_PAGE_URL"]?>" target="_blank">Подробнее</a></div>
        </div>

        <?$i++;
    endforeach;?>

</div>


