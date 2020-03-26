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
<section class="gallery-grid-wrapper">
    <div class="gallery-grid">
        <div class="gallery-header">
            <div class="container">
                <p>В галерее представлены все реализованные проекты, типовые разработки, фотографии с места строительства и другое.</p>
            </div>
        </div>
        <div class="grid-container">
            <div class="first">
<?$i=0;
foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
            <?if ($i==2):?>
            </div><div class="second">
            <?elseif($i==3):?>
            </div><div class="third">
            <?elseif($i==5):?>
            </div><div class="five">
            <?elseif($i==6):?>
            </div><div class="six">
            <?elseif($i==8):?>
            </div><div class="four">
            <?elseif($i==9):?>
            </div><div class="gallery-card">
            <?elseif($i==10):?>
            </div></div>
            <div class="grid-container-2">
                    <div class="seven">
            <?elseif($i==11):?>
            </div><div class="eight">
            <?elseif($i==12):?>
            </div><div class="nine">
            <?elseif($i==13):?>
            </div><div class="ten">
            <?endif;?>
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" target="_blank" class="img-s">
                    <img src="<?=$arItem["DETAIL_PICTURE"]["RESIZE_URL"]?>" alt="<?=$arItem["NAME"]?>">
                </a>


<?$i++;
endforeach;?>
            </div>
        </div>
        <div class="container">
            <div class="pagination">
                <?=$arResult["NAV_STRING"]?>
            </div>
        </div>
    </div>
</section>
