<?
	session_start();
	define("moonstudio", true);
	include '../../engine/config.php';

	$url = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['url']))));
	$content = $mysqli->real_escape_string(stripslashes(trim($_POST['content'])));
    $author = $_SESSION['name'];
	$name = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['name']))));

	if(IfAdmin())
	{
		$sql = "INSERT INTO `pages`(`name`, `url`, `content`, `author`) VALUES ('{$name}', '{$url}', '{$content}', '{$author}')";
		$mysqli->query($sql);

		echo message('Успех', 'Успешно добавлен', 'success');
	}
?>
