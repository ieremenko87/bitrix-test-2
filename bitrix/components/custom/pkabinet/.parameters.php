<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentParameters = array(
	"GROUPS" => array(),
	"PARAMETERS" => array(
		"ITEMS_IBLOCK_ID" => array(
			"PARENT" => "BASE",
			"NAME" => "ID Инфоблока c Товарами",
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "2",
			"REFRESH" => "Y",
		),
		"PARTNERS_IBLOCK_ID" => array(
			"PARENT" => "BASE",
			"NAME" => "ID Инфоблока c Партнерами",
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "4",
			"REFRESH" => "Y",
		),
		"ITEMS_PER_PAGE" => array(
			"PARENT" => "BASE",
			"NAME" => "Количество товаров на странице",
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "1",
			"REFRESH" => "Y",
		),
	),
);
?>