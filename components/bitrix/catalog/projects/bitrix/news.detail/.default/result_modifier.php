<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();



if($arResult["DETAIL_PICTURE"]["ID"]>0){
    $img = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"]["ID"], array('width'=>630, 'height'=>422), BX_RESIZE_IMAGE_EXACT, true);
    $arResult["DETAIL_PICTURE"]["RESIZE_URL"] = $img["src"];
}


foreach ($arResult["PROPERTIES"]["VISUAL"]["VALUE"] as $k=>$val){
    $img = CFile::ResizeImageGet($val, array('width'=>270, 'height'=>180), BX_RESIZE_IMAGE_EXACT, true);
    $arResult["PROPERTIES"]["VISUAL"]["RESIZE"][$k] = $img["src"];

    $img = CFile::ResizeImageGet($val, array('width'=>1600, 'height'=>1600), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arResult["PROPERTIES"]["VISUAL"]["BIG"][$k] = $img["src"];
}

foreach ($arResult["PROPERTIES"]["FACADE"]["VALUE"] as $k=>$val){
    $img = CFile::ResizeImageGet($val, array('width'=>270, 'height'=>180), BX_RESIZE_IMAGE_EXACT, true);
    $arResult["PROPERTIES"]["FACADE"]["RESIZE"][$k] = $img["src"];

    $img = CFile::ResizeImageGet($val, array('width'=>1600, 'height'=>1600), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arResult["PROPERTIES"]["FACADE"]["BIG"][$k] = $img["src"];
}

foreach ($arResult["PROPERTIES"]["PLAN"]["VALUE"] as $k=>$val){
    $img = CFile::ResizeImageGet($val, array('width'=>270, 'height'=>180), BX_RESIZE_IMAGE_EXACT, true);
    $arResult["PROPERTIES"]["PLAN"]["RESIZE"][$k] = $img["src"];

    $img = CFile::ResizeImageGet($val, array('width'=>1600, 'height'=>1600), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $arResult["PROPERTIES"]["PLAN"]["BIG"][$k] = $img["src"];
}


if($arResult["PROPERTIES"]["PORTFOLIO"]["VALUE"]>0){

    $arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM","IBLOCK_ID");
    $arFilter = Array("ID"=>$arResult["PROPERTIES"]["PORTFOLIO"]["VALUE"]);
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    if($ob = $res->GetNextElement())
    {
        $arFields = $ob->GetFields();
        $arFields["GAL"] = $ob->GetProperty("IMG");

        foreach ($arFields["GAL"]["VALUE"] as $k=>$val){

            $img = CFile::ResizeImageGet($val, array('width'=>800, 'height'=>800), BX_RESIZE_IMAGE_EXACT, true);
            $arResult["GAL"][$k]["RESIZE"] = $img["src"];

            $img = CFile::ResizeImageGet($val, array('width'=>1600, 'height'=>1600), BX_RESIZE_IMAGE_PROPORTIONAL, true);
            $arResult["GAL"][$k]["BIG"] = $img["src"];

        }
    }

}


?>
