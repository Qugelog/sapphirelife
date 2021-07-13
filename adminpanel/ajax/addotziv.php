<?
	session_start();
	define("moonstudio", true);
	include '../../engine/config.php';

	$name = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['name']))));
	$stars = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['stars']))));
    $text = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['text']))));

	if(IfAdmin())
	{
		$sql = "INSERT INTO `otziv`(`name`, `stars`, `text`) VALUES ('{$name}', '{$stars}', '{$text}')";
		$mysqli->query($sql);

		echo message('Успех', 'Успешно добавлен', 'success');
	}
?>
