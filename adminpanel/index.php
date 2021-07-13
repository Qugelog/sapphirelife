<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?=$title?></title>
  <!-- Favicon -->
  <link rel="icon" href="<?=$realdir?>/adminpanel/assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?=$realdir?>/adminpanel/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?=$realdir?>/adminpanel/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="<?=$realdir?>/adminpanel/assets/vendor/sweetalert2/dist/sweetalert2.min.css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?=$realdir?>/adminpanel/assets/css/argon.css?v=1.1.1" type="text/css">
  <script src="<?=$realdir?>/adminpanel/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?=$realdir?>/adminpanel/assets/vendor/jquery/dist/jquery.form.min.js"></script>
  <script type="text/javascript">
      var realdir = '<?=$realdir?>';
  </script>
</head>
<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="<?=$realdir?>/admin">
          <h3><?=$config['ServerName']?></h3>
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <!----------------------------------------------------------------->
            <li class="nav-item">
              <a id="a_admin" class="nav-link" href="<?=$realdir?>/admin">
                <i class="ni ni-chart-pie-35 text-primary"></i>
                <span class="nav-link-text">Главная</span>
              </a>
            </li>
            <!----------------------------------------------------------------->
            <li class="nav-item">
              <a class="nav-link" href="<?=$realdir?>/">
                <i class="ni ni-cart text-primary"></i>
                <span class="nav-link-text">Сайт</span>
              </a>
            </li>
            <!----------------------------------------------------------------->
            <li class="nav-item">
              <a id="a_servers" class="nav-link" href="#navbar-servers" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-server text-primary"></i>
                <span class="nav-link-text">Серверы</span>
              </a>
              <div class="collapse" id="navbar-servers">
                <ul class="nav nav-sm flex-column">
                  <li id="a1_servers" class="nav-item">
                    <a href="<?=$realdir?>/admin/servers" class="nav-link">Список</a>
                  </li>
                  <li id="a2_servers" class="nav-item">
                    <a href="<?=$realdir?>/admin/addserver" class="nav-link">Добавить</a>
                  </li>
                </ul>
              </div>
            </li>
            <!----------------------------------------------------------------->
            <li class="nav-item">
              <a id="a_category" class="nav-link" href="#navbar-category" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-briefcase text-primary"></i>
                <span class="nav-link-text">Категории</span>
              </a>
              <div class="collapse" id="navbar-category">
                <ul class="nav nav-sm flex-column">
                  <li id="a1_category" class="nav-item">
                    <a href="<?=$realdir?>/admin/category" class="nav-link">Список</a>
                  </li>
                  <li id="a2_category" class="nav-item">
                    <a href="<?=$realdir?>/admin/addcategory" class="nav-link">Добавить</a>
                  </li>
                </ul>
              </div>
            </li>
            <!----------------------------------------------------------------->
            <li class="nav-item">
              <a id="a_tovar" class="nav-link" href="#navbar-tovar" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-briefcase text-primary"></i>
                <span class="nav-link-text">Товары</span>
              </a>
              <div class="collapse" id="navbar-tovar">
                <ul class="nav nav-sm flex-column">
                  <li id="a1_tovar" class="nav-item">
                    <a href="<?=$realdir?>/admin/tovar" class="nav-link">Список</a>
                  </li>
                  <li id="a2_tovar" class="nav-item">
                    <a href="<?=$realdir?>/admin/addtovar" class="nav-link">Добавить</a>
                  </li>
                </ul>
              </div>
            </li>
            <!----------------------------------------------------------------->
            <li class="nav-item">
              <a id="a_promo" class="nav-link" href="#navbar-promo" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-percentage text-primary"></i>
                <span class="nav-link-text">Промо-коды</span>
              </a>
              <div class="collapse" id="navbar-promo">
                <ul class="nav nav-sm flex-column">
                  <li id="a1_promo" class="nav-item">
                    <a href="<?=$realdir?>/admin/promo" class="nav-link">Список</a>
                  </li>
                  <li id="a2_promo" class="nav-item">
                    <a href="<?=$realdir?>/admin/addpromo" class="nav-link">Добавить</a>
                  </li>
                </ul>
              </div>
            </li>
            <!----------------------------------------------------------------->
            <li class="nav-item">
              <a id="a_pages" class="nav-link" href="#navbar-pages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-layer-group text-primary"></i>
                <span class="nav-link-text">Страницы</span>
              </a>
              <div class="collapse" id="navbar-pages">
                <ul class="nav nav-sm flex-column">
                  <li id="a1_pages" class="nav-item">
                    <a href="<?=$realdir?>/admin/pages" class="nav-link">Список</a>
                  </li>
                  <li id="a2_pages" class="nav-item">
                    <a href="<?=$realdir?>/admin/addpage" class="nav-link">Добавить</a>
                  </li>
                </ul>
              </div>
            </li>
            <!----------------------------------------------------------------->
            <li class="nav-item">
              <a id="a_settings" class="nav-link" href="<?=$realdir?>/admin/settings">
                <i class="ni ni-settings-gear-65 text-primary"></i>
                <span class="nav-link-text">Настройки сайта</span>
              </a>
            </li>
            <!----------------------------------------------------------------->

            <!----------------------------------------------------------------->

            <!----------------------------------------------------------------->

            <!----------------------------------------------------------------->
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img src="https://mc-heads.net/avatar/<? echo $_SESSION['name']; ?>">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><? echo $_SESSION['name']; ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Добро пожаловать :D</h6>
                </div>
                <div class="dropdown-divider"></div>
                <a href="<?=$realdir?>/logout" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Выход</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <!-- Page content -->
    <? require_once $page; ?>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?=$realdir?>/adminpanel/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?=$realdir?>/adminpanel/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?=$realdir?>/adminpanel/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?=$realdir?>/adminpanel/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>

  <script src="<?=$realdir?>/adminpanel/assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
  <!-- Argon JS -->
  <script src="<?=$realdir?>/adminpanel/assets/js/argon.js?v=1.1.0"></script>
  <script src="<?=$realdir?>/adminpanel/assets/js/draganddrop.js"></script>
  <script src="<?=$realdir?>/adminpanel/assets/js/activator.js"></script>
  <script src="<?=$realdir?>/adminpanel/assets/js/admin.js"></script>
</body>
</html>
