<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();



if($arResult["DETAIL_PICTURE"]["ID"]>0){
    $img = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"]["ID"], array('width'=>630, 'height'=>422), BX_RESIZE_IMAGE_EXACT, true);
    $arResult["DETAIL_PICTURE"]["RESIZE_URL"] = $img["src"];

}


foreach ($arResult["PROPERTIES"]["IMG"]["VALUE"] as $k=>$val){
    $img = CFile::ResizeImageGet($val, array('width'=>800, 'height'=>800), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arResult["PROPERTIES"]["IMG"]["RESIZE"][$k] = $img["src"];

    $img = CFile::ResizeImageGet($val, array('width'=>1600, 'height'=>1600), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arResult["PROPERTIES"]["IMG"]["BIG"][$k] = $img["src"];

}

foreach ($arResult["PROPERTIES"]["IMG2"]["VALUE"] as $k=>$val){
    $img = CFile::ResizeImageGet($val, array('width'=>800, 'height'=>800), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arResult["PROPERTIES"]["IMG2"]["RESIZE"][$k] = $img["src"];

    $img = CFile::ResizeImageGet($val, array('width'=>1600, 'height'=>1600), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arResult["PROPERTIES"]["IMG2"]["BIG"][$k] = $img["src"];

}

foreach ($arResult["PROPERTIES"]["IMG3"]["VALUE"] as $k=>$val){
    $img = CFile::ResizeImageGet($val, array('width'=>800, 'height'=>800), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arResult["PROPERTIES"]["IMG3"]["RESIZE"][$k] = $img["src"];

    $img = CFile::ResizeImageGet($val, array('width'=>1600, 'height'=>1600), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arResult["PROPERTIES"]["IMG3"]["BIG"][$k] = $img["src"];

}

foreach ($arResult["PROPERTIES"]["IMG4"]["VALUE"] as $k=>$val){
    $img = CFile::ResizeImageGet($val, array('width'=>800, 'height'=>800), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arResult["PROPERTIES"]["IMG4"]["RESIZE"][$k] = $img["src"];

    $img = CFile::ResizeImageGet($val, array('width'=>1600, 'height'=>1600), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arResult["PROPERTIES"]["IMG4"]["BIG"][$k] = $img["src"];

}

foreach ($arResult["PROPERTIES"]["IMG5"]["VALUE"] as $k=>$val){
    $img = CFile::ResizeImageGet($val, array('width'=>800, 'height'=>800), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arResult["PROPERTIES"]["IMG5"]["RESIZE"][$k] = $img["src"];

    $img = CFile::ResizeImageGet($val, array('width'=>1600, 'height'=>1600), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arResult["PROPERTIES"]["IMG5"]["BIG"][$k] = $img["src"];

}
?>
