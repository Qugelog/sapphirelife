<?


function SendVkMessage($userid, $message)
{
    include 'vkbot/api/vk_api.php';

    $userid = explode(',', $userid);

    for ($i=0; $i < count($userid); $i++) {
        vkApi_messagesSend($userid[$i], $message);
    }
}


function message($title, $text, $status) {
	echo json_encode(array(
		'title' => $title,
		'text' => $text,
		'status' => $status,
	));
}

function IfAdmin() {
	global $mysqli;

	if($_SESSION['admin'] == true && !empty($_SESSION['name']))
	{
		$sql = "SELECT * FROM `admin` WHERE `name` = '{$_SESSION['name']}'";
		$result = $mysqli->query($sql);

		$rows = $result->num_rows;
		if($rows == 1) return true;
		else return false;
	}
	else return false;
}

?>
