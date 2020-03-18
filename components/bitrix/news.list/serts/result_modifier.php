<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult['ITEMS'] as $key => $arItem){
    if($arItem["PREVIEW_PICTURE"]["ID"]>0){
        $img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>266, 'height'=>380), BX_RESIZE_IMAGE_EXACT, true);
        $arResult['ITEMS'][$key]["PREVIEW_PICTURE"]["RESIZE_URL"] = $img["src"];
        $img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>1000, 'height'=>1000), BX_RESIZE_IMAGE_PROPORTIONAL, true);
        $arResult['ITEMS'][$key]["PREVIEW_PICTURE"]["RESIZE_URL_BIG"] = $img["src"];
    }
}
?>
