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

<section class="portfolio-detail project-home">
    <div class="container">
        <h2> <span style="color:#82bac3;">Проект</span> <?=$arResult["NAME"]?></h2>
        <?if ($arResult["PROPERTIES"]["VARIANTS"]["VALUE"]!=""):?>
        <p><?=$arResult["PROPERTIES"]["VARIANTS"]["VALUE"]?></p>
        <?endif;?>
        <div class="portfolio-detail-header">
            <?if (is_array($arResult["DETAIL_PICTURE"])):?>
            <div class="portfolio-detail-header-left">
                <div class="portfolio-detail-header-left-img">
                    <img src="<?=$arResult["DETAIL_PICTURE"]["RESIZE_URL"]?>" alt="<?=$arResult["NAME"]?>">
                </div>
                <div class="describe-home">
                    <div class="describe-home-up">
                        <div class="describe-home-up-left">
                            <?if ($arResult["PROPERTIES"]["PRICE"]["VALUE"]!=""):?>
                            <h2 class="sand-color">От <?=number_format($arResult["PROPERTIES"]["PRICE"]["VALUE"],0,"."," ")?><sup>*</sup></h2><div class="rub"></div>
                            <p>Примерная стоимость строительства дома в указанной комплектации</p>
                            <?endif;?>
                        </div>
                        <div class="describe-home-up-right">
                            <?if ($arResult["PROPERTIES"]["SQUARE"]["VALUE"]!=""):?>
                            <h2><span class="sand-color"><?=$arResult["PROPERTIES"]["SQUARE"]["VALUE"]?> m<sup>2</sup></span>
                                <?if ($arResult["PROPERTIES"]["FLOOR"]["VALUE"]!=""):?>
                                <p><?=$arResult["PROPERTIES"]["FLOOR"]["VALUE"]?> <?=($arResult["PROPERTIES"]["FLOOR"]["VALUE"]=="1")?"этаж":"этажа"?> </p>
                                <?endif;?>
                            </h2>
                            <?endif;?>
                        </div>
                    </div>
                    <div class="describe-home-down">
                        <div class="describe-home-down-left">
                            <?if ($arResult["PROPERTIES"]["LENGTH"]["VALUE"]!="" && $arResult["PROPERTIES"]["WIDTH"]["VALUE"]!=""):?>
                            <h2>размер строения - <?=$arResult["PROPERTIES"]["LENGTH"]["VALUE"]?> <sup>M</sup> / <?=$arResult["PROPERTIES"]["WIDTH"]["VALUE"]?> <sup>M</sup></h2>
                            <?endif;?>
                            <?if ($arResult["PROPERTIES"]["ROOM"]["VALUE"]!=""):?>
                            <p>количество комнат - <?=$arResult["PROPERTIES"]["ROOM"]["VALUE"]?></p>
                            <?endif;?>
                        </div>
                        <div class="describe-home-down-right">
                            <?if ($arResult["PROPERTIES"]["BEDROOM"]["VALUE"]!=""):?>
                            <p><span class="icon-svg3"></span><?=$arResult["PROPERTIES"]["BEDROOM"]["VALUE"]?></p>
                            <?endif;?>
                            <?if ($arResult["PROPERTIES"]["BATH"]["VALUE"]!=""):?>
                            <p><span class="icon-svg2"></span><?=$arResult["PROPERTIES"]["BATH"]["VALUE"]?></p>
                            <?endif;?>

                        </div>
                    </div>
                    <div class="describe-btn">
                        <a href="javascript:;" data-fancybox="" data-type="ajax" data-src="/ajax/zakaz.php" class="btn">Заказать расчет</a>
                    </div>
                </div>
            </div>
            <?endif;?>
            <div class="portfolio-detail-header-right">
                <div class="right-wrap">
                    <?if (!empty($arResult["PROPERTIES"]["VISUAL"]["VALUE"])):?>
                    <div class="right-wrap-item">
                        <p>3D Визуализация:</p>
                        <div style="display: flex;" class="swiper-slider swiper-slider--review"
                             data-slider-slides-per-view="4"
                             data-slider-centered-slides="false"
                             data-slider-slides-per-group="1"
                             data-slider-effect="slide"
                             data-slider-loop="true"
                             data-slider-autoplay="false"
                             data-slider-speed="600"
                             data-slider-grabcursor="false"
                             data-slider-space-between="0">
                            <div class="swiper-right-angle">
                                <div class="swiper-container container ">
                                    <div class="swiper-wrapper">
                                        <?foreach ($arResult["PROPERTIES"]["VISUAL"]["VALUE"] as $k=>$val):?>
                                            <div class="swiper-slide">
                                                <div class="partners-wrapper-left-img ">
                                                    <a href="javascript:;" data-fancybox="3d" data-src="<?=$arResult["PROPERTIES"]["VISUAL"]["BIG"][$k]?>">
                                                    <img src="<?=$arResult["PROPERTIES"]["VISUAL"]["RESIZE"][$k]?>" alt="<?=$arResult["NAME"]?>">
                                                    </a>
                                                </div>
                                            </div>
                                        <?endforeach;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?endif;?>
                    <?if (!empty($arResult["PROPERTIES"]["FACADE"]["VALUE"])):?>
                        <div class="right-wrap-item">
                            <p>Фасады:</p>
                            <div style="display: flex;" class="swiper-slider swiper-slider--review"
                                 data-slider-slides-per-view="4"
                                 data-slider-centered-slides="false"
                                 data-slider-slides-per-group="1"
                                 data-slider-effect="slide"
                                 data-slider-loop="true"
                                 data-slider-autoplay="false"
                                 data-slider-speed="600"
                                 data-slider-grabcursor="false"
                                 data-slider-space-between="0">
                                <div class="swiper-right-angle">
                                    <div class="swiper-container container ">
                                        <div class="swiper-wrapper">
                                            <?foreach ($arResult["PROPERTIES"]["FACADE"]["VALUE"] as $k=>$val):?>
                                                <div class="swiper-slide">
                                                    <div class="partners-wrapper-left-img ">
                                                        <a href="javascript:;" data-fancybox="facade" data-src="<?=$arResult["PROPERTIES"]["FACADE"]["BIG"][$k]?>">
                                                            <img src="<?=$arResult["PROPERTIES"]["FACADE"]["RESIZE"][$k]?>" alt="<?=$arResult["NAME"]?>">
                                                        </a>
                                                    </div>
                                                </div>
                                            <?endforeach;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?endif;?>
                    <?if (!empty($arResult["PROPERTIES"]["PLAN"]["VALUE"])):?>
                        <div class="right-wrap-item">
                            <p>Планы помещения:</p>
                            <div style="display: flex;" class="swiper-slider swiper-slider--review"
                                 data-slider-slides-per-view="4"
                                 data-slider-centered-slides="false"
                                 data-slider-slides-per-group="1"
                                 data-slider-effect="slide"
                                 data-slider-loop="true"
                                 data-slider-autoplay="false"
                                 data-slider-speed="600"
                                 data-slider-grabcursor="false"
                                 data-slider-space-between="0">
                                <div class="swiper-right-angle">
                                    <div class="swiper-container container ">
                                        <div class="swiper-wrapper">
                                            <?foreach ($arResult["PROPERTIES"]["PLAN"]["VALUE"] as $k=>$val):?>
                                                <div class="swiper-slide">
                                                    <div class="partners-wrapper-left-img ">
                                                        <a href="javascript:;" data-fancybox="plan" data-src="<?=$arResult["PROPERTIES"]["PLAN"]["BIG"][$k]?>">
                                                            <img src="<?=$arResult["PROPERTIES"]["PLAN"]["RESIZE"][$k]?>" alt="<?=$arResult["NAME"]?>">
                                                        </a>
                                                    </div>
                                                </div>
                                            <?endforeach;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?endif;?>
                </div>
                <div class="right-wrap">
                    <?=$arResult["DETAIL_TEXT"]?>
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

            <?if ($i==1):?>
                </div><div class="eight">
            <?elseif($i==2):?>
                </div><div class="nine">
            <?elseif($i==4):?>
                </div><div class="ten">
            <?elseif($i==5):?>
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

        <div class="sub-describe-2">
            <?if ($arResult["PROPERTIES"]["TITLE3"]["VALUE"]!=""):?>
                <h3><?=$arResult["PROPERTIES"]["TITLE3"]["VALUE"]?></h3>
            <?endif;?>
            <?=$arResult["PROPERTIES"]["TEXT3"]["~VALUE"]["TEXT"]?>
        </div>


    </div>
