<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if (!empty($arResult)):?>
    <ul class="cols cols--acenter">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
    <li><a href="<?=$arItem["LINK"]?>" class="page-link"><?=$arItem["TEXT"]?></a></li>

	
<?endforeach?>

</ul>
<?endif?>