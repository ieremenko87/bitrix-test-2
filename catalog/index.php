<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?><?$APPLICATION->IncludeComponent("bitrix:catalog", ".default", Array(
	"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"ADD_ELEMENT_CHAIN" => "Y",	// Включать название элемента в цепочку навигации
		"ADD_PICT_PROP" => "MORE_PHOTO",	// Дополнительная картинка основного товара
		"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"ADD_SECTION_CHAIN" => "Y",
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"ALSO_BUY_ELEMENT_COUNT" => "4",	// Количество элементов для отображения
		"ALSO_BUY_MIN_BUYES" => "1",	// Минимальное количество покупок товара
		"BASKET_URL" => "/personal/cart/",	// URL, ведущий на страницу с корзиной покупателя
		"BIG_DATA_RCM_TYPE" => "bestsell",	// Тип рекомендации
		"CACHE_FILTER" => "Y",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"COMMON_ADD_TO_BASKET_ACTION" => "",	// Показывать кнопку добавления в корзину или покупки
		"COMMON_SHOW_CLOSE_POPUP" => "N",	// Показывать кнопку продолжения покупок во всплывающих окнах
		"CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",	// Добавлять детальную картинку в слайдер
		"DETAIL_ADD_TO_BASKET_ACTION" => array(	// Показывать кнопки добавления в корзину и покупки на детальной странице товара
			0 => "BUY",
		),
		"DETAIL_BACKGROUND_IMAGE" => "BACKGROUND_IMAGE",	// Установить фоновую картинку для шаблона из свойства
		"DETAIL_BLOG_EMAIL_NOTIFY" => "N",	// Уведомление по электронной почте
		"DETAIL_BLOG_URL" => "catalog_comments",	// Название блога латинскими буквами
		"DETAIL_BLOG_USE" => "Y",	// Использовать комментарии
		"DETAIL_BRAND_PROP_CODE" => array(	// Таблица с брендами
			0 => "BRAND_REF",
			1 => "",
		),
		"DETAIL_BRAND_USE" => "Y",	// Использовать компонент "Бренды"
		"DETAIL_BROWSER_TITLE" => "TITLE",	// Установить заголовок окна браузера из свойства
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",	// Использовать код группы из переменной, если не задан раздел элемента
		"DETAIL_DETAIL_PICTURE_MODE" => "IMG",	// Режим показа детальной картинки
		"DETAIL_DISPLAY_NAME" => "N",	// Выводить название элемента
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",	// Показ описания для анонса на детальной странице
		"DETAIL_FB_APP_ID" => "",	// Идентификатор приложения (APP_ID)
		"DETAIL_FB_USE" => "Y",	// Использовать Facebook
		"DETAIL_META_DESCRIPTION" => "META_DESCRIPTION",	// Установить описание страницы из свойства
		"DETAIL_META_KEYWORDS" => "KEYWORDS",	// Установить ключевые слова страницы из свойства
		"DETAIL_OFFERS_FIELD_CODE" => array(	// Поля предложений
			0 => "NAME",
			1 => "",
		),
		"DETAIL_OFFERS_PROPERTY_CODE" => array(	// Свойства предложений
			0 => "ARTNUMBER",
			1 => "COLOR_REF",
			2 => "SIZES_SHOES",
			3 => "SIZES_CLOTHES",
			4 => "MORE_PHOTO",
			5 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(	// Свойства
			0 => "NEWPRODUCT",
			1 => "MANUFACTURER",
			2 => "MATERIAL",
			3 => "PARTNER",
			4 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",	// Включить сохранение информации о просмотре товара на детальной странице для старых шаблонов
		"DETAIL_SHOW_BASIS_PRICE" => "Y",	// Показывать на детальной странице цену за единицу товара
		"DETAIL_SHOW_MAX_QUANTITY" => "N",	// Показывать общее количество товара
		"DETAIL_USE_COMMENTS" => "Y",	// Включить отзывы о товаре
		"DETAIL_USE_VOTE_RATING" => "Y",	// Включить рейтинг товара
		"DETAIL_VK_USE" => "N",	// Использовать Вконтакте
		"DETAIL_VOTE_DISPLAY_AS_RATING" => "rating",	// В качестве рейтинга показывать
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",	// Не подключать js-библиотеки в компоненте
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"ELEMENT_SORT_FIELD" => "desc",	// По какому полю сортируем товары в разделе
		"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки товаров в разделе
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки товаров в разделе
		"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки товаров в разделе
		"FIELDS" => array(	// Поля
			0 => "SCHEDULE",
			1 => "STORE",
			2 => "",
		),
		"FILTER_FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"FILTER_OFFERS_FIELD_CODE" => array(	// Поля предложений
			0 => "PREVIEW_PICTURE",
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"FILTER_OFFERS_PROPERTY_CODE" => array(	// Свойства предложений
			0 => "",
			1 => "",
		),
		"FILTER_PRICE_CODE" => array(	// Тип цены
			0 => "BASE",
		),
		"FILTER_PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"FILTER_VIEW_MODE" => "VERTICAL",	// Вид отображения умного фильтра
		"FORUM_ID" => "1",	// ID форума для отзывов
		"GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",	// Текст заголовка "Подарки" в детальном просмотре
		"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",	// Скрыть заголовок "Подарки" в детальном просмотре
		"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "3",	// Количество элементов в блоке "Подарки" в строке в детальном просмотре
		"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",	// Текст метки "Подарка" в детальном просмотре
		"GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",	// Текст заголовка "Товары к подарку"
		"GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",	// Скрыть заголовок "Товары к подарку" в детальном просмотре
		"GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "3",	// Количество элементов в блоке "Товары к подарку" в строке в детальном просмотре
		"GIFTS_MESS_BTN_BUY" => "Выбрать",	// Текст кнопки "Выбрать"
		"GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",	// Текст заголовка "Подарки" в списке
		"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",	// Скрыть заголовок "Подарки" в списке
		"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "3",	// Количество элементов в блоке "Подарки" строке в списке
		"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",	// Текст метки "Подарка" в списке
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",	// Показывать процент скидки
		"GIFTS_SHOW_IMAGE" => "Y",	// Показывать изображение
		"GIFTS_SHOW_NAME" => "Y",	// Показывать название
		"GIFTS_SHOW_OLD_PRICE" => "Y",	// Показывать старую цену
		"HIDE_NOT_AVAILABLE" => "N",	// Товары, которых нет на складах
		"IBLOCK_ID" => "2",	// Инфоблок
		"IBLOCK_TYPE" => "catalog",	// Тип инфоблока
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"INSTANT_RELOAD" => "N",	// Мгновенная фильтрация при включенном AJAX
		"LABEL_PROP" => "NEWPRODUCT",	// Свойство меток товара
		"LINE_ELEMENT_COUNT" => "3",	// Количество элементов, выводимых в одной строке таблицы
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",	// URL на страницу, где будет показан список связанных элементов
		"LINK_IBLOCK_ID" => "",	// ID инфоблока, элементы которого связаны с текущим элементом
		"LINK_IBLOCK_TYPE" => "",	// Тип инфоблока, элементы которого связаны с текущим элементом
		"LINK_PROPERTY_SID" => "",	// Свойство, в котором хранится связь
		"LIST_BROWSER_TITLE" => "UF_BROWSER_TITLE",	// Установить заголовок окна браузера из свойства раздела
		"LIST_META_DESCRIPTION" => "UF_META_DESCRIPTION",	// Установить описание страницы из свойства раздела
		"LIST_META_KEYWORDS" => "UF_KEYWORDS",	// Установить ключевые слова страницы из свойства раздела
		"LIST_OFFERS_FIELD_CODE" => array(	// Поля предложений
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"LIST_OFFERS_LIMIT" => "0",	// Максимальное количество предложений для показа (0 - все)
		"LIST_OFFERS_PROPERTY_CODE" => array(	// Свойства предложений
			0 => "ARTNUMBER",
			1 => "COLOR_REF",
			2 => "SIZES_SHOES",
			3 => "SIZES_CLOTHES",
			4 => "MORE_PHOTO",
			5 => "",
		),
		"LIST_PROPERTY_CODE" => array(	// Свойства
			0 => "NEWPRODUCT",
			1 => "SALELEADER",
			2 => "SPECIALOFFER",
			3 => "",
		),
		"MAIN_TITLE" => "Наличие на складах",	// Заголовок блока
		"MESSAGES_PER_PAGE" => "10",	// Количество сообщений на одной странице
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
		"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
		"MESS_BTN_COMPARE" => "Сравнение",	// Текст кнопки "Сравнение"
		"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
		"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
		"MIN_AMOUNT" => "10",
		"OFFERS_CART_PROPERTIES" => array(	// Свойства предложений, добавляемые в корзину
			0 => "COLOR_REF",
			1 => "SIZES_SHOES",
			2 => "SIZES_CLOTHES",
		),
		"OFFERS_SORT_FIELD" => "sort",	// По какому полю сортируем предложения товара
		"OFFERS_SORT_FIELD2" => "id",	// Поле для второй сортировки предложений товара
		"OFFERS_SORT_ORDER" => "desc",	// Порядок сортировки предложений товара
		"OFFERS_SORT_ORDER2" => "desc",	// Порядок второй сортировки предложений товара
		"OFFER_ADD_PICT_PROP" => "MORE_PHOTO",	// Дополнительные картинки предложения
		"OFFER_TREE_PROPS" => array(	// Свойства для отбора предложений
			0 => "COLOR_REF",
			1 => "SIZES_SHOES",
			2 => "SIZES_CLOTHES",
		),
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => "round",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Товары",	// Название категорий
		"PAGE_ELEMENT_COUNT" => "15",	// Количество элементов на странице
		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",	// Путь относительно корня сайта к папке со смайлами
		"PRICE_CODE" => array(	// Тип цены
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
		"PRICE_VAT_SHOW_VALUE" => "N",	// Отображать значение НДС
		"PRODUCT_DISPLAY_MODE" => "Y",	// Схема отображения
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"PRODUCT_PROPERTIES" => "",	// Характеристики товара, добавляемые в корзину
		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
		"QUANTITY_FLOAT" => "N",
		"REVIEW_AJAX_POST" => "Y",	// Использовать AJAX в диалогах
		"SECTIONS_HIDE_SECTION_NAME" => "N",	// Не показывать названия подразделов
		"SECTIONS_SHOW_PARENT_NAME" => "N",	// Показывать название раздела
		"SECTIONS_VIEW_MODE" => "TILE",	// Вид списка подразделов
		"SECTION_ADD_TO_BASKET_ACTION" => "ADD",	// Показывать кнопку добавления в корзину или покупки на странице списка товаров
		"SECTION_BACKGROUND_IMAGE" => "UF_BACKGROUND_IMAGE",	// Установить фоновую картинку для шаблона из свойства
		"SECTION_COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
		"SECTION_TOP_DEPTH" => "1",	// Максимальная отображаемая глубина разделов
		"SEF_FOLDER" => "/catalog/",	// Каталог ЧПУ (относительно корня сайта)
		"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
		"SEF_URL_TEMPLATES" => array(
			"compare" => "compare/",
			"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
			"section" => "#SECTION_CODE#/",
			"sections" => "",
			"smart_filter" => "#SECTION_CODE#/filter/#SMART_FILTER_PATH#/apply/",
		),
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_STATUS_404" => "Y",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SHOW_DEACTIVATED" => "N",	// Показывать деактивированные товары
		"SHOW_DISCOUNT_PERCENT" => "Y",	// Показывать процент скидки
		"SHOW_EMPTY_STORE" => "Y",	// Отображать склад при отсутствии на нем товара
		"SHOW_GENERAL_STORE_INFORMATION" => "N",	// Показывать общую информацию по складам
		"SHOW_LINK_TO_FORUM" => "Y",	// Показать ссылку на форум
		"SHOW_OLD_PRICE" => "Y",	// Показывать старую цену
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"SHOW_TOP_ELEMENTS" => "N",	// Выводить топ элементов
		"SIDEBAR_DETAIL_SHOW" => "Y",	// Показывать правый блок на детальной странице
		"SIDEBAR_PATH" => "/catalog/sidebar.php",	// Путь к включаемой области для вывода информации в правом блоке
		"SIDEBAR_SECTION_SHOW" => "Y",	// Показывать правый блок в списке товаров
		"STORES" => "",	// Склады
		"STORE_PATH" => "/store/#store_id#",	// Шаблон пути к каталогу STORE (относительно корня)
		"TEMPLATE_THEME" => "site",	// Цветовая тема
		"TOP_ADD_TO_BASKET_ACTION" => "ADD",	// Показывать кнопку добавления в корзину или покупки на странице с top'ом товаров
		"URL_TEMPLATES_READ" => "",	// Страница чтения темы (пусто - получить из настроек форума)
		"USER_FIELDS" => array(	// Пользовательские поля
			0 => "",
			1 => "",
		),
		"USE_ALSO_BUY" => "Y",	// Показывать блок "С этим товаром покупают"
		"USE_BIG_DATA" => "Y",	// Показывать персональные рекомендации
		"USE_CAPTCHA" => "Y",	// Использовать CAPTCHA
		"USE_COMMON_SETTINGS_BASKET_POPUP" => "N",	// Одинаковые настройки показа кнопок добавления в корзину или покупки на всех страницах
		"USE_COMPARE" => "N",	// Разрешить сравнение товаров
		"USE_ELEMENT_COUNTER" => "Y",	// Использовать счетчик просмотров
		"USE_FILTER" => "Y",	// Показывать фильтр
		"USE_GIFTS_DETAIL" => "Y",	// Показывать блок "Подарки" в детальном просмотре
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",	// Показывать блок "Товары к подарку" в детальном просмотре
		"USE_GIFTS_SECTION" => "Y",	// Показывать блок "Подарки" в списке
		"USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
		"USE_MIN_AMOUNT" => "N",	// Показывать вместо точного количества информацию о достаточности
		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
		"USE_PRODUCT_QUANTITY" => "Y",	// Разрешить указание количества товара
		"USE_REVIEW" => "Y",	// Разрешить отзывы
		"USE_SALE_BESTSELLERS" => "Y",	// Показывать список лидеров продаж
		"USE_STORE" => "Y",	// Показывать блок "Количество товара на складе"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>