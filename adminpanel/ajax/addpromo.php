<?
	session_start();
	define("moonstudio", true);
	include '../../engine/config.php';

	$name = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['name']))));
	$percent = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['percent']))));
	$for_tovar = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['for_tovar']))));

	if(IfAdmin())
	{
		$sql = "SELECT * FROM `promo` WHERE `name` = '{$name}'";
		$result = $mysqli->query($sql);

    	$rows = $result->num_rows;
		if($rows > 0)
		{
			echo message('Ошибка', 'Уже есть', 'error');
			return false;
		}
		else
		{
			$sql = "INSERT INTO `promo`(`name`,`percent`,`for_tovar`) VALUES ('{$name}', '{$percent}', '{$for_tovar}')";
			$mysqli->query($sql);

			echo message('Успех', 'Успешно добавлен', 'success');
		}
	}
?>
