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
</head>

<body class="bg-default">
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Добро пожаловать!</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Админ панель</small>
              </div>
              <form role="form" method="post" id="alogin">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input name="name" class="form-control" placeholder="Ник" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input name="password" class="form-control" placeholder="Пароль" type="password">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Войти</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Argon Scripts -->
<!-- Core -->
<script src="<?=$realdir?>/adminpanel/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?=$realdir?>/adminpanel/assets/vendor/jquery/dist/jquery.form.min.js"></script>
<script src="<?=$realdir?>/adminpanel/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=$realdir?>/adminpanel/assets/vendor/js-cookie/js.cookie.js"></script>
<script src="<?=$realdir?>/adminpanel/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?=$realdir?>/adminpanel/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>

<script src="<?=$realdir?>/adminpanel/assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<script>
$('#alogin').ajaxForm({
    url: '<?=$realdir?>/adminpanel/ajax/login.php',
    dataType: 'text',
    success: function(data) {
        data = $.parseJSON(data);
        switch(data.status) {
            case 'error':
                Swal.fire(data.title,  data.message,  data.status);
                break;
            case 'success':
                location.href = '<?=$realdir?>/admin';
                break;
        }

    },
});
</script>
<!-- Argon JS -->
<script src="<?=$realdir?>/adminpanel/assets/js/argon.js?v=1.1.0"></script>
<script src="<?=$realdir?>/adminpanel/assets/js/admin.js"></script>
</body>
</html>
