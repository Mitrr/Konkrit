<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult['ITEMS'] as $key => $arItem){
    if($arItem["PREVIEW_PICTURE"]["ID"]>0){
        $img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>580, 'height'=>560), BX_RESIZE_IMAGE_EXACT, true);
        $arResult['ITEMS'][$key]["PREVIEW_PICTURE"]["RESIZE_URL"] = $img["src"];
    }
}
?>
