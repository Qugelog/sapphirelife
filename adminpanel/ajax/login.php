<?
	session_start();
	define("moonstudio", true);
	include '../../engine/config.php';

	$name = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['name']))));
	$password = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['password']))));

    if(empty($name) || empty($password)) {
        echo message('Ошибка', 'Заполните вся поля', 'error');
		return false;
    }


	$sql = "SELECT * FROM `admin` WHERE `name` = '{$name}'";
	$result = $mysqli->query($sql);

    $rows = $result->num_rows;
	if($rows > 0)
	{
		$result->data_seek(0);
		$admin = $result->fetch_assoc();

		if($password == $admin['password'])
		{
			$_SESSION['admin'] = true;
			$_SESSION['name'] = $name;

			echo message('Успех', 'OK', 'success');
		}
		else echo message('Ошибка', 'Пароль неверный', 'error');
	}
	else
	{
		echo message('Ошибка', 'Аккаунт не найден', 'error');
		return false;
	}
?>
