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

<div class="blog-useful-right">
<?$i=0;
foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

    <div class="blog-item">
        <?if ($arItem["DETAIL_PICTURE"]["ID"]>0):?>
        <div class="project-item-img">
            <img src="<?=$arItem["DETAIL_PICTURE"]["RESIZE_URL"]?>" alt="<?=$arItem["NAME"]?>">
        </div>
        <?endif;?>
        <div class="blog-header">
            <p><?=$arItem["NAME"]?></p>
        </div>
        <?if ($arItem["PROPERTIES"]["TITLE2"]["VALUE"]!=""):?>
            <div class="blog-subheader">
                <p><?=$arItem["PROPERTIES"]["TITLE2"]["VALUE"]?></p>
            </div>
        <?endif;?>
        <div class="blog-text">
            <p>
                <?=$arItem["PREVIEW_TEXT"]?>
            </p>
        </div>
        <div class="span-nav">
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" target="_blank">Подробнее</a>
        </div>
    </div>


<?$i++;
endforeach;?>
</div>