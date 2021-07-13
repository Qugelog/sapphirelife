<? include 'inc/header.php'; ?>
<div class="container-fluid mt--6">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card-wrapper">
        <!-- Form controls -->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <h3 class="mb-0">Добавление промо-кода</h3>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <form id="addpromo" method="post">
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlInput1">Название</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" required>
              </div>
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlInput1">Размер скидки</label>
                <input type="number" name="percent" class="form-control" id="exampleFormControlInput1" required>
              </div>
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlSelect1">На какие товары действует?</label>
                <select name="for_tovar" class="form-control" id="exampleFormControlSelect1">
              <?
              $sql = "SELECT * FROM `category`";
          	  $result = $mysqli->query($sql);
          	  $rows = $result->num_rows;

          	  for($x = 0; $x < $rows; $x++)
          	  {
          	      $result->data_seek($x);
                  $category = $result->fetch_assoc();

                  $categoryname = $category['name'];

                  $sqll = "SELECT * FROM `tovari` WHERE `category` = '{$categoryname}'";
          	  	  $resultt = $mysqli->query($sqll);
          	  	  $rowss = $resultt->num_rows;
          	  	  if($rowss > 0)
          	  	  {
          	  	      $data .= '<option value="cat:'.$categoryname.'">' .$categoryname. '</option>';

          	  	  	  for($i = 0; $i < $rowss; $i++)
          	  	      {
          	  	  	      $resultt->data_seek($i);
                  		  $tovar = $resultt->fetch_assoc();
                  		  $data .= '<option value="tovar:' .$tovar['name']. '">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .$tovar['name']. ' - ' .$tovar['price']. ' руб.</option>';
          	  	  	  }
          	  	  }
          	  }

          	  echo '<option value="all">Все товары</option>'. $data;

              ?>
                </select>
              </div>
              <button class="btn btn-primary" type="submit">Добавить</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
