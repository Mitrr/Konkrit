<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


foreach ($arResult['ITEMS'] as $key => $arItem){
    if($arItem["DETAIL_PICTURE"]["ID"]>0){
        $img = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], array('width'=>630, 'height'=>250), BX_RESIZE_IMAGE_EXACT, true);
        $arResult['ITEMS'][$key]["DETAIL_PICTURE"]["RESIZE_URL"] = $img["src"];

    }
}
?>
