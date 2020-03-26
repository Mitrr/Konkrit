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

     <div class="first">
<?$i=0;
foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	$arName = explode(" ",$arItem["NAME"]);
	?>
            <?if ($i==1):?>
            </div><div class="second">
            <?elseif($i==2):?>
            </div><div class="third">
            <?elseif($i==4):?>
            </div><div class="five">
            <?elseif($i==5):?>
            </div><div class="six">
            <?elseif($i==6):?>
            </div><div class="four">
            <?elseif($i==7):?>
            </div><div class="gallery-card">
            <?endif;?>
            <?if ($i==7):?>
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" target="_blank" class="project-item">
                    <div class="project-item-img">
                        <img src="<?=$arItem["DETAIL_PICTURE"]["RESIZE_URL"]?>" alt="<?=$arItem["NAME"]?>">
                    </div>
                    <div class="project-item-describe">
                        <div class="project-item-describe-head">
                            <div class="head-header">
                                <p><span class="sand-color"><?=array_shift($arName)?></span> <?=implode(" ",$arName)?></p>
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
                    <div class="project-item-cont">
                        <span class="span-ease">Подробнее</span>
                    </div>

                </a>
            <?else:?>
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" target="_blank" class="img-s">
                    <img src="<?=$arItem["DETAIL_PICTURE"]["RESIZE_URL"]?>" alt="<?=$arItem["NAME"]?>">
                </a>
            <?endif;?>
                <?if ($i==0):?>
                    <a href="/portfolio/?FLTR_33_2944839123=Y&set_filter=Подобрать" target="_blank" class="gallery-blog">
                        <div class="build-home">
                            <h3>Строящиейся<br/>и построенные дома</h3>
                            <span class="span-ease">Подробнее</span>
                        </div>
                    </a>
                <?elseif($i==5):?>
                    <div class="gallery-frame">
                        <a href="/portfolio/" target="_blank" class="frame-quad" >
                            <div class="frame">
                                <div class="frame-arrow">
                                    <div class="frame-arrow-item"></div>
                                </div>
                                <div class="frame-text">
                                    <h3>смотреть портфолио</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                <?endif;?>


                    <?$i++;
            endforeach;?>
            </div>