</section>


<section class="projects-tabs">
    <div class="container">
        <div class="describe-container">
            <h2 class="sand-color">дом под отделку</h2>
            <h2>комплектация в указанной стоимости</h2>
            <p>Стильный уютный дом с мансардным этажом, балконом и открытой верандой для круглогодичного комфортного проживания всей семьей.
                На первом этаже просторная гостиная, с кухней-столовой, две спальни, гардеробная, санузел и входная группа.
                На втором этаже холл, из которого проходим в три спальни и дополнительный санузел.
                Котельная предусмотрена в цокольном этаже.
            </p>
        </div>
        <div class="tabs-container">
            <ul class="tabs-list">
                <li class="tab active">
                    <h3>фундамент</h3>
                    <div class="trin"></div>
                </li>
                <li class="tab">
                    <h3>стеновой комплект</h3>
                    <div class="trin"></div>
                </li>
                <li class="tab">
                    <h3>кровля</h3>
                    <div class="trin"></div>
                </li>
                <li class="tab">
                    <h3>окна</h3>
                    <div class="trin"></div>
                </li>
                <li class="tab">
                    <h3>отделка</h3>
                    <div class="trin"></div>
                </li>
                <li class="tab">
                    <h3>доставка</h3>
                    <div class="trin"></div>
                </li>
            </ul>
        </div>

    </div>
