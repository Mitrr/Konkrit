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
<header class="header home">
    <div class="container">
        <div class="header-offer-main">
            <div class="header-offer-left">
                <div class="header-offer-text">
                    <?if ($arResult["PROPERTIES"]["TITLE"]["VALUE"]!=""):?>
                    <h1><?=$arResult["PROPERTIES"]["TITLE"]["VALUE"]?></h1>
                    <?endif;?>
                </div>
                <div class="header-offer-img">
                    <?if ($arResult["PROPERTIES"]["TITLE_CAPTION"]["VALUE"]!=""):?>
                    <h3><?=$arResult["PROPERTIES"]["TITLE_CAPTION"]["VALUE"]?></h3>
                    <?endif;?>
                </div>
            </div>
            <div class="header-offer-right">
                <?if ($arResult["PROPERTIES"]["IMG1"]["VALUE"]>0):?>
                <div class="header-offer-img">
                    <img src="<?=$arResult["PROPERTIES"]["IMG1"]["RESIZE_URL"]?>" alt="<?=$arResult["NAME"]?>">
                </div>
                <?endif;?>
                <div class="header-offer-text">
                    <div class="btns">
                        <?if ($arResult["PROPERTIES"]["PROJECTS_LINK"]["VALUE"]!=""):?>
                        <a href="<?=$arResult["PROPERTIES"]["PROJECTS_LINK"]["VALUE"]?>" target="_blank" class="btn btn--wide btn--gray">Смотреть проекты</a>
                        <?endif;?>
                        <a href="javascript:;" data-fancybox="" data-type="ajax" data-src="/ajax/zakaz.php" class="btn btn--wide btn--brown">Сделать заказ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<style>
    .home:before {
        content: '';
        background-image: url(<?=$arResult["PROPERTIES"]["IMG2"]["RESIZE_URL"]?>) !important;
    }
</style>
<section class="slogan-line home-slogan">
    <section class="container">
        <div class="slogan">
            <div class="h1"><?=$arResult["PROPERTIES"]["ADV_CAPTION"]["VALUE"]?></div>
            <div class="doma-arrow-down"></div>
            <div class="slogan-caption"><?=$arResult["PROPERTIES"]["ADV_OFFER"]["VALUE"]?></div>
        </div>
    </section>
</section>

<?if ($arResult["PROPERTIES"]["ADV_TEXT"]["VALUE"]["TEXT"] !=""):?>
<section class="bleu-line home-line">
    <div class="container">
        <?if (!empty($arResult["PROPERTIES"]["ADV_ICONS"]["VALUE"])):?>
        <div class="worktype cols">
            <?foreach ($arResult["PROPERTIES"]["ADV_ICONS"]["VALUE"] as $k=>$val):?>
                <div class="worktype-item">
                    <div class="h1-l"><img src="<?=$arResult["PROPERTIES"]["ADV_ICONS"]["RESIZE"][$k]?>" alt="<?=$arResult["PROPERTIES"]["ADV_ICONS"]["~DESCRIPTION"][$k]?>"></div>
                    <div class="worktype-item--text">
                        <?=$arResult["PROPERTIES"]["ADV_ICONS"]["~DESCRIPTION"][$k]?>
                    </div>
                </div>
            <?endforeach;?>
        </div>
        <?endif;?>
        <div class="worktype-foot">
            <div class="worktype-foot-text">
                <p>
                   <?=$arResult["PROPERTIES"]["ADV_TEXT"]["~VALUE"]["TEXT"]?>
                </p>
            </div>
            <?if ($arResult["PROPERTIES"]["ADV_BLOG"]["VALUE"] !=""):?>
            <div class="worktype-foot-btn">
                <a href="<?=$arResult["PROPERTIES"]["ADV_BLOG"]["VALUE"]?>" target="_blank" class="btn">Читать в блоге</a>
            </div>
            <?endif;?>
        </div>
    </div>
    <div class="divide-line"></div>
    <?if (!empty($arResult["PROPERTIES"]["PROJECTS"]["VALUE"])):?>
    <div class="home-line-describe">
        <div class="container">
            <h2>Проекты кирпичных домов</h2>
            <p>
                <?=$arResult["PROPERTIES"]["PROJECTS_TEXT"]["~VALUE"]["TEXT"]?>
            </p>
        </div>
    </div>
    <?endif;?>
</section>
<?endif;?>

<?if (!empty($arResult["PROPERTIES"]["PROJECTS"]["VALUE"])):?>
    <section class="projects projects-home">
        <div class="container">
            <div class="wrapper-all">

                <?
                global $arfilterPr ;
                $arfilterPr = array("ID" => $arResult["PROPERTIES"]["PROJECTS"]["VALUE"]);
                $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "projects-home",
                    Array(
                        "ACTIVE_DATE_FORMAT" => "j M Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array("DETAIL_PICTURE", ""),
                        "FILTER_NAME" => "arfilterPr",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "17",
                        "IBLOCK_TYPE" => "konkrit",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "6",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array("FLOOR", ""),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                );?>
                <div class="wrap-foot">
                    <div class="wrap-foot-left">
                        <p>В этом разделе можно заказать типовые проекты в готовом виде, а так же с возможностью внесения идивидуальных изменений</p>
                    </div>
                    <div class="wrap-foot-right">
                        <a href="<?=$arResult["PROPERTIES"]["PROJECTS_LINK"]["VALUE"]?>" target="_blank" class="btn btn--black">Смотреть все проекты</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?endif;?>

