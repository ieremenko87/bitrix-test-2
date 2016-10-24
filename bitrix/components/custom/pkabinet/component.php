<?
global $USER;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

// Изменяем активность элемента?
if (check_bitrix_sessid("sessid") && $_SERVER["REQUEST_METHOD"] == "GET" && !empty($_REQUEST["id"]) && !empty($_REQUEST["state"]))
{
	$el = new CIBlockElement;
	$arParams = Array("ACTIVE" => trim($_REQUEST["state"]));
	$PRODUCT_ID = intval($_REQUEST["id"]);
	$res = $el->Update($PRODUCT_ID, $arParams);
}

// Получим текущего пользователя
$current_user = $USER->GetID();

// Если пользователь не авторизован - выводим "Доступ запрещен"
if ($current_user == NULL)
	echo "Доступ запрещен";
else
{
	// Получим партнеров, где он является оператором
	$partners = array();
	$arSelect = array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "ACTIVE");
	$arFilter = array("IBLOCK_ID" => 4, "PROPERTY_OPERATOR" => $current_user);
	$res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
	while ($ob = $res->GetNext()) {
		$partners[] = $ob["ID"];
	}

	// Если пользователь не является оператором ни у одного партнера - выводим "Доступ запрещен"
	if ($partners == NULL)
		echo "Доступ запрещен";
	else
	{
		// Получим списки товаров у каждого партнера
		$products = array();
		foreach ($partners as $partner)
		{
			$arSelect = array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "ACTIVE");
			$arFilter = array("IBLOCK_ID" => 2, "PROPERTY_PARTNER" => $partner);
			$res = CIBlockElement::GetList(array(), $arFilter, false, array("nPageSize" => 1), $arSelect);
			$products[$partner] = $res;
		}

		// Передаем результаты
		$arResult["ITEMS"] = $products;

		// Подключим шаблон
		$this->IncludeComponentTemplate();
	}
}

?>