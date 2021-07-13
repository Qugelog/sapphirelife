<? include 'inc/header.php'; ?>
<div class="container-fluid mt--6">
    <div class="card">
        <?
        $sql = "SELECT * FROM `tovari` ORDER BY `id` DESC";
        $result = $mysqli->query($sql);
        $rows = $result->num_rows;

        if($rows > 0)
        {
            for ($i; $i < $rows; $i++)
            {
                $result->data_seek($i);
                $tovar = $result->fetch_assoc();

                $content .=
                '<tr>
                  <td>
                    <b>'.$tovar['id'].'</b>
                  </td>
                  <td>
                    <b>'.$tovar['name'].'</b>
                  </td>
                  <td>
                    <b>'.$tovar['code'].'</b>
                  </td>
                  <td>
                    <b>'.$tovar['price'].'</b>
                  </td>
                  <td>
                    <b>'.$tovar['category'].'</b>
                  </td>
                  <td>
                    <b>'.$tovar['server'].'</b>
                  </td>
                  <td class="table-actions">
                    <a href="" data-id="'.$tovar['id'].'" class="table-action table-action-delete deletetovar" data-toggle="tooltip" data-original-title="Удалить">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>';
            }
            echo '<div class="card-header border-0">
              <div class="row">
                <div class="col-6">
                  <h3 class="mb-0">Товары</h3>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th>Номер (ID)</th>
                        <th>Название</th>
                        <th>Название для выдачи на сервере</th>
                        <th>Цена</th>
                        <th>Категория</th>
                        <th>Сервер</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    '.$content.'
                </tbody>
              </table>
            </div>';
        }
        else {
            echo
            '<div class="card-header border-0">
              <div class="row">
                <div class="col-6">
                  <h3 class="mb-0">Список пуст</h3>
                </div>
              </div>
            </div>';
        }

        ?>
    </div>
</div>
