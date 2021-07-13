<? include 'inc/header.php'; ?>
<div class="container-fluid mt--6">
    <div class="card">
        <?
        $sql = "SELECT * FROM `promo` ORDER BY `id` DESC";
        $result = $mysqli->query($sql);
        $rows = $result->num_rows;

        if($rows > 0)
        {
            for ($i; $i < $rows; $i++)
            {
                $result->data_seek($i);
                $server = $result->fetch_assoc();

                if($server['for_tovar'] == 'all') $for_tovar = "Все товары";
                $sfor_tovar = explode(':', $server['for_tovar']);
                if($sfor_tovar[0] == 'cat') $for_tovar = "Категория: ".$sfor_tovar[1];
                if($sfor_tovar[0] == 'tovar') $for_tovar = "Товар: ".$sfor_tovar[1];


                $content .=
                '<tr>
                  <td>
                    <b>'.$server['id'].'</b>
                  </td>
                  <td>
                    <b>'.$server['name'].'</b>
                  </td>
                  <td>
                    <b>'.$server['percent'].'</b>
                  </td>
                  <td>
                    <b>'.$for_tovar.'</b>
                  </td>
                  <td class="table-actions">
                    <a href="" data-id="'.$server['id'].'" class="table-action table-action-delete deletepromo" data-toggle="tooltip" data-original-title="Удалить">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>';
            }
            echo '<div class="card-header border-0">
              <div class="row">
                <div class="col-6">
                  <h3 class="mb-0">Промо-коды</h3>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                       <th>Номер (ID)</th>
                       <th>Название</th>
                       <th>Процент</th>
                       <th>На какие товары действует</th>
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
