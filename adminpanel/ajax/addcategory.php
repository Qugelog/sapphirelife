<?
	session_start();
	define("moonstudio", true);
	include '../../engine/config.php';

	$name = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['name']))));

	if(IfAdmin())
	{
		$sql = "SELECT * FROM `category` WHERE `name` = '{$name}'";
		$result = $mysqli->query($sql);

    	$rows = $result->num_rows;
		if($rows > 0)
		{
			echo message('Ошибка', 'Уже есть', 'error');
			return false;
		}


		$sql = "INSERT INTO `category`(`name`) VALUES ('{$name}')";
		$mysqli->query($sql);

		echo message('Успех', 'Успешно добавлен', 'success');
	}
?>
