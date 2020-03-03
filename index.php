<html lang="jp">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="./css/test.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./css/dialog.css">
	<script src="./js/dialog.js"></script>
	<script src="./js/sidemenu.js"></script>
</head>
<body id="bbb" class="grey">
	<div id="grid_container">
		topmenu<br>
		<div id="horizon_menu_container" class="grey">
			<ul id="horizon_menu" class="top_grey">
				<li><div>menu1</div></li>
				<li><div>menu2</div></li>
				<li><div>menu3</div></li>
			</ul>
		</div>
		<div id="sidemenu_container">
			<ul id="vertical_menu" class="side_grey">sidemenu<br>
				<li><div>dialogs</div>
					<ul class="grey">
						<li onclick="view_dialog('dialog_msg', false, false)"><div>メッセージダイアログ</div></li>
						<li onclick="view_confirm_dialog('dialog_cfm', true, true)"><div>確認ダイアログ</div></li>
						<li onclick="view_progressbar('dialog_progressbar', 'bar')"><div>プログレスバー</div></li>
<!--					<li onclick="view_appendto('aaa')"><div>apendto</div></li>-->
					</ul>
				</li>
				<li><div>menu2</div>
					<ul class="grey">
						<li><div>menu2-1</div>
							<ul>
								<li><div>menu2-1-1</div></li>
								<li><div>menu2-1-2</div></li>
							</ul>
						</li>
						<li><div>menu2-2</div></li>
					</ul>
				</li>
				<li><div>menu3</div>
					<ul class="grey">
						<li><div>menu3-1</div></li>
						<li><div>menu3-2</div>
							<ul>
								<li><div>menu3-2-1</div></li>
								<li><div>menu3-2-2</div></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<div id="contents">
			<div id="contents1" class="ui-widget-content grey">
				contents1
			</div>
			<div id="contents2" class="ui-widget-content grey">
				contents2
			</div>
			<div id="contents3" class="ui-widget-content grey">
				contents3
			</div>
		</div>
	</div>
<!-- ダイアログ -->
	<div id="message">
		<div id="dialog_msg" title="メッセージダイアログ" hidden>ここがダイアログに表示される</div>
	</div>
	<div id="confirm">
		<div id="dialog_cfm" title="確認ダイアログ" hidden>dialog_confirm</div>
	</div>
	<div id="progressbar">
		<div id="dialog_progressbar" title="プログレスバー" hidden>
			dialog_progress
			<div id="bar"></div>
		</div>
	</div>
</body>
<script>
	view_menu("horizon_menu");
	view_menu("vertical_menu");
	$( function() {
		$( "#contents1" ).resizable();
		$( "#contents1" ).draggable();
		$( "#contents2" ).resizable();
		$( "#contents2" ).draggable();
		$( "#contents3" ).resizable();
		$( "#contents3" ).draggable();
	} );
/*function view_appendto(id){
		$("#bbb").dialog(
			{
				appendto:"#"+id
			}
		);
}*/
</script>
</html>
