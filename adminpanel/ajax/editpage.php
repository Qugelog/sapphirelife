<?
    session_start();
    define("moonstudio", true);
    include '../../engine/config.php';

    $url = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['url']))));
    $id = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['pageid']))));
	$content = $mysqli->real_escape_string(stripslashes(trim($_POST['content'])));
    $name = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['name']))));

	if(IfAdmin())
	{
        $sql = "UPDATE `pages`
				SET `name` = '{$name}', `url` = '{$url}', `content` = '{$content}'
				WHERE `id` = '{$id}'";

        $mysqli->query($sql);

		echo message('Успех', 'Успешно обновлен', 'success');
	}
?>
