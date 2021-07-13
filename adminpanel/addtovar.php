<? include 'inc/header.php'; ?>
<div class="container-fluid mt--6">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card-wrapper">
        <!-- Form controls -->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <h3 class="mb-0">Добавление товаров</h3>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <form id="addtovar" method="post">
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlInput1">Название</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" required>
              </div>
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlInput2">Название для выдачи на сервере</label>
                <input type="text" name="code" class="form-control" id="exampleFormControlInput2" required>
              </div>

              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlSelect1">Категория</label>
                <select name="category" class="form-control" id="exampleFormControlSelect1">
                    <option value="0">Выберите категорию</option>
                    <?
                        $sql = "SELECT * FROM `category`";
                        $result = $mysqli->query($sql);

                        $rows = $result->num_rows;
                        if($rows > 0)
                        {
                            for($x = 0; $x < $rows; $x++)
                            {
                                $result->data_seek($x);
                                $category = $result->fetch_assoc();
                                echo '<option value="' .$category['name']. '">' .$category['name']. '</option>';
                            }
                        }
                    ?>
                </select>
              </div>

              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlSelect2">Сервер</label>
                <select name="server" class="form-control" id="exampleFormControlSelect2">
                    <option value="0">Выберите сервер</option>
                    <?
                        $sql = "SELECT * FROM `servers`";
                        $result = $mysqli->query($sql);

                        $rows = $result->num_rows;
                        if($rows > 0)
                        {
                            for($x = 0; $x < $rows; $x++)
                            {
                                $result->data_seek($x);
                                $server = $result->fetch_assoc();
                                echo '<option value="' .$server['name']. '">' .$server['name']. '</option>';
                            }
                        }
                    ?>
                </select>
              </div>

              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlInput3">Цена</label>
                <input type="number" name="price" class="form-control" id="exampleFormControlInput3" required>
              </div>
              <button class="btn btn-primary" type="submit">Добавить</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
