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
                <ul style="display: flex; flex-wrap:wrap;">
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

                    switch ($arItem["DISPLAY_TYPE"]):
                    case "A":
                        ?>

                        <?if ($arItem["CODE"] == "PRICE"):
                        ?>

                        <script>
                            $(document).ready(function() {
                                $("#u-slider<?=$arItem["ID"]?>").slider({
                                    min: <?=intval($arItem["VALUES"]["MIN"]["VALUE"])?>,
                                    max: <?=intval($arItem["VALUES"]["MAX"]["VALUE"])?>,
                                    values: [<?= $arItem["VALUES"]["MIN"]["HTML_VALUE"]>0 ? intval($arItem["VALUES"]["MIN"]["HTML_VALUE"]): intval($arItem["VALUES"]["MIN"]["VALUE"])?>,
                                        <?= $arItem["VALUES"]["MAX"]["HTML_VALUE"]>0 ? intval($arItem["VALUES"]["MAX"]["HTML_VALUE"]): intval($arItem["VALUES"]["MAX"]["VALUE"])?>],
                                    range: true,
                                    stop: function (event, ui) {
                                        $('#<?=$arItem["ID"]?>min').val($("#u-slider<?=$arItem["ID"]?>").slider("values", 0));
                                        $('#<?=$arItem["ID"]?>max').val($("#u-slider<?=$arItem["ID"]?>").slider("values", 1));
                                        $('#<?=$arItem["ID"]?>max').change();
                                    },
                                    slide: function (event, ui) {
                                        $('#<?=$arItem["ID"]?>min').val($("#u-slider<?=$arItem["ID"]?>").slider("values", 0));
                                        $('#<?=$arItem["ID"]?>max').val($("#u-slider<?=$arItem["ID"]?>").slider("values", 1));
                                    }
                                });

                                $(document).on('keyup', '#<?=$arItem["ID"]?>max', function () {
                                    var value1 = $('#<?=$arItem["ID"]?>min').val();
                                    var value2 = $('#<?=$arItem["ID"]?>max').val();

                                    if (value2 > 30000) {
                                        value2 = 30000;
                                        jQuery('#<?=$arItem["ID"]?>max').val(30000)
                                    }

                                    if (parseInt(value1) > parseInt(value2)) {
                                        value2 = value1;
                                        $('#<?=$arItem["ID"]?>max').val(value2);
                                    }
                                    $("#u-slider<?=$arItem["ID"]?>").slider("values", 1, value2);
                                });
                                $(document).on('keyup', '#<?=$arItem["ID"]?>min', function () {
                                    var value1 = $('#<?=$arItem["ID"]?>min').val();
                                    var value2 = $('#<?=$arItem["ID"]?>max').val();

                                    if (parseInt(value1) > parseInt(value2)) {
                                        value1 = value2;
                                        $('#<?=$arItem["ID"]?>min').val(value1);
                                    }
                                    $("#u-slider<?=$arItem["ID"]?>").slider("values", 0, value1);
                                });


                                $('#<?=$arItem["ID"]?>min, #<?=$arItem["ID"]?>max').keypress(function (event) {
                                    var key, keyChar;
                                    if (!event) var event = window.event;

                                    if (event.keyCode) key = event.keyCode;
                                    else if (event.which) key = event.which;

                                    if (key == null || key == 0 || key == 8 || key == 13 || key == 9 || key == 46 || key == 37 || key == 39) return true;
                                    keyChar = String.fromCharCode(key);

                                    if (!/\d/.test(keyChar))    return false;

                                });
                            });
                        </script>

                        <li>
                            <ul>
                                <li><h3><?=$arItem["NAME"]?>:</h3></li>
                                <li class="input-text-block">
                                    <div class="input-ruble"><input type="text" id="<?=$arItem["ID"]?>min" name="<?=$arItem["VALUES"]["MIN"]["CONTROL_NAME"]?>" value="<?=($arItem["VALUES"]["MIN"]["HTML_VALUE"]>0)?$arItem["VALUES"]["MIN"]["HTML_VALUE"]:$arItem["VALUES"]["MIN"]["VALUE"]?>" onchange="smartFilter.click(this)"><p class="ruble">&#8381</p></div>
                                    <div style="margin-right: 10px; align-self:center;">-</div>
                                    <div class="input-ruble"><input type="text" id="<?=$arItem["ID"]?>max" name="<?=$arItem["VALUES"]["MAX"]["CONTROL_NAME"]?>" value="<?=($arItem["VALUES"]["MAX"]["HTML_VALUE"]>0)?$arItem["VALUES"]["MAX"]["HTML_VALUE"]:$arItem["VALUES"]["MAX"]["VALUE"]?>" onchange="smartFilter.click(this)"><p class="ruble">&#8381</p></div>
                                </li>
                                <li class="input-range" style="margin: 30px 0; padding: 0 35px 0 7px;">
                                    <div class="u-slider-wrap">
                                        <div id="u-slider<?=$arItem["ID"]?>"></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <?elseif($arItem["CODE"] == "SQUARE"):?>
                        <script>
                            $(document).ready(function() {
                                $("#u-slider<?=$arItem["ID"]?>").slider({
                                    min: <?=intval($arItem["VALUES"]["MIN"]["VALUE"])?>,
                                    max: <?=intval($arItem["VALUES"]["MAX"]["VALUE"])?>,
                                    values: [<?= $arItem["VALUES"]["MIN"]["HTML_VALUE"]>0 ? intval($arItem["VALUES"]["MIN"]["HTML_VALUE"]): intval($arItem["VALUES"]["MIN"]["VALUE"])?>,
                                        <?= $arItem["VALUES"]["MAX"]["HTML_VALUE"]>0 ? intval($arItem["VALUES"]["MAX"]["HTML_VALUE"]): intval($arItem["VALUES"]["MAX"]["VALUE"])?>],
                                    range: true,
                                    stop: function (event, ui) {
                                        $('#<?=$arItem["ID"]?>min').val($("#u-slider<?=$arItem["ID"]?>").slider("values", 0));
                                        $('#<?=$arItem["ID"]?>max').val($("#u-slider<?=$arItem["ID"]?>").slider("values", 1));
                                        $('#<?=$arItem["ID"]?>max').change();
                                    },
                                    slide: function (event, ui) {
                                        $('#<?=$arItem["ID"]?>min').val($("#u-slider<?=$arItem["ID"]?>").slider("values", 0));
                                        $('#<?=$arItem["ID"]?>max').val($("#u-slider<?=$arItem["ID"]?>").slider("values", 1));
                                    }
                                });

                                $(document).on('keyup', '#<?=$arItem["ID"]?>max', function () {
                                    var value1 = $('#<?=$arItem["ID"]?>min').val();
                                    var value2 = $('#<?=$arItem["ID"]?>max').val();

                                    if (value2 > 30000) {
                                        value2 = 30000;
                                        jQuery('#<?=$arItem["ID"]?>max').val(30000)
                                    }

                                    if (parseInt(value1) > parseInt(value2)) {
                                        value2 = value1;
                                        $('#<?=$arItem["ID"]?>max').val(value2);
                                    }
                                    $("#u-slider<?=$arItem["ID"]?>").slider("values", 1, value2);
                                });
                                $(document).on('keyup', '#<?=$arItem["ID"]?>min', function () {
                                    var value1 = $('#<?=$arItem["ID"]?>min').val();
                                    var value2 = $('#<?=$arItem["ID"]?>max').val();

                                    if (parseInt(value1) > parseInt(value2)) {
                                        value1 = value2;
                                        $('#<?=$arItem["ID"]?>min').val(value1);
                                    }
                                    $("#u-slider<?=$arItem["ID"]?>").slider("values", 0, value1);
                                });


                                $('#<?=$arItem["ID"]?>min, #<?=$arItem["ID"]?>max').keypress(function (event) {
                                    var key, keyChar;
                                    if (!event) var event = window.event;

                                    if (event.keyCode) key = event.keyCode;
                                    else if (event.which) key = event.which;

                                    if (key == null || key == 0 || key == 8 || key == 13 || key == 9 || key == 46 || key == 37 || key == 39) return true;
                                    keyChar = String.fromCharCode(key);

                                    if (!/\d/.test(keyChar))    return false;

                                });
                            });
                        </script>
                        <li>
                            <ul>
                                <li><h3><?=$arItem["NAME"]?>:</h3></li>
                                <li class="input-text-block">
                                    <div class="input-ruble"><input type="text" id="<?=$arItem["ID"]?>min" name="<?=$arItem["VALUES"]["MIN"]["CONTROL_NAME"]?>" value="<?=($arItem["VALUES"]["MIN"]["HTML_VALUE"]>0)?$arItem["VALUES"]["MIN"]["HTML_VALUE"]:$arItem["VALUES"]["MIN"]["VALUE"]?>" onchange="smartFilter.click(this)"><p class="ruble">M<sup>2</sup></p></div>
                                    <div style="margin-right: 10px; align-self:center;">-</div>
                                    <div class="input-ruble"><input type="text" id="<?=$arItem["ID"]?>max" name="<?=$arItem["VALUES"]["MAX"]["CONTROL_NAME"]?>" value="<?=($arItem["VALUES"]["MAX"]["HTML_VALUE"]>0)?$arItem["VALUES"]["MAX"]["HTML_VALUE"]:$arItem["VALUES"]["MAX"]["VALUE"]?>" onchange="smartFilter.click(this)"><p class="ruble">M<sup>2</sup></p></div>
                                </li>
                                <li class="input-range" style="margin: 30px 0; padding: 0 35px 0 7px;">
                                    <div class="u-slider-wrap">
                                        <div id="u-slider<?=$arItem["ID"]?>"></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <?endif;?>



                    <?
                    break;
                        default:
                        ?>
                    <li>
                        <ul>
                            <li><h3><?=$arItem["NAME"]?>:</h3></li>
                    <?$i=0;$j=0;
                            foreach($arItem["VALUES"] as $val => $ar):?>


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