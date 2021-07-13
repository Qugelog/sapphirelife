<? include 'inc/header.php'; ?>
<div class="container-fluid mt--6">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card-wrapper">
        <!-- Form controls -->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <h3 class="mb-0">Настройки сайта</h3>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <form method="post" id="settings">
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlInput1">Название сайта</label>
                <input type="text" name="ServerName" class="form-control" id="exampleFormControlInput1" value="<?=$config['ServerName']?>">
              </div>
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlInput1">Группа ВКонтакте</label>
                <input type="text" name="VkGroup" class="form-control" id="exampleFormControlInput1" value="<?=$config['VkGroup']?>">
              </div>

              <div class="form-group">
                  <label class="form-control-label" for="exampleFormControlSelect1">Система оплаты</label>
                  <select name="pay_system" class="form-control" id="exampleFormControlSelect1">
                  <?
                    if($config['pay_system'] == 'unitpay') {
                        echo
                        '<option value="unitpay" selected>UnitPay</option>
                        <option value="freekassa">FreeKassa</option>';
                    }
                    else {
                        echo
                        '<option value="unitpay">UnitPay</option>
                        <option value="freekassa" selected>FreeKassa</option>';
                    }
                  ?>
                  </select>
              </div>


              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlInput1">Publickey из UnitPay/Freekassa</label>
                <input type="text" name="MerchantID" class="form-control" id="exampleFormControlInput1" value="<?=$config['MerchantID']?>">
              </div>
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlInput1">Секретное слово из UnitPay/Freekassa</label>
                <input type="text" name="SecretWord" class="form-control" id="exampleFormControlInput1" value="<?=$config['SecretWord']?>">
              </div>
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlInput1">Версия API ВК</label>
                <input type="text" name="api_ver" class="form-control" id="exampleFormControlInput1" value="<?=$config['api_ver']?>">
              </div>
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlInput1">Строка, которую должен вернуть сервер (Callback API)</label>
                <input type="text" name="vktoken" class="form-control" id="exampleFormControlInput1" value="<?=$config['vktoken']?>">
              </div>
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlInput1">Ключ доступа сообщества (0 - выкл)</label>
                <input type="text" name="vksecret" class="form-control" id="exampleFormControlInput1" value="<?=$config['vksecret']?>">
              </div>
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlInput1">ID профилей ВКонтакте через запятую (например: 0000000,0000001,0000002)</label>
                <input type="text" name="vkid" class="form-control" id="exampleFormControlInput1" value="<?=$config['vkid']?>">
              </div>
              <button class="btn btn-primary" type="submit">Сохранить</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