</section>

<section class="projects-tabs-content">
    <div class="container tab-cont active">
        <ul>
            <li>1</li>
            <li>Укладка рулонной гидроизоляции «Стеклоизол» на ростверк.</li>
            <li>Подкладочная доска из  лиственницы.</li>
            <li>Брус клееный профилированный сечением 185(h)х202мм/162мм, клеевая система Akzo Nobel (Швеция).</li>
            <li>Антисептирование на производстве составом REMMERS.</li>
            <li>Обработка торцов от растрескивания составом TEKNOS.</li>
            <li>Сверление отверстий для скрытой установки электрики(Укладка ПВХ трубок).</li>
            <li>Профильная система по Вашему выбору.</li>
            <li>Межвенцовый уплотнитель.</li>
            <li>Балки перекрытия из доски 50х200мм экспортного качества или клееные конструкционные балки, обработанные огнебиозащитным составом.</li>
        </ul>
        <div class="sub-tabs">
            <p>
                В стоимость проекта также входят транспортные и накладные расходы, организация проживания рабочих,
                монтаж, все расходы и сопутствующие материалы, инжинерный и технический надзор специалистами компании.
            </p>
        </div>
    </div>
    <div class="container tab-cont">
        <ul>
            <li>2</li>
            <li>Укладка рулонной гидроизоляции «Стеклоизол» на ростверк.</li>
            <li>Подкладочная доска из  лиственницы.</li>
            <li>Брус клееный профилированный сечением 185(h)х202мм/162мм, клеевая система Akzo Nobel (Швеция).</li>
            <li>Антисептирование на производстве составом REMMERS.</li>
            <li>Обработка торцов от растрескивания составом TEKNOS.</li>
            <li>Сверление отверстий для скрытой установки электрики(Укладка ПВХ трубок).</li>
            <li>Профильная система по Вашему выбору.</li>
            <li>Межвенцовый уплотнитель.</li>
            <li>Балки перекрытия из доски 50х200мм экспортного качества или клееные конструкционные балки, обработанные огнебиозащитным составом.</li>
        </ul>
        <div class="sub-tabs">
            <p>
                В стоимость проекта также входят транспортные и накладные расходы, организация проживания рабочих,
                монтаж, все расходы и сопутствующие материалы, инжинерный и технический надзор специалистами компании.
            </p>
        </div>
    </div>
    <div class="container tab-cont">
        <ul>
            <li>3</li>
            <li>Укладка рулонной гидроизоляции «Стеклоизол» на ростверк.</li>
            <li>Подкладочная доска из  лиственницы.</li>
            <li>Брус клееный профилированный сечением 185(h)х202мм/162мм, клеевая система Akzo Nobel (Швеция).</li>
            <li>Антисептирование на производстве составом REMMERS.</li>
            <li>Обработка торцов от растрескивания составом TEKNOS.</li>
            <li>Сверление отверстий для скрытой установки электрики(Укладка ПВХ трубок).</li>
            <li>Профильная система по Вашему выбору.</li>
            <li>Межвенцовый уплотнитель.</li>
            <li>Балки перекрытия из доски 50х200мм экспортного качества или клееные конструкционные балки, обработанные огнебиозащитным составом.</li>
        </ul>
        <div class="sub-tabs">
            <p>
                В стоимость проекта также входят транспортные и накладные расходы, организация проживания рабочих,
                монтаж, все расходы и сопутствующие материалы, инжинерный и технический надзор специалистами компании.
            </p>
        </div>
    </div>
    <div class="container tab-cont">
        <ul>
            <li>2</li>
            <li>Укладка рулонной гидроизоляции «Стеклоизол» на ростверк.</li>
            <li>Подкладочная доска из  лиственницы.</li>
            <li>Брус клееный профилированный сечением 185(h)х202мм/162мм, клеевая система Akzo Nobel (Швеция).</li>
            <li>Антисептирование на производстве составом REMMERS.</li>
            <li>Обработка торцов от растрескивания составом TEKNOS.</li>
            <li>Сверление отверстий для скрытой установки электрики(Укладка ПВХ трубок).</li>
            <li>Профильная система по Вашему выбору.</li>
            <li>Межвенцовый уплотнитель.</li>
            <li>Балки перекрытия из доски 50х200мм экспортного качества или клееные конструкционные балки, обработанные огнебиозащитным составом.</li>
        </ul>
        <div class="sub-tabs">
            <p>
                В стоимость проекта также входят транспортные и накладные расходы, организация проживания рабочих,
                монтаж, все расходы и сопутствующие материалы, инжинерный и технический надзор специалистами компании.
            </p>
        </div>
    </div>
    <div class="container tab-cont">
        <ul>
            <li>2</li>
            <li>Укладка рулонной гидроизоляции «Стеклоизол» на ростверк.</li>
            <li>Подкладочная доска из  лиственницы.</li>
            <li>Брус клееный профилированный сечением 185(h)х202мм/162мм, клеевая система Akzo Nobel (Швеция).</li>
            <li>Антисептирование на производстве составом REMMERS.</li>
            <li>Обработка торцов от растрескивания составом TEKNOS.</li>
            <li>Сверление отверстий для скрытой установки электрики(Укладка ПВХ трубок).</li>
            <li>Профильная система по Вашему выбору.</li>
            <li>Межвенцовый уплотнитель.</li>
            <li>Балки перекрытия из доски 50х200мм экспортного качества или клееные конструкционные балки, обработанные огнебиозащитным составом.</li>
        </ul>
        <div class="sub-tabs">
            <p>
                В стоимость проекта также входят транспортные и накладные расходы, организация проживания рабочих,
                монтаж, все расходы и сопутствующие материалы, инжинерный и технический надзор специалистами компании.
            </p>
        </div>
    </div>
    <div class="container tab-cont">
        <ul>
            <li>6</li>
            <li>Укладка рулонной гидроизоляции «Стеклоизол» на ростверк.</li>
            <li>Подкладочная доска из  лиственницы.</li>
            <li>Брус клееный профилированный сечением 185(h)х202мм/162мм, клеевая система Akzo Nobel (Швеция).</li>
            <li>Антисептирование на производстве составом REMMERS.</li>
            <li>Обработка торцов от растрескивания составом TEKNOS.</li>
            <li>Сверление отверстий для скрытой установки электрики(Укладка ПВХ трубок).</li>
            <li>Профильная система по Вашему выбору.</li>
            <li>Межвенцовый уплотнитель.</li>
            <li>Балки перекрытия из доски 50х200мм экспортного качества или клееные конструкционные балки, обработанные огнебиозащитным составом.</li>
        </ul>
        <div class="sub-tabs">
            <p>
                В стоимость проекта также входят транспортные и накладные расходы, организация проживания рабочих,
                монтаж, все расходы и сопутствующие материалы, инжинерный и технический надзор специалистами компании.
            </p>
        </div>
    </div>
</section>

<?if (!empty($arResult["GAL"])):?>
    <div class="portfolio-detail">
        <div class="container-right" style="margin: auto">
<section class="gallery gallery-project-home">
    <div class="container">
        <p>Фотографии проекта в ходе его реализации</p>
        <span>галерея <span class="icon-down-open-big"></span></span>
    </div>
    <div class="gallery-grid">
        <div class="grid-container-2">
            <div class="seven">
                <?$i=0;
                foreach ($arResult["GAL"] as $val):?>

                <?if ($i==1):?>
            </div><div class="eight">
                <?elseif($i==2):?>
            </div><div class="nine">
                <?elseif($i==4):?>
            </div><div class="ten">
                <?elseif($i==5):?>
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

                <a href="javascript;;" data-fancybox="gal" data-src="<?=$val["BIG"]?>" class="img-s">
                    <img src="<?=$val["RESIZE"]?>" alt="">
                </a>
                <?$i++;
                endforeach;?>
            </div>
        </div>
    </div>
</section>
        </div>
    </div>
<?endif;?>

