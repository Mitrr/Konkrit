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
<div class="container">
    <div>

<?$i=0;
foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>


        <div class="blog-content-header">
            <div class="blog-content-header-wrap">
        <?if ($arItem["DETAIL_PICTURE"]["ID"]>0):?>
                <div class="blog-content-header-wrap-left">
                    <img src="<?=$arItem["DETAIL_PICTURE"]["RESIZE_URL"]?>" alt="<?=$arItem["NAME"]?>">
                </div>
        <?endif;?>
                <div class="blog-content-header-wrap-right">
                    <div class="wrap-margin">
                    <h2><?=$arItem["NAME"]?></h2>
                    <span><?=$arItem["DISPLAY_ACTIVE_FROM"]?></span>
                    <p>
                        <?=$arItem["PREVIEW_TEXT"]?>
                    </p>
                    <div class="span-nav"><a  href="<?=$arItem["DETAIL_PAGE_URL"]?>" target="_blank" >Подробнее</a></div>
                    </div>
                </div>
            </div>
        </div>



<?$i++;
endforeach;?>
    </div>
    <div class="pagination">

    </div>
</div>