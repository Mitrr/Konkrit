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
<section class="tech">
    <div class="container">
        <h2 class="h2 withline" id="anchor-tech">Наша техника</h2>
        <div class="lined cols cols--acenter">
            <div class="line"></div>
            <h2 class="h2 sand-color">Собственный парк</h2>
        </div>
        <div class="cols tech-container cols--center">
            <?$i=0;
            foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <?if ($i!=0 && $i%2==0):?></div><div class="cols tech-container cols--center"><?endif;?>

            <div class="tech-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="tech-item--img">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["RESIZE_URL"]?>" alt="<?=$arItem["NAME"]?>">
                </div>
                <div class="tech-item--title">УСТАНОВКА <span class="sand-color"><?=$arItem["NAME"]?></span></div>
                <div class="tech-item--params">
                    <?=$arItem["PREVIEW_TEXT"]?>
                </div>
                <div class="tech-item--video">
                    <a href="javascript:;" data-fancybox="" data-type="iframe" data-src="https://www.youtube.com/embed/<?=$arItem["PROPERTIES"]["VIDEO"]["VALUE"]?>?autoplay=1">
                        <span>Смотреть видео</span>
                        <div class="icon icon-play-circled"></div>
                    </a>
                </div>
            </div>

            <?$i++;
            endforeach;?>
        </div>
    </div>
</section>