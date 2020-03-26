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
    foreach($arResult["GROUPS"] as $arGroup):?>
    <?if ($i==3):?></div><div class="service-line"><?endif;?>
        <div class="service-line-block">
            <div><img src="<?=$arGroup["PICTURE_SRC"]?>" alt="<?=$arGroup["NAME"]?>"></div>
            <h2><?=$arGroup["NAME"]?></h2>
            <div>
                <ul>
                    <?foreach($arGroup["ITEMS"] as $arItem):?>
                    <li><a href="<?=$arItem["DETAIL_PAGE_URL"]?>" target="_blank"><?=$arItem["NAME"]?></a></li>
                    <?endforeach;?>
                </ul>
            </div>
        </div>

        <?$i++;
    endforeach;?>

</div>


