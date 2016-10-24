<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Партнерский кабинет");
$APPLICATION->IncludeComponent(
	"custom:pkabinet",
	".default",
	Array(
	),
	false
	);?><div class="row">
	<div class="col-xs-12">
	</div>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>