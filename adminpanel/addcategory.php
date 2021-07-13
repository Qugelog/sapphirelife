<? include 'inc/header.php'; ?>
<div class="container-fluid mt--6">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card-wrapper">
        <!-- Form controls -->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <h3 class="mb-0">Добавление категории</h3>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <form id="addcategory" method="post">
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlInput1">Название</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" required>
              </div>

              <button class="btn btn-primary" type="submit">Добавить</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
