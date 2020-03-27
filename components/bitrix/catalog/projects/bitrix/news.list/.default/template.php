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
<section class="project-home-content">
    <div class="container">
        <div class="projects-header">
            <p>Выберите готовый типовой проект, наши специалисты сделают предварительный расчет стоимости с учетом ваших пожеланий.</p>
        </div>
    </div>
    <div class="projects">
        <div class="wrap-projects">
<?$i=0;
foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" target="_blank" class="project-item">
        <div class="project-item">
        <div class="project-item-img">
            <img src="<?=$arItem["DETAIL_PICTURE"]["RESIZE_URL"]?>" alt="<?=$arItem["NAME"]?>">
        </div>
        <div class="project-item-describe">
            <div class="project-item-describe-head">
                <div class="head-header">
                    <p><span class="sand-color">Проект</span> <?=$arItem["NAME"]?></p>
                </div>
                <?if (!empty($arItem["PROPERTIES"]["MATERIAL"]["VALUE"])):?>
                    <div class="head-subheader">
                        <p>Материал: <?=implode(", ",$arItem["PROPERTIES"]["MATERIAL"]["VALUE"])?></p>
                    </div>
                <?endif;?>
            </div>
            <div class="project-item-describe-foot">
                <div class="project-item-describe-foot-left">
                    <?if ($arItem["PROPERTIES"]["BEDROOM"]["VALUE"]!=""):?>
                        <span class="icon-svg3"></span><p><?=$arItem["PROPERTIES"]["BEDROOM"]["VALUE"]?></p>
                    <?endif;?>
                    <?if ($arItem["PROPERTIES"]["BATH"]["VALUE"]!=""):?>
                        <span class="icon-svg2"></span><p><?=$arItem["PROPERTIES"]["BATH"]["VALUE"]?></p>
                    <?endif;?>
                    <?if ($arItem["PROPERTIES"]["ROOM"]["VALUE"]!=""):?>
                        <p>количество комнат - <?=$arItem["PROPERTIES"]["ROOM"]["VALUE"]?></p>
                    <?endif;?>
                </div>
                <div class="project-item-describe-foot-right">
                    <?if ($arItem["PROPERTIES"]["SQUARE"]["VALUE"]!=""):?>
                        <span class="sand-color"><?=$arItem["PROPERTIES"]["SQUARE"]["VALUE"]?> m<sup>2</sup></span>
                    <?endif;?>
                    <?if ($arItem["PROPERTIES"]["FLOOR"]["VALUE"]!=""):?>
                        <p><?=$arItem["PROPERTIES"]["FLOOR"]["VALUE"]?> <?=($arItem["PROPERTIES"]["FLOOR"]["VALUE"]==1)? "этаж": "этажа"?></p>
                    <?endif;?>
                </div>
            </div>
        </div>
        </div>
    </a>



<?$i++;
endforeach;?>
            </div>

        <div class="container">
            <div class="pagination">
                <?=$arResult["NAV_STRING"]?>
            </div>
        </div>
    </div>
</section>
