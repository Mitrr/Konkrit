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

<section class="blog-detail">
    <div class="container"><div class="gray-field"></div></div>
    <div class="blog-content">
        <div class="container">
            <div class="blog-content-header">
                <div class="blog-content-header-wrap">
                    <div class="blog-content-header-wrap-left">
                        <?if (is_array($arResult["DETAIL_PICTURE"])):?>
                        <div class="blog-img">
                            <img src="<?=$arResult["DETAIL_PICTURE"]["RESIZE_URL"]?>" alt="<?=$arResult["NAME"]?>">
                        </div>
                        <?endif;?>
                        <div class="blog-like">
                            <?if ($arResult["PROPERTIES"]["UNDERPHOTO"]["VALUE"]!=""):?>
                            <div class="blog-like-text">
                                <p>
                                    <?=$arResult["PROPERTIES"]["UNDERPHOTO"]["VALUE"]?>
                                </p>
                            </div>
                            <?endif;?>
                            <div class="blog-like-frame">
                            <?if ($arParams["IBLOCK_ID"] != "13"):?>
                                <div class="blog-like-frame-container">
                                    <div class="head">
                                        <h2>вам понравилась статья?</h2>
                                    </div>
                                    <div class="middle">
                                        <a href="javascript:;" data-type="plus" data-id="<?=$arResult["ID"]?>" class="icon-thumbs-up-1 blog-like-handler"></a>
                                        <a href="javascript:;" data-type="minus" data-id="<?=$arResult["ID"]?>" class="icon-thumbs-down-1 blog-like-handler"></a>
                                    </div>
                                    <div class="foot-btn">
                                        <a href="/blog/" class="btn btn--black btn--wide">Все статьи</a>
                                    </div>
                                </div>
                            <?endif;?>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content-header-wrap-right">
                        <h2><?=$arResult["NAME"]?></h2>
                        <?if ($arResult["PROPERTIES"]["TITLE2"]["VALUE"]!=""):?>
                        <p class="subhead"><?=$arResult["PROPERTIES"]["TITLE2"]["VALUE"]?></p>
                        <?endif;?>
                        <span><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
                        <?=$arResult["DETAIL_TEXT"]?>
                    </div>
                </div>
            </div>
            <?if ($arParams["IBLOCK_ID"] != "13"):?>
            <div class="blog-content-main">
                <div class="container">
                    <div class="projects-header">
                        <p>Возможно, вам также будут интересны эти статьи</p><div class="projects-header-arrow"></div>
                    </div>
                </div>

                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "blog-other",
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
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "12",
                        "IBLOCK_TYPE" => "konkrit",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "4",
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
                        "SORT_BY1" => "rand",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                );?>

            </div>
            <?endif;?>
        </div>
    </div>
</section>
