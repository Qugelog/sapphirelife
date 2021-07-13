<? include 'inc/header.php'; ?>
<div class="container-fluid mt--6">
    <div class="card">
        <?
        $sql = "SELECT * FROM `otziv` ORDER BY `id` DESC";
        $result = $mysqli->query($sql);
        $rows = $result->num_rows;

        if($rows > 0)
        {
            for ($i; $i < $rows; $i++)
            {
                $result->data_seek($i);
                $server = $result->fetch_assoc();

                $content .=
                '<tr>
                  <td>
                    <b>'.$server['id'].'</b>
                  </td>
                  <td>
                    <b>'.$server['name'].'</b>
                  </td>
                  <td>
                    <b>'.$server['stars'].'</b>
                  </td>
                  <td>
                    <b class="show_otziv" style="cursor: pointer;" data-id="'.$server['id'].'">
                      <i class="far fa-eye text-primary"></i>
                    </b>
                  </td>
                  <td class="table-actions">
                    <a href="" data-id="'.$server['id'].'" class="table-action table-action-delete deleteotziv" data-toggle="tooltip" data-original-title="Удалить">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>';
            }
            echo '<div class="card-header border-0">
              <div class="row">
                <div class="col-6">
                  <h3 class="mb-0">Отзывы</h3>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th>Номер (ID)</th>
                        <th>Ник</th>
                        <th>Оценка (1-5)</th>
                        <th>Текст</th>
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
