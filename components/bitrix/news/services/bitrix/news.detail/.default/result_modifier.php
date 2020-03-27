<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();



if($arResult["PROPERTIES"]["IMG1"]["VALUE"]>0){
    $img = CFile::ResizeImageGet($arResult["PROPERTIES"]["IMG1"]["VALUE"], array('width'=>630, 'height'=>484), BX_RESIZE_IMAGE_EXACT, true);
    $arResult["PROPERTIES"]["IMG1"]["RESIZE_URL"] = $img["src"];
}

if($arResult["PROPERTIES"]["IMG2"]["VALUE"]>0){
    $img = CFile::ResizeImageGet($arResult["PROPERTIES"]["IMG2"]["VALUE"], array('width'=>1920, 'height'=>600), BX_RESIZE_IMAGE_EXACT, true);
    $arResult["PROPERTIES"]["IMG2"]["RESIZE_URL"] = $img["src"];
}



foreach ($arResult["PROPERTIES"]["ADV_ICONS"]["VALUE"] as $k=>$val){
    $img = CFile::ResizeImageGet($val, array('width'=>84, 'height'=>84), BX_RESIZE_IMAGE_EXACT, true);
    $arResult["PROPERTIES"]["ADV_ICONS"]["RESIZE"][$k] = $img["src"];

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