<section class="slogan-line-3">
    <section class="container">
        <div class="slogan-3">
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/home_slogan5.php"), false);?>
        </div>
    </section>
</section>

<?if (!empty($arResult["PROPERTIES"]["ARTICLES"]["VALUE"])):?>
<section class="blog-useful">
    <div class="container">
        <div class="blog-useful-left">
            <div class="blog-useful-left-wrap">
                <p>Полезное и интересное о строительстве и не только</p>
                <a href="/blog/" class="frame">
                    <div class="frame-arrow">
                        <div class="frame-arrow-item"></div>
                    </div>
                    <div class="frame-text">
                        <h3>читать в блоге</h3>
                    </div>
                </a>
            </div>
        </div>
        <?
        global $arfilterBlog ;
        $arfilterBlog = array("ID" => $arResult["PROPERTIES"]["ARTICLES"]["VALUE"]);
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "blog-home",
            Array(
                "ACTIVE_DATE_FORMAT" => "j M Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("DETAIL_PICTURE", ""),
                "FILTER_NAME" => "arfilterBlog",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "12",
                "IBLOCK_TYPE" => "konkrit",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "3",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("TITLE2", ""),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        );?>
    </div>
</section>
<?endif;?>

<?if (!empty($arResult["PROPERTIES"]["FOLIO"]["VALUE"])):?>
<section class="gallery gallery-home">
    <div class="container"><span>галерея</span>
        <p style="text-align: right; padding: 0 10px 35px 0"><?=$arResult["PROPERTIES"]["FOLIO_TEXT"]["~VALUE"]["TEXT"]?></p>
    </div>
    <section class="gallery-grid">
        <div class="grid-container">
            <?
            global $arfilterFolio ;
            $arfilterFolio = array("ID" => $arResult["PROPERTIES"]["FOLIO"]["VALUE"]);
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "folio-home",
                Array(
                    "ACTIVE_DATE_FORMAT" => "j M Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("DETAIL_PICTURE", ""),
                    "FILTER_NAME" => "arfilterFolio",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "16",
                    "IBLOCK_TYPE" => "konkrit",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "8",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("TYPE", ""),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N",
                    "FOLIO_TITLE" => $arResult["PROPERTIES"]["FOLIO_TITLE"]["~VALUE"],
                    "FOLIO_LINK" => $arResult["PROPERTIES"]["FOLIO_LINK"]["VALUE"],
                )
            );?>
        </div>
    </section>

</section>
<?endif;?>

<section class="blog-news home-news">
    <div class="container-news">
        <div class="news-line"></div>
        <div class="blog-wrap">
            <?
            global $arfilterNews ;
            $arfilterNews = array("PROPERTY_TYPE_VALUE" => "Новости");
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "news-home",
                Array(
                    "ACTIVE_DATE_FORMAT" => "j M Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("", ""),
                    "FILTER_NAME" => "arfilterNews",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "12",
                    "IBLOCK_TYPE" => "konkrit",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "2",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("TITLE2", ""),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            );?>
        </div>
        <div class="other-news">
            <div class="other-news-wrap">
                <a href="/blog/?blogFilter_26_2212294583=Y&set_filter=Подобрать" target="_blank" class="other-news-wrap-iner">
                    <p>Вам интересно?</p>
                    <h3>Читайте другие <br/> статьи в новостях</h3>
                    <div class="right-arrow"></div>
                </a>
            </div>
        </div>
    </div>
</section>


<?if ($arResult["PROPERTIES"]["SEO_TEXT"]["VALUE"]["TEXT"]!=""):?>
    <section class="news-footer-info">
        <div class="container-news">
            <h2><?=$arResult["PROPERTIES"]["SEO_TITLE"]["VALUE"]?></h2>
            <div class="sub-describe">
                <?=$arResult["PROPERTIES"]["SEO_TEXT"]["~VALUE"]["TEXT"]?>
            </div>
        </div>
    </section>
<?endif;?>


<section class="partners home-partners">
    <div style="display: flex; justify-content: space-between; width: 100%; max-width: 1580px;" >

        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "partners",
            Array(
                "ACTIVE_DATE_FORMAT" => "j M Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("", ""),
                "FILTER_NAME" => "arfilterNews",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "14",
                "IBLOCK_TYPE" => "konkrit",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("TITLE2", ""),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        );?>

        <div class="partners-wrapper-right">
            <div class="partners-wrapper-right-text">
                <h2>наши партнеры</h2>
            </div>
        </div>
    </div>
</section>