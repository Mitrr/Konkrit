<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();



if($arResult["DETAIL_PICTURE"]["ID"]>0){
    $img = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"]["ID"], array('width'=>610, 'height'=>570), BX_RESIZE_IMAGE_EXACT, true);
    $arResult["DETAIL_PICTURE"]["RESIZE_URL"] = $img["src"];

}

?>
