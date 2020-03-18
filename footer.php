<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Page\Asset as Asset,
    Bitrix\Main\Application;
?>

<footer class="footer">
    <div class="footer-wrapper">
        <div class="footer-wrapper-left">
            <div class="footer-nav">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
                    "ROOT_MENU_TYPE" => "bottom",
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
            </div>
            <div class="footer-service">
                <div>

                    <div class="footer-header">
                        <h2>Услуги</h2>
                    </div>
                    <div class="lists">
                        <div class="lists-left">
                            <ul>
                                <li>
                                    <a href="javascript:;">Проектирование</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Фундамент</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Кровельные работы</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Гаражи</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Малые архитектурные формы</a>
                                </li>
                            </ul>
                        </div>
                        <div class="lists-right">
                            <ul>
                                <li>
                                    <a href="javascript:;">Заборы</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Дизайн интерьера</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Отделка</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Дополнительные услуги</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-home">
                <div class="footer-header">
                    <h2>Дома</h2>
                </div>
                <div class="lists">
                    <div class="lists-left">
                        <ul>
                            <li>
                                <a href="javascript:;">Кирпичные дома</a>
                            </li>
                            <li>
                                <a href="javascript:;">Монолитные дома</a>
                            </li>
                            <li>
                                <a href="javascript:;">Дома из керамоблоков</a>
                            </li>
                            <li>
                                <a href="javascript:;">Дома из силикатных блоков</a>
                            </li>
                        </ul>
                    </div>
                    <div class="lists-right">
                        <ul>
                            <li>
                                <a href="javascript:;">Дома из профилированного бруса</a>
                            </li>
                            <li>
                                <a href="javascript:;">Дома из оцилиндрованого бревна</a>
                            </li>
                            <li>
                                <a href="javascript:;">Дома из клееного бруса</a>
                            </li>
                            <li>
                                <a href="javascript:;">Рубленые дома</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer-wrapper-middle form form-validate form-ajax">
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/footer-form.php"), false);?>
        </div>
        <div class="footer-wrapper-right">
            <div class="header-logo cols cols--acenter">
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/logo.php"), false);?>
                <a href="<?=SITE_DIR?>">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                        array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/logo_name.php"), false);?>
                </a>
            </div>
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/footer_slogan.php"), false);?>

            <div class="footer-social">
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/socials.php"), false);?>
            </div>
            <div class="social-phone">
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/phones.php"), false);?>
            </div>
            <div class="adress-footer">
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/address2.php"), false);?>
            </div>
            <div class="work-time">
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/worktime.php"), false);?>
            </div>
            <div class="inn">
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/req.php"), false);?>
            </div>
            <div class="wader">
                <p> &copy <?=date("Y")?> ООО Конкрит</p>
                <p>Разработчик сайта - <a href="https://diagram.team" target="_blank">diagram</p>
            </div>
        </div>
    </div>
</footer>

</div>


<?$asset = Asset::getInstance();
$asset->addJs(SITE_TEMPLATE_PATH."/build/build.js");?>

<script>
    $(document).ready(function(){
        //ymap_load();
    });
</script>

</body>
</html>
