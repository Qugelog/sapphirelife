<?
	if(!defined("moonstudio")) return header("Location: /");
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

    <link rel="stylesheet" href="<?=$realdir?>/assets/css/froala_style.min.css">
    <!-- CSS -->
	<style>
		.fr-view {
			background-color: #373737;
    		width: 100%;
    		height: auto;
    		border-radius: 15px;
    		margin-top: 50px;
			padding: 20px 10px;
		}
	</style>
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

    <div class="fr-view container">
		<?=$dpage['content']?>
    </div>


	<div class="footer">
		<p class="copyright"><?=$config['ServerName'];?> 2020 © <br> Любое копирование материала запрещено</p>
	</div>
</div>

<!-- JS -->
<script type="text/javascript" src="<?=$realdir?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=$realdir?>/assets/js/jquery.form.min.js"></script>
<script type="text/javascript" src="<?=$realdir?>/assets/js/sweetalert.min.js"></script>
<!-- JS -->
</body>
</html>
