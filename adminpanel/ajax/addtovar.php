<?
	session_start();
	define("moonstudio", true);
	include '../../engine/config.php';

	$name = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['name']))));
	$code = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['code']))));
	$price = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['price']))));
	$category = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['category']))));
	$server = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['server']))));

	if(IfAdmin())
	{

		if($category == '0')
		{
			echo message('Ошибка', 'Выберите категорию', 'error');
			return false;
		}
		if($server == '0')
		{
			echo message('Ошибка', 'Выберите сервер', 'error');
			return false;
		}

		$sql = "SELECT * FROM `tovari` WHERE `name` = '{$name}' AND `server` = '{$server}'";
		$result = $mysqli->query($sql);

    	$rows = $result->num_rows;
		if($rows > 0)
		{
			echo message('Ошибка', 'Уже есть', 'error');
			return false;
		}

		$sql = "SELECT * FROM `tovari` WHERE `code` = '{$code}' AND `server` = '{$server}'";
		$result = $mysqli->query($sql);

    	$rows = $result->num_rows;
		if($rows > 0)
		{
			echo message('Ошибка', 'Уже есть этот название для выдачи в сервере', 'error');
			return false;
		}



		$sql = "INSERT INTO `tovari`(`name`,`code`,`price`,`category`,`server`) VALUES ('{$name}', '{$code}', '{$price}', '{$category}', '{$server}')";
		$mysqli->query($sql);

		echo message('Успех', 'Успешно добавлен', 'success');
	}
?>
