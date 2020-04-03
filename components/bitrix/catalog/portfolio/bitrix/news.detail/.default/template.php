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

<section class="portfolio-detail">
    <div class="container">
        <h2><?=$arResult["NAME"]?></h2>
        <div class="portfolio-detail-header">
            <?if (is_array($arResult["DETAIL_PICTURE"])):?>
            <div class="portfolio-detail-header-left"><img src="<?=$arResult["DETAIL_PICTURE"]["RESIZE_URL"]?>" alt="<?=$arResult["NAME"]?>"></div>
            <?endif;?>
            <div class="portfolio-detail-header-right">
                <div class="right-wrap">
                    <div class="size">
                        <?if ($arResult["PROPERTIES"]["SQUARE"]["VALUE"]!=""):?>
                            <h3>Размер строения - <?=$arResult["PROPERTIES"]["SQUARE"]["VALUE"]?> <sup>M2</sup></h3>
                        <?endif;?>
                        <?if ($arResult["PROPERTIES"]["FLOOR"]["VALUE"]!=""):?>
                            <h3>Этажей - <?=$arResult["PROPERTIES"]["FLOOR"]["VALUE"]?> <sup>M2</sup></h3>
                        <?endif;?>
                        <?if ($arResult["PROPERTIES"]["BEDROOM"]["VALUE"]!=""):?>
                            <h3>Спален - <?=$arResult["PROPERTIES"]["BEDROOM"]["VALUE"]?> <sup>M2</sup></h3>
                        <?endif;?>
                        <?if ($arResult["PROPERTIES"]["BATH"]["VALUE"]!=""):?>
                            <h3>Санузлов - <?=$arResult["PROPERTIES"]["BATH"]["VALUE"]?> <sup>M2</sup></h3>
                        <?endif;?>

                        <?if ($arResult["PROPERTIES"]["ROOM"]["VALUE"]!=""):?>
                        <p>количество комнат - <?=$arResult["PROPERTIES"]["ROOM"]["VALUE"]?></p>
                        <?endif;?>
                    </div>
                    <div class="type">
                        <?if ($arResult["PROPERTIES"]["TITLE1"]["VALUE"]!=""):?>
                        <h3><?=$arResult["PROPERTIES"]["TITLE1"]["VALUE"]?></h3>
                        <?endif;?>
                        <?if ($arResult["PROPERTIES"]["TEXT1"]["~VALUE"]["TEXT"]!=""):?>
                            <p><?=$arResult["PROPERTIES"]["TEXT1"]["~VALUE"]["TEXT"]?></p>
                        <?endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-right">
        <?if ($arResult["PROPERTIES"]["TITLE2"]["VALUE"]!=""):?>
        <h3><?=$arResult["PROPERTIES"]["TITLE2"]["VALUE"]?></h3>
        <?endif;?>
        <div class="sub-describe">
            <?if ($arResult["PROPERTIES"]["TEXT2"]["~VALUE"]["TEXT"]!=""):?>
                <?=$arResult["PROPERTIES"]["TEXT2"]["~VALUE"]["TEXT"]?>
            <?endif;?>
        </div>


    <?if (!empty($arResult["PROPERTIES"]["IMG"]["VALUE"])):?>
    <div class="gallery-grid">
        <div class="grid-container-2">
            <div class="seven">
        <?$i=0;
        foreach ($arResult["PROPERTIES"]["IMG"]["VALUE"] as $k=>$val):?>

            <?if ($i==1 ):?>
                </div><div class="eight">
            <?elseif($i==2):?>
                </div><div class="nine">
            <?elseif($i==4):?>
                </div><div class="ten">
            <?elseif($i==5 ):?>
            </div></div><div class="grid-container-2"><div class="seven">
                <?elseif($i==6):?>
            </div><div class="eight">
                <?elseif($i==7):?>
            </div><div class="nine">
                <?elseif($i==9):?>
            </div><div class="ten">
                <?elseif($i==10):
                break;?>
            <?endif;?>

            <a href="javascript;;" data-fancybox="gal" data-src="<?=$arResult["PROPERTIES"]["IMG"]["BIG"][$k]?>" class="img-s">
                <img src="<?=$arResult["PROPERTIES"]["IMG"]["RESIZE"][$k]?>" alt="">
            </a>
        <?$i++;
        endforeach;?>
             </div>
        </div>
    </div>
    <?endif;?>
        <?if ($arResult["PROPERTIES"]["TEXT3"]["~VALUE"]["TEXT"]!=""):?>
        <div class="sub-describe-2">
            <?if ($arResult["PROPERTIES"]["TITLE3"]["VALUE"]!=""):?>
                <h3><?=$arResult["PROPERTIES"]["TITLE3"]["VALUE"]?></h3>
            <?endif;?>
            <?=$arResult["PROPERTIES"]["TEXT3"]["~VALUE"]["TEXT"]?>
        </div>
        <?endif;?>

        <?if (!empty($arResult["PROPERTIES"]["IMG2"]["VALUE"])):?>
            <div class="gallery-grid">
                <div class="grid-container-2">
                    <div class="seven">
                        <?$i=0;
                        foreach ($arResult["PROPERTIES"]["IMG2"]["VALUE"] as $k=>$val):?>

                        <?if ($i==1 ):?>
                    </div><div class="eight">
                        <?elseif($i==2):?>
                    </div><div class="nine">
                        <?elseif($i==4):?>
                    </div><div class="ten">
                        <?elseif($i==5 ):?>
                    </div></div><div class="grid-container-2"><div class="seven">
                        <?elseif($i==6):?>
                    </div><div class="eight">
                        <?elseif($i==7):?>
                    </div><div class="nine">
                        <?elseif($i==9):?>
                    </div><div class="ten">
                        <?elseif($i==10):
                            break;?>
                        <?endif;?>

                        <a href="javascript;;" data-fancybox="gal" data-src="<?=$arResult["PROPERTIES"]["IMG2"]["BIG"][$k]?>" class="img-s">
                            <img src="<?=$arResult["PROPERTIES"]["IMG2"]["RESIZE"][$k]?>" alt="">
                        </a>
                        <?$i++;
                        endforeach;?>
                    </div>
                </div>
            </div>
        <?endif;?>


        <?if ($arResult["PROPERTIES"]["TEXT4"]["~VALUE"]["TEXT"]!=""):?>
            <div class="sub-describe-2">
                <?if ($arResult["PROPERTIES"]["TITLE4"]["VALUE"]!=""):?>
                    <h3><?=$arResult["PROPERTIES"]["TITLE4"]["VALUE"]?></h3>
                <?endif;?>
                <?=$arResult["PROPERTIES"]["TEXT4"]["~VALUE"]["TEXT"]?>
            </div>
        <?endif;?>

        <?if (!empty($arResult["PROPERTIES"]["IMG3"]["VALUE"])):?>
            <div class="gallery-grid">
                <div class="grid-container-2">
                    <div class="seven">
                        <?$i=0;
                        foreach ($arResult["PROPERTIES"]["IMG3"]["VALUE"] as $k=>$val):?>

                        <?if ($i==1 ):?>
                    </div><div class="eight">
                        <?elseif($i==2):?>
                    </div><div class="nine">
                        <?elseif($i==4):?>
                    </div><div class="ten">
                        <?elseif($i==5 ):?>
                    </div></div><div class="grid-container-2"><div class="seven">
                        <?elseif($i==6):?>
                    </div><div class="eight">
                        <?elseif($i==7):?>
                    </div><div class="nine">
                        <?elseif($i==9):?>
                    </div><div class="ten">
                        <?elseif($i==10):
                            break;?>
                        <?endif;?>

                        <a href="javascript;;" data-fancybox="gal" data-src="<?=$arResult["PROPERTIES"]["IMG3"]["BIG"][$k]?>" class="img-s">
                            <img src="<?=$arResult["PROPERTIES"]["IMG3"]["RESIZE"][$k]?>" alt="">
                        </a>
                        <?$i++;
                        endforeach;?>
                    </div>
                </div>
            </div>
        <?endif;?>

        <?if ($arResult["PROPERTIES"]["TEXT5"]["~VALUE"]["TEXT"]!=""):?>
            <div class="sub-describe-2">
                <?if ($arResult["PROPERTIES"]["TITLE5"]["VALUE"]!=""):?>
                    <h3><?=$arResult["PROPERTIES"]["TITLE5"]["VALUE"]?></h3>
                <?endif;?>
                <?=$arResult["PROPERTIES"]["TEXT5"]["~VALUE"]["TEXT"]?>
            </div>
        <?endif;?>

        <?if (!empty($arResult["PROPERTIES"]["IMG4"]["VALUE"])):?>
            <div class="gallery-grid">
                <div class="grid-container-2">
                    <div class="seven">
                        <?$i=0;
                        foreach ($arResult["PROPERTIES"]["IMG4"]["VALUE"] as $k=>$val):?>

                        <?if ($i==1 ):?>
                    </div><div class="eight">
                        <?elseif($i==2):?>
                    </div><div class="nine">
                        <?elseif($i==4):?>
                    </div><div class="ten">
                        <?elseif($i==5 ):?>
                    </div></div><div class="grid-container-2"><div class="seven">
                        <?elseif($i==6):?>
                    </div><div class="eight">
                        <?elseif($i==7):?>
                    </div><div class="nine">
                        <?elseif($i==9):?>
                    </div><div class="ten">
                        <?elseif($i==10):
                            break;?>
                        <?endif;?>

                        <a href="javascript;;" data-fancybox="gal" data-src="<?=$arResult["PROPERTIES"]["IMG4"]["BIG"][$k]?>" class="img-s">
                            <img src="<?=$arResult["PROPERTIES"]["IMG4"]["RESIZE"][$k]?>" alt="">
                        </a>
                        <?$i++;
                        endforeach;?>
                    </div>
                </div>
            </div>
        <?endif;?>

        <?if ($arResult["PROPERTIES"]["TEXT6"]["~VALUE"]["TEXT"]!=""):?>
            <div class="sub-describe-2">
                <?if ($arResult["PROPERTIES"]["TITLE6"]["VALUE"]!=""):?>
                    <h3><?=$arResult["PROPERTIES"]["TITLE6"]["VALUE"]?></h3>
                <?endif;?>
                <?=$arResult["PROPERTIES"]["TEXT6"]["~VALUE"]["TEXT"]?>
            </div>
        <?endif;?>

        <?if (!empty($arResult["PROPERTIES"]["IMG5"]["VALUE"])):?>
            <div class="gallery-grid">
                <div class="grid-container-2">
                    <div class="seven">
                        <?$i=0;
                        foreach ($arResult["PROPERTIES"]["IMG5"]["VALUE"] as $k=>$val):?>

                        <?if ($i==1 ):?>
                    </div><div class="eight">
                        <?elseif($i==2):?>
                    </div><div class="nine">
                        <?elseif($i==4):?>
                    </div><div class="ten">
                        <?elseif($i==5 ):?>
                    </div></div><div class="grid-container-2"><div class="seven">
                        <?elseif($i==6):?>
                    </div><div class="eight">
                        <?elseif($i==7):?>
                    </div><div class="nine">
                        <?elseif($i==9):?>
                    </div><div class="ten">
                        <?elseif($i==10):
                            break;?>
                        <?endif;?>

                        <a href="javascript;" data-fancybox="gal" data-src="<?=$arResult["PROPERTIES"]["IMG5"]["BIG"][$k]?>" class="img-s">
                            <img src="<?=$arResult["PROPERTIES"]["IMG5"]["RESIZE"][$k]?>" alt="">
                        </a>
                        <?$i++;
                        endforeach;?>
                    </div>
                </div>
            </div>
        <?endif;?>


    </div>
</section>


