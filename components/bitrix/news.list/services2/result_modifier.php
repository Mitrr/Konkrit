<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult['ITEMS'] as $key => $arItem){
    if($arItem["PROPERTIES"]["ICON"]["VALUE"]>0){
        $arResult['ITEMS'][$key]["PROPERTIES"]["ICON"]["PATH"] = CFile::GetPath($arItem["PROPERTIES"]["ICON"]["VALUE"]);
    }
}
?>
