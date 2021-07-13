<?
	session_start();
	define("moonstudio", true);
	include '../../engine/config.php';

	$id = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['id']))));

	if(IfAdmin())
	{
        $sql = "SELECT * FROM `otziv` WHERE `id` = '{$id}'";
    	$result = $mysqli->query($sql);

        $rows = $result->num_rows;
    	if($rows > 0)
    	{
    		$result->data_seek(0);
    		$otziv = $result->fetch_assoc();

            echo message("Успех", $otziv['text'], "success");
        }
        else {
            echo message("Ошибка", "Не найден!", "error");
        }

		return false;
	}
?>
