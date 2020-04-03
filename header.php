<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use
    Bitrix\Main\Application,
    Bitrix\Main\Loader,
    Bitrix\Main,
    Bitrix\Main\Web\Cookie,
    \Bitrix\Main\Localization\Loc,
    Bitrix\Main\Page\Asset as Asset;

$curpage = $APPLICATION->GetCurPage();

Loc::loadLanguageFile(__FILE__);
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?=LANGUAGE_ID?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="<?=LANGUAGE_ID?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="<?=LANGUAGE_ID?>"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lte-ie9" lang="<?=LANGUAGE_ID?>"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="<?=LANGUAGE_ID?>"> <!--<![endif]-->

<head>
    <meta charset="utf-8" />

    <?/*<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">*/?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <?=$APPLICATION->ShowHead();?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="yandex-verification" content="850adecad40680d5" />
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no"/>

    <link rel="apple-touch-icon" sizes="57x57" href="<?=SITE_DIR?>apple-icon-57x57.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_DIR?>favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_DIR?>favicon-16x16.png">

    <meta name="msapplication-TileColor" content="#000">
    <meta name="theme-color" content="#000">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">

    <link rel="stylesheet" type="text/css" media="all" href="<?=$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/build/build.css")?>" />

    <?
    $asset = Asset::getInstance();
    $asset->addJs(SITE_TEMPLATE_PATH."/build/build-head.js");
    ?>
</head>
<body class="not-loaded">
<div id="panel">
    <?$APPLICATION->ShowPanel();?>
</div>
<div class="respon-meter"></div>

<section class="wrap" id="top">

    <header class="header">
        <div class="container">
            <div class="header-top cols cols--acenter">
                <div class="<?if ($curpage == SITE_DIR):?>header-left<?else:?>navbar-left<?endif;?>">
                    <div class="header-logo cols cols--acenter">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/logo.php"), false);?>

                        <a href="<?=SITE_DIR?>">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/logo_name.php"), false);?>
                        </a>
                    </div>
                    <?if ($curpage != SITE_DIR):?>
                    <div class="navbar-social">
                        <div class="navbar-social-left">
                            <div class="footer-social">
                                <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/socials.php"), false);?>
                            </div>

                        </div>
                        <div class="navbar-social-right">
                            <div class="social-info">
                                <div class="social-phone">
                                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                        array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/phones.php"), false);?>
                                </div>
                                <div class="social-adress">
                                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                        array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/address.php"), false);?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?endif;?>
                </div>
                <nav class="header-menu">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
                        "ROOT_MENU_TYPE" => "top",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "36000000",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_THEME" => "site",
                        "CACHE_SELECTED_ITEMS" => "N",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MAX_LEVEL" => "1",
                        "CHILD_MENU_TYPE" => "",
                        "USE_EXT" => "N",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "Y",
                    ),
                        false
                    );?>
                </nav>
                <div class="hamburglar is-close tablet-show" id="hamburger">
                    <div class="burger-icon">
                        <div class="burger-container">
                            <div class="burger-bun-top"></div>
                            <div class="burger-filling"></div>
                            <div class="burger-bun-bot"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?if ($curpage == SITE_DIR):?>
        <header class="header">
            <div class="container">
                <div class="header-offer-main">
                    <div class="header-offer-left">
                        <div class="header-offer-text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/home_slogan.php"), false);?>
                            <div class="social-info">
                                <div class="social-phone">
                                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                        array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/phones.php"), false);?>
                                </div>
                                <div class="social-adress">
                                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                        array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/address.php"), false);?>
                                </div>
                            </div>
                        </div>
                        <div class="header-offer-img">
                            <div class="footer-social">
                                <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/socials.php"), false);?>
                            </div>
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/home_slogan2.php"), false);?>
                        </div>
                    </div>
                    <div class="header-offer-right">
                        <div class="header-offer-img">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/Skreen.jpg" alt="Строительство жилых и не жилых помещений">
                        </div>
                        <div class="header-offer-text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/home_text.php"), false);?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    <?elseif($_SERVER["REAL_FILE_PATH"] == "/uslugi/index.php"):?>

    <?else:?>
        <section class="header-about <?=$APPLICATION->ShowViewContent("headerclass")?>">
            <div class="container">
                <div class="header-about-h1">
                    <div class="h1"><?=$APPLICATION->ShowViewContent("h1")?></div>
                </div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "breadcrumb",
                    Array(
                        "PATH" => "",
                        "SITE_ID" => SITE_ID,
                        "START_FROM" => "0"
                    )
                );?>
            </div>
        </section>

    <?endif;?>
