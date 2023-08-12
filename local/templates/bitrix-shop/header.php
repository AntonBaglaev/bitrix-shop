<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>
<!doctype html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
    <?

    use Bitrix\Main\Page\Asset;
     // CSS;
     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/bootstrap.min.css');
     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/fonts/Roboto/stylesheet.min.css');
     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/fonts/fontawesome/font-awesome.min.css'); //TODO удалить когда будут svg спрайты
     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/js/fancy/jquery.fancybox.min.css');
    // JS
    CJSCore::Init(array("jquery3"));
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/fancy/jquery.fancybox.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/myscripts.min.js');
    // HEADERS
    $APPLICATION->ShowHead();
    ?>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="apple-touch-icon" sizes="57x57" href="/local/ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/local/ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/local/ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/local/ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/local/ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/local/ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/local/ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/local/ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/local/ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/local/ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/local/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/local/ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/local/ico/favicon-16x16.png">
    <link rel="manifest" href="/local/ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/local/ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body>
<?$APPLICATION->ShowPanel();?>


<div class="top_header">
    <div class="container">
        <div class="top_header_content">
            <button type="" class="top_header_content_menu">
                <i class="fa fa-bars"></i>
                <span>
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/logo_header_new.svg" alt="Bxstore">
                </span>
            </button>
            <?// Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
            $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel", 
	array(
		"ROOT_MENU_TYPE" => "top_catalog",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "top_catalog",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "horizontal_multilevel"
	),
	false
); ?>
            <?// Поиск по заголовкам - http://dev.1c-bitrix.ru/user_help/settings/search/components_2/search_title.php
            $APPLICATION->IncludeComponent(
            	"bitrix:search.title",
            	".default",               // [mobile, .default, catalog, visual]
            	array(
            		// region Основные параметры
            		"NUM_CATEGORIES"      =>  "1",                           // Количество категорий поиска
            		"TOP_COUNT"           =>  "5",                           // Количество результатов в каждой категории
            		"ORDER"               =>  "date",                        // Сортировка результатов : array ( 'date' => 'по дате', 'rank' => 'по релевантности', )
            		"USE_LANGUAGE_GUESS"  =>  "Y",                           // Включить автоопределение раскладки клавиатуры
            		"CHECK_DATES"         =>  "N",                           // Искать только в активных по дате документах
            		"SHOW_OTHERS"         =>  "N",                           // Показывать категорию 'прочее'
            		// endregion
            		// region Шаблоны ссылок
            		"PAGE"                =>  "#SITE_DIR#search/index.php",  // Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
            		// endregion
            		// region Категория #1
            		"CATEGORY_0_TITLE"    =>  "",                            // Название категории
            		"CATEGORY_0"          =>  array('all'),                  // Ограничение области поиска : array ( 'no' => 'Не ограничивать', 'main' => '[main] Статические файлы', 'forum' => '[forum] Форумы для поиска', 'iblock_catalog' => '[iblock_catalog] Каталоги', 'iblock_news' => '[iblock_news] Новости', 'iblock_offers' => '[iblock_offers] Торговые предложения', 'iblock_services' => '[iblock_services] Сервисы', 'iblock_references' => '[iblock_references] Справочники', 'blog' => '[blog] Блоги', 'microblog' => '[microblog] Микроблоги', 'socialnetwork' => '[socialnetwork] Социальная сеть (группы)', 'socialnetwork_user' => '[socialnetwork_user] Социальная сеть (пользователь)', )
            		// endregion
            	)
            );?>
            <div class="top_header_content_phone">
                <a href="tel:89000000000" rel="nofollow">+7 900 000 00 00</a>
                <button type="button" class="top_header_content_phone_button"></button>
            </div>
            <div class="top_header_content_user">
                <a href="" class="top_header_content_user_auth">

                </a>
                <a href="" class="top_header_content_user_wishlist">

                </a>
                <?// Малая корзина
                $APPLICATION->IncludeComponent(
                	"bitrix:sale.basket.basket.small",
                	".default",
                	array(

                	)
                );?>
            </div>
        </div>
    </div>
</div>



