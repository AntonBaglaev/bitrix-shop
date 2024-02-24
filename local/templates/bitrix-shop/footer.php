<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?$APPLICATION->IncludeComponent("bitrix:catalog.products.viewed", ".default", Array(
	"ACTION_VARIABLE" => "action_cpv",	// Название переменной, в которой передается действие
		"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
		"ADD_TO_BASKET_ACTION" => "ADD",	// Показывать кнопку добавления в корзину или покупки
		"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
		"DEPTH" => "2",	// Максимальная отображаемая глубина разделов
		"DISPLAY_COMPARE" => "N",	// Разрешить сравнение товаров
		"ENLARGE_PRODUCT" => "STRICT",	// Выделять товары в списке
		"HIDE_NOT_AVAILABLE" => "N",	// Недоступные товары
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",	// Недоступные торговые предложения
		"IBLOCK_ID" => "15",	// Инфоблок
		"IBLOCK_MODE" => "single",	// Показывать товары из
		"IBLOCK_TYPE" => "catalog",	// Тип инфоблока
		"LABEL_PROP_POSITION" => "top-left",	// Расположение меток товара
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
		"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
		"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
		"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
		"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
		"PAGE_ELEMENT_COUNT" => "9",	// Количество элементов на странице
		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
		"PRICE_CODE" => "",	// Тип цены
		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",	// Порядок отображения блоков товара
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'5','BIG_DATA':false}]",	// Вариант отображения товаров
		"PRODUCT_SUBSCRIPTION" => "Y",	// Разрешить оповещения для отсутствующих товаров
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_ELEMENT_CODE" => "",	// Символьный код элемента, для которого будет выбран раздел
		"SECTION_ELEMENT_ID" => $GLOBALS["CATALOG_CURRENT_ELEMENT_ID"],	// ID элемента, для которого будет выбран раздел
		"SECTION_ID" => $GLOBALS["CATALOG_CURRENT_SECTION_ID"],	// ID раздела
		"SHOW_CLOSE_POPUP" => "N",	// Показывать кнопку продолжения покупок во всплывающих окнах
		"SHOW_DISCOUNT_PERCENT" => "N",	// Показывать процент скидки
		"SHOW_FROM_SECTION" => "N",	// Показывать товары из раздела
		"SHOW_MAX_QUANTITY" => "N",	// Показывать остаток товара
		"SHOW_OLD_PRICE" => "N",	// Показывать старую цену
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"SHOW_SLIDER" => "Y",	// Показывать слайдер для товаров
		"TEMPLATE_THEME" => "blue",	// Цветовая тема
		"USE_ENHANCED_ECOMMERCE" => "N",	// Отправлять данные электронной торговли в Google и Яндекс
		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
		"COMPONENT_TEMPLATE" => "bootstrap_v4",
		"SLIDER_INTERVAL" => "3000",	// Интервал смены слайдов, мс
		"SLIDER_PROGRESS" => "N",	// Показывать полосу прогресса
		"ADDITIONAL_PICT_PROP_15" => "-",	// Дополнительная картинка
		"LABEL_PROP_15" => "",	// Свойство меток товара
		"ADDITIONAL_PICT_PROP_16" => "-",	// Дополнительная картинка
	),
	false
);?>

<!-- container -->
</div>

