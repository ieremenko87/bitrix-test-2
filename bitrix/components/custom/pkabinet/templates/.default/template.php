<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

foreach ($arResult["ITEMS"] as $id => $partner)
{
	echo "Товары партнера ".$id."<br>";
?>
	
	<table border="1">
	<tr>
	<th>ID</th>
	<th>NAME</th>
	<th>ACTIVE</th>
	<th>CHANGE ACTIVE STATUS</th>
	</tr>
	
<?	foreach ($partner as $item)
	{
		if(is_array($item))
		{
?>
		<tr>
		<td><? echo $item["ID"] ?></td>
		<td><? echo $item["NAME"] ?></td>
		<td><? echo $item["ACTIVE"] ?></td>
		<td><a href="/partnerskiy-kabinet/index.php?id=<? echo $item["ID"] ?>&state=<? echo ($item["ACTIVE"]=="Y" ? "N" : "Y") ?>&sessid=<? echo bitrix_sessid(); ?>">CHANGE</a></td>
		</tr>
<?
		}
	}
?>
	</table>
<? echo $partner["NAV_STRING"];
?>
	<br>
	<br>
	<br>
<? }
?>
