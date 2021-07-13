<? include 'inc/header.php'; ?>
<div class="container-fluid mt--6">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card-wrapper">
        <!-- Form controls -->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <h3 class="mb-0">Добавление отзыва</h3>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <form id="addotziv" method="post">
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlInput1">Ник</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" required>
              </div>
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlInput2">Оценка (1-5)</label>
                <input type="number" name="stars" class="form-control" id="exampleFormControlInput2" required>
              </div>
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlTextarea1">Текст</label>
                <textarea type="text" name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <button class="btn btn-primary" type="submit">Добавить</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
