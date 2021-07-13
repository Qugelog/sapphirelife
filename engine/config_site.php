<?

$sitebase = array(
	"MySQL_Host" => "localhost",
	"MySQL_Login" => "root",
	"MySQL_Password" => "root",
	"MySQL_DataBase" => "sapphire",
);

$realdir = '';
//*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
//*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
//*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
$mysqli = @new mysqli($sitebase['MySQL_Host'], $sitebase['MySQL_Login'], $sitebase['MySQL_Password'], $sitebase['MySQL_DataBase']);
if($mysqli->connect_errno) return exit("Mysql error");
$mysqli->set_charset("utf8");

$sql = "SELECT * FROM `settings`";
$result = $mysqli->query($sql);

$rows = $result->num_rows;
if($rows == 1)
{
	$result->data_seek(0);
    $settings = $result->fetch_assoc();
}
else exit("Не найден данные в settings");
//*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
//*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
//*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*

$config = array(
	'ServerName' => $settings['ServerName'],

	'Notify' => $settings['Notify'],

	'Discount' => $settings['Discount'],

	'VkGroup' => $settings['VkGroup'],

	'Youtube' => $settings['Youtube'],

	'pay_system' => $settings['pay_system'],

	'MerchantID' => $settings['MerchantID'],

	'SecretWord' => $settings['SecretWord'],

	'vktoken' => $settings['vktoken'],

	'vksecret' => $settings['vksecret'],

	'vkid' => $settings['vkid'],

	'api_ver' => $settings['api_ver'],
);

?>
