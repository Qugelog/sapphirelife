<?
	session_start();
	define("moonstudio", true);
	include '../engine/config.php';
	
	function GetIP() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
	if (!in_array(GetIP(), array('136.243.38.147', '136.243.38.149', '136.243.38.150', '136.243.38.151', '136.243.38.189', '136.243.38.108'))) {
        die('Bad IP :D');
    }

	$merchant_id = $config['MerchantID'];
    $merchant_secret = $config['SecretWord'];

    $sign = md5($merchant_id.':'.$_REQUEST['AMOUNT'].':'.$merchant_secret.':'.$_REQUEST['MERCHANT_ORDER_ID']);

    if($sign != $_REQUEST['SIGN']) {
		die('wrong sign');
    }

    $tovarname = explode('/', $_REQUEST['MERCHANT_ORDER_ID']);

	$amount = $_REQUEST["AMOUNT"];
	$name = $_REQUEST["us_name"];
	$server = $_REQUEST["us_server"];
	$tovar = $tovarname[1];

	$nametovar = $tovarname[2];

	$category = $_REQUEST["us_category"];

	$sql = "INSERT INTO `last_buys`(`name`,`tovarname`,`tovar`,`price`,`server`,`category`,`status`) VALUES ('{$name}', '{$nametovar}', '{$tovar}', '{$amount}', '{$server}', '{$category}', '0')";
	$mysqli->query($sql);

	if($config['vksecret'] != 0) {
		SendVkMessage($config['vkid'], 'Игрок '.$name.' купил товар '.$nametovar.', за: '.$amount.' руб.');
	}

    die('YES');
?>
