<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arFilter = array('ID' => $arParams['GROUPS']);
$rsSect = CIBlockSection::GetList(array('sort' => 'asc'),$arFilter);
while ($arSect = $rsSect->GetNext())
{
    if ($arSect["PICTURE"]>0){
        $arSect['PICTURE_SRC'] = CFile::GetPath($arSect["PICTURE"]);

    }
    $arResult["GROUPS"][$arSect["ID"]] = $arSect;
}

foreach ($arResult['ITEMS'] as $key => $arItem){
    $arResult["GROUPS"][$arItem["IBLOCK_SECTION_ID"]]["ITEMS"][] = $arItem;
}
?>
