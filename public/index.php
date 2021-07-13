<?
	if(!defined("moonstudio")) return header("Location: /");


//*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
//*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
//*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
$sql = "SELECT * FROM `servers`";
$result = $mysqli->query($sql);

$rows = $result->num_rows;
if($rows == 0) exit('Серверов не добавлено. Задонатить невозможно.');
//*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
//*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
//*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
$sql = "SELECT * FROM `tovari`";
$result = $mysqli->query($sql);

$rows = $result->num_rows;
if($rows == 0) exit('Товаров нет. Задонатить невозможно.');
//*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
//*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
//*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
$sql = "SELECT * FROM `category`";
$result = $mysqli->query($sql);

$rows = $result->num_rows;
if($rows == 0) exit('Категорию нет');
//*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
//*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
//*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?=$realdir?>/assets/img/logo.png">
    <title><? echo $title; ?></title>
    <!-- CSS -->
	<link rel="stylesheet" href="<?=$realdir?>/assets/css/bootstrap-grid.css">
	<link rel="stylesheet" href="<?=$realdir?>/assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="<?=$realdir?>/assets/css/fonts.css">
	<link rel="stylesheet" href="<?=$realdir?>/assets/css/style.css">
	<link rel="stylesheet" href="<?=$realdir?>/assets/css/responsive.css">
    <link rel="stylesheet" href="<?=$realdir?>/assets/css/sweetalert.css">
    <!-- CSS -->
</head>
<body class="main-page">

<div class="container">
	<div class="header">

		<input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-bars"></i>
        </label>

		<div class="logo">
			<!--<p class="logo-text">Sapphire<font color="#cd5b5b">Life</font></p>-->
			<a href="/"> <img class="logo-img" src="<?=$realdir?>/assets/img/logo.png" alt=""> </a>
		</div>
		<ul class="main-menu">
			<label for="chk" class="hide-menu-btn">
				<i class="fas fa-times"></i>
			</label>
			<li><a href="/">Главная</a></li>
			<li><a href="https://sapphirelife.ru/">Форум</a></li>
			<li><a href="<? echo $config['VkGroup']; ?>">Паблик</a></li>
		</ul>
	</div>

	<div class="row mobile-row justify-content-md-center">
		<form class="main-form" method="post" id="donateform">
			<p class="buy-donate">Покупка доната</p>
			<p class="select-text">Выберите свой игровой сервер</p>
			<?
				$sql = "SELECT * FROM `servers`";
				$result = $mysqli->query($sql);

				$rows = $result->num_rows;
			?>
			<div class="enter-server"
			<?
				if($rows == 1) echo 'style="grid-template-columns: 1fr;"';
				if($rows == 2) echo 'style="grid-template-columns: 1fr 1fr;"';
				if($rows > 2) echo 'style="grid-template-columns: 1fr 1fr 1fr;"';
			?>>
			<?
				if($rows > 0)
				{
					for($x; $x < $rows; $x++)
					{
						$result->data_seek($x);
	    				$servers = $result->fetch_assoc();

	    				if($x == 0) $checked = ' checked';
	    				else $checked = '';


	    				if($x == 0) $gettovars = $servers['name'];

						if($x > 2) {
							$fixstyle = 'style="margin-top: 15px;"';
						}
						else {
							$fixstyle = "";
						}

	    				echo
	    				'
	    				<input class="radio-server" name="server" type="radio" value="'.$servers['name'].'" id="'.$servers['name'].'"'.$checked.'>
						<label '.$fixstyle.' id="changeserver" data-server="'.$servers['name'].'" for="'.$servers['name'].'">'.$servers['name'].'</label>
						';
					}
				}
			?>
			</div>
			<input class="name-input" type="text" name="name" placeholder="Введите ник">
			<select class="form-select" name="tovar" id="showtovars">
				<option selected disabled value="0">Выберите товар</option>
			</select>
			<input class="name-input" type="text" name="promo" placeholder="Промо-код">
			<button class="form-btn" type="submit">Оплатить</button>
			<p class="privacy">Нажимая на кнопку, вы соглашаетесь<br> с <a href="#">правилами сервера</a></p>
		</form>


	</div>

	<div class="footer">
		<p class="copyright"><?=$config['ServerName'];?> 2020 © <br> Любое копирование материала запрещено</p>
	</div>
</div>

<!-- JS -->
<script type="text/javascript" src="<?=$realdir?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=$realdir?>/assets/js/jquery.form.min.js"></script>
<!--<script type="text/javascript" src="<?=$realdir?>/assets/js/sweetalert.min.js"></script>-->
<script type="text/javascript" src="<?=$realdir?>/assets/js/sweetalert2.min.js"></script>

<script>
$('#donateform').ajaxForm({
    url: '<?=$realdir?>/ajax/donate.php',
    dataType: 'text',
    success: function(data) {
        data = $.parseJSON(data);
        switch(data.status) {
            case 'error':
                Swal.fire(data.title,  data.text,  data.status);
                setTimeout(function () {
                    Swal.close();
                }, 1500);
                break;
            case 'info':
            	Swal.fire(data.title,  data.text,  data.status);
            	setTimeout(function () {
                    Swal.close();
            	}, 1500);
            	break;
            case 'success':
                location.href = data.url;
                break;
        }
    },
});
$(document).on( 'click', '.last-arrow', function() {
	var buttonID = $(this).data("id");
	var lastbuys = $('#lastbuys');
    $.ajax({
        url: '<?=$realdir?>/ajax/showbuys.php',
        type: 'POST',
        dataType: "text",
        data: {button: buttonID},
        success: function(data){
        	lastbuys.empty();
            lastbuys.append(data);
        }
    });
});
$(document).on( 'click', '.otziv-arrow', function() {
	var buttonID = $(this).data("id");
	var otziv = $('#otziv');
    $.ajax({
        url: '<?=$realdir?>/ajax/otziv.php',
        type: 'POST',
        dataType: "text",
        data: {button: buttonID},
        success: function(data){
        	otziv.empty();
            otziv.append(data);
        }
    });
});

$(document).ready(function() {
    var servername = '<? echo $gettovars; ?>';
	var showtovars = $('#showtovars');
    $.ajax({
        url: '<?=$realdir?>/ajax/showtovars.php',
        type: 'POST',
        dataType: "text",
        data: {server: servername},
        success: function(data){
        	showtovars.empty();
            showtovars.append(data);
        }
    });
});

$(document).on( 'click', '#changeserver', function() {
	var servername = $(this).data("server");
	var showtovars = $('#showtovars');
    $.ajax({
        url: '<?=$realdir?>/ajax/showtovars.php',
        type: 'POST',
        dataType: "text",
        data: {server: servername},
        success: function(data){
        	showtovars.empty();
            showtovars.append(data);
        }
    });
});
</script>
<!-- JS -->
</body>
</html>