<svg width="0" height="0" class="hidden">
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 27" id="arrow">
        <circle cx="13.5" cy="13.5" r="13.5" fill="#3862ED"></circle>
        <path opacity="0.5" d="M11 8L16.5 13.5L11 19" stroke="white" stroke-width="2" stroke-linecap="round"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 14" id="envelop">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M18 0.9405L9 5.83762L0 0.9405V0H18V0.9405ZM0 2.862V10.3691L5.32688 5.75887L0 2.862ZM0 13.5V12.6L6.91088 6.62062L9 7.75687L11.0891 6.62062L18 12.6V13.5H0ZM18 10.3691V2.862L12.6731 5.75887L18 10.3691Z" fill="white"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 22" id="heart">
        <path d="M21.8729 12.071L12.7103 21.2868C12.3194 21.68 11.6831 21.6801 11.2921 21.2869L2.12707 12.071L2.04449 11.9854C-0.681493 9.24355 -0.681498 4.79818 2.04448 2.05636C4.77047 -0.685454 9.19016 -0.685454 11.9161 2.05636L12 2.14072L12.0839 2.05637C14.8098 -0.685447 19.2295 -0.685447 21.9555 2.05637C24.6815 4.79819 24.6815 9.24356 21.9555 11.9854L21.8729 12.071Z" fill="#333333"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 27" id="cart">
        <path d="M1 1H5.72727L8.89454 16.8245C9.00262 17.3687 9.29862 17.8574 9.73074 18.2053C10.1629 18.5531 10.7036 18.7379 11.2582 18.7273H22.7455C23.3001 18.7379 23.8408 18.5531 24.2729 18.2053C24.705 17.8574 25.001 17.3687 25.1091 16.8245L27 6.90909H6.90909M11.6364 24.6364C11.6364 25.2891 11.1072 25.8182 10.4545 25.8182C9.80184 25.8182 9.27273 25.2891 9.27273 24.6364C9.27273 23.9837 9.80184 23.4545 10.4545 23.4545C11.1072 23.4545 11.6364 23.9837 11.6364 24.6364ZM24.6364 24.6364C24.6364 25.2891 24.1072 25.8182 23.4545 25.8182C22.8018 25.8182 22.2727 25.2891 22.2727 24.6364C22.2727 23.9837 22.8018 23.4545 23.4545 23.4545C24.1072 23.4545 24.6364 23.9837 24.6364 24.6364Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 16" id="geo">
        <path d="M11.4611 1.96768C8.83767 -0.655751 4.59138 -0.656033 1.96768 1.96768C-0.655688 4.59101 -0.656096 8.83739 1.96768 11.4611L6.35962 15.853C6.55558 16.049 6.87325 16.049 7.06918 15.853L11.4611 11.4611C14.0845 8.83776 14.0849 4.59142 11.4611 1.96768ZM10.7515 10.7516L6.71439 14.7887L2.67723 10.7516C0.451157 8.52549 0.451157 4.90334 2.67723 2.67727C4.90334 0.45122 8.52536 0.451157 10.7515 2.67727C12.9776 4.90331 12.9776 8.52546 10.7515 10.7516Z" fill="#9A9A9A"></path>
        <path d="M6.71378 3.71387C5.05527 3.71387 3.71289 5.05597 3.71289 6.71473C3.71289 8.37321 5.05505 9.71559 6.71378 9.71559C8.37233 9.71559 9.71468 8.37343 9.71468 6.71473C9.71468 5.05625 8.37255 3.71387 6.71378 3.71387ZM8.12616 8.1271C8.10694 8.1271 7.63401 8.7121 6.71378 8.7121C5.60986 8.7121 4.71638 7.81878 4.71638 6.71473C4.71638 5.61083 5.60973 4.71735 6.71378 4.71735C8.50705 4.71735 9.36898 6.88432 8.12616 8.1271Z" fill="#9A9A9A"></path>
    </symbol>
    <symbol fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 23" id="user">
        <path d="M19 21.25V19C19 17.8065 18.5259 16.6619 17.682 15.818C16.8381 14.9741 15.6935 14.5 14.5 14.5H5.5C4.30653 14.5 3.16193 14.9741 2.31802 15.818C1.47411 16.6619 1 17.8065 1 19V21.25M14.5 5.5C14.5 7.98528 12.4853 10 10 10C7.51472 10 5.5 7.98528 5.5 5.5C5.5 3.01472 7.51472 1 10 1C12.4853 1 14.5 3.01472 14.5 5.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
    </symbol>
</svg>

<?php /*
<svg class="icon">
    <use xlink:href="#envelop"></use>
</svg>
 <svg class="icon">
    <use xlink:href="#heart"></use>
</svg>
 <svg class="icon">
    <use xlink:href="#cart"></use>
</svg>
<svg class="icon">
    <use xlink:href="#geo"></use>
</svg>
 <svg class="icon">
    <use xlink:href="#user"></use>
</svg>
 <svg class="icon">
    <use xlink:href="#arrow"></use>
</svg>
*/?>
</body>
</html>