<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

		<form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get" class="smartfilter">
			<?foreach($arResult["HIDDEN"] as $arItem):?>
			<input type="hidden" name="<?echo $arItem["CONTROL_NAME"]?>" id="<?echo $arItem["CONTROL_ID"]?>" value="<?echo $arItem["HTML_VALUE"]?>" />
			<?endforeach;?>

            <div class="filter-wrap-content">
                <ul style="display: flex;">
                    <?foreach($arResult["ITEMS"] as $key=>$arItem):
                        if(
                            empty($arItem["VALUES"])
                            || isset($arItem["PRICE"])
                        )
                            continue;

                        if (
                            $arItem["DISPLAY_TYPE"] == "A"
                            && (
                                $arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0
                            )
                        )
                            continue;
                        ?>

                    <?
                    $arCur = current($arItem["VALUES"]);
                    $separate = round(count($arItem["VALUES"])/5);
                    switch ($arItem["DISPLAY_TYPE"]):
                    case "B":
                        ?>
                    <?
                    break;
                        default:
                        ?>
                    <li>
                        <ul>
                    <?$i=0;$j=0;
                            foreach($arItem["VALUES"] as $val => $ar):?>

                                <?if ($i%$separate == 0  && $i!=0):$j++;?></ul></li><?if ($j==2 || $j==4):?><li><ul class="ul-blue-ring"><li><div></div></li></ul></li><?endif;?><li><ul><?endif;?>

                                <li class="checkbox-blue">
                                    <label data-role="label_<?=$ar["CONTROL_ID"]?>" class="checkbox-button <?=  $ar["DISABLED"] ? 'disabled': '' ?>" for="<? echo $ar["CONTROL_ID"] ?>">
                                        <input type="checkbox" class="checkbox-button__input" id="<? echo $ar["CONTROL_ID"] ?>" value="<? echo $ar["HTML_VALUE"] ?>" name="<? echo $ar["CONTROL_NAME"] ?>"  <? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
                                               onclick="smartFilter.click(this)">
                                        <span class="checkbox-button__control"></span>
                                        <?=$ar["VALUE"];?>
                                    </label>
                                </li>
                                
                            <?$i++;
                            endforeach;?>
                        </ul>
                    </li>
                    <?endswitch;
                    endforeach;?>
                </ul>
            </div>


            <div class="filter-wrap-footer">
                <div class="filter-wrap-footer-btns">
                    <input
                            class="btn btn--black btn--wide"
                            type="submit"
                            id="set_filter"
                            name="set_filter"
                            value="Подобрать"
                    />
                    <input
                            class="btn btn--white btn--wide"
                            type="submit"
                            id="del_filter"
                            name="del_filter"
                            value="Сбросить фильтр"
                    />
                </div>
                <div class="choice-proj" id="modef" style="display: none">
                    <p><?echo GetMessage("CT_BCSF_FILTER_COUNT", array("#ELEMENT_COUNT#" => '<span id="modef_num">'.intval($arResult["ELEMENT_COUNT"]).'</span>'));?></p>
                </div>
            </div>




		</form>

<script type="text/javascript">
	var smartFilter = new JCSmartFilter('<?echo CUtil::JSEscape($arResult["FORM_ACTION"])?>', '<?=CUtil::JSEscape($arParams["FILTER_VIEW_MODE"])?>', <?=CUtil::PhpToJSObject($arResult["JS_FILTER_PARAMS"])?>);
</script>