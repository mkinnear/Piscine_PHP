<?php
session_start();
if (!isset($_SESSION['login']))
	header("Location: login.php");
if ($_POST['submit'] == 'Logout')
{
	unset($_SESSION['login']);
	unset($_SESSION['id']);
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<hmtl>
<head>
	<title>Lobby</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>
	<div id="page_lobby">
		<?php
			if ($_POST['submit'] == "Create")
				include "create_party.php";
			else
				include "list_party.php";
		?>
	</div>
	<div id="menu_lobby">
	<form method="post">
		<input type="submit" name="submit" value="Create" class="sub">
		<br />
		<input type="submit" name="submit" value="Join" class="sub"/>
		<br />
		<input type="submit" name="submit" value="Logout" class="sub"/>
	</div>
	<div id="page_lobby">
		<iframe name="chat" src="chat.php" frameBorder="0"></iframe>
	</div>
	<div id="menu_lobby2">
    	<iframe name="speak" src="speak.php" frameBorder="0"></iframe>
    </div>
</body>
</hmtl>