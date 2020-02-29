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
<body>
	<div id="grid_container">
		<div id="topmenu1_container">topmenu
		</div>
		<div id="sidemenu_container">
			<ul id="sidemenu">sidemenu<br>
				<li><div>menu1</div>
					<ul>
						<li><div>menu1-1</div></li>
						<li><div>menu1-2</div></li>
						<li><div>menu1-3</div></li>
					</ul>
				</li>
				<li><div>menu2</div>
					<ul>
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
					<ul>
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
			contents
			<div id="link_dialog">
				<a href="./php/view/dialogs.php">dialogs</a>
			</div>
		</div>
	</div>
</body>
<script>
	view_sidemenu("sidemenu");
</script>
</html>
<!--<?php
echo "test";
?>-->
