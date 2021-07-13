<?
	session_start();
	define("moonstudio", true);
	include '../../engine/config.php';

	$id = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['id']))));

	if(IfAdmin())
	{
		$sql = "DELETE FROM `otziv` WHERE `id` = '{$id}'";
        $mysqli->query($sql);
	}
?>
