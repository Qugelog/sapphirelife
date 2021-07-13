<?
	$sql = "SELECT * FROM `last_buys`";
	$result = $mysqli->query($sql);

	$count = $count + $result->num_rows;
?>
<?
	$sql = "SELECT * FROM `tovari`";
	$result = $mysqli->query($sql);

	$sellingtovars = $result->num_rows;
?>
<?
	$sql = "SELECT * FROM `admin`";
	$result = $mysqli->query($sql);

	$admin = $result->num_rows;
?>
<?
	$sql = "SELECT * FROM `promo`";
	$result = $mysqli->query($sql);

	$promo = $result->num_rows;
?>
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0"><?=$h_path?></h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="/admin"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item active" aria-current="page"><?=$h_path?></li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- Card stats -->
      <div class="row justify-content-center">
        <div class="col-xl-3 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Администраторов</h5>
                  <span class="h2 font-weight-bold mb-0"><? echo $admin; ?></span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-purple text-white rounded-circle shadow">
                    <i class="fas fa-user"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Приобретено товаров</h5>
                  <span class="h2 font-weight-bold mb-0"><? echo $count; ?></span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-purple text-white rounded-circle shadow">
                    <i class="ni ni-cart"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Типы товаров</h5>
                  <span class="h2 font-weight-bold mb-0"><? echo $sellingtovars; ?></span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-purple text-white rounded-circle shadow">
                    <i class="ni ni-badge"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Промо-коды</h5>
                  <span class="h2 font-weight-bold mb-0"><? echo $promo; ?></span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-purple text-white rounded-circle shadow">
                    <i class="fas fa-percentage"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
