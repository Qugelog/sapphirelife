<?
	session_start();
	define("moonstudio", true);
	include '../../engine/config.php';

	$ServerName = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['ServerName']))));
	$VkGroup = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['VkGroup']))));
	$Youtube = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['Youtube']))));
	$MerchantID = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['MerchantID']))));
	$SecretWord = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['SecretWord']))));

	$vktoken = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['vktoken']))));
	$vksecret = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['vksecret']))));
	$vkid = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['vkid']))));

	$pay_system = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['pay_system']))));
	$api_ver = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($_POST['api_ver']))));

	if(IfAdmin())
	{
		$sql = "UPDATE `settings`
				SET `ServerName` = '{$ServerName}',
				    `VkGroup` = '{$VkGroup}',
					`Youtube` = '{$Youtube}',
					`pay_system` = '{$pay_system}',
					`MerchantID` = '{$MerchantID}',
					`SecretWord` = '{$SecretWord}',
					`vktoken` = '{$vktoken}',
					`vksecret` = '{$vksecret}',
					`vkid` = '{$vkid}',
					`api_ver` = '{$api_ver}'
				WHERE `id` = '1'";

        $mysqli->query($sql);

		echo message("Успех", "Данные успешно сохранены", "success");
		return false;
	}
?>
