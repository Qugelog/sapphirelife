<?
	session_start();
	define("moonstudio", true);
	include '../../engine/config.php';

	$name = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['name']))));
	$code = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['code']))));

	if(IfAdmin())
	{
		$sql = "SELECT * FROM `servers` WHERE `name` = '{$name}'";
		$result = $mysqli->query($sql);

    	$rows = $result->num_rows;
		if($rows > 0)
		{
			echo message('Ошибка', 'Уже есть этот название', 'error');
			return false;
		}
		$sql = "SELECT * FROM `servers` WHERE `code` = '{$code}'";
		$result = $mysqli->query($sql);

    	$rows = $result->num_rows;
		if($rows > 0)
		{
			echo message('Ошибка', 'Уже есть этот код', 'error');
			return false;
		}




		$sql = "INSERT INTO `servers`(`name`, `code`) VALUES ('{$name}', '{$code}')";
		$mysqli->query($sql);

		echo message('Успех', 'Успешно добавлен', 'success');
	}
?>
