<? include 'inc/header.php'; ?>
<link rel="stylesheet" href="<?=$realdir?>/adminpanel/froala/froala_editor.pkgd.min.css">
<script src="<?=$realdir?>/adminpanel/froala/froala_editor.pkgd.min.js"></script>
<script src="<?=$realdir?>/adminpanel/froala/ru.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<div class="container-fluid mt--6">
  <div class="row justify-content-center">
    <div class="col-lg-12">
      <div class="card-wrapper">
        <!-- Form controls -->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <h3 class="mb-0">Добавление страницы</h3>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <form id="addpage" method="post">
                <div class="form-group">
                  <label class="form-control-label" for="exampleFormControlInput2">Название</label>
                  <input type="text" name="name" class="form-control" id="exampleFormControlInput2" required>
                </div>
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlInput1">Путь (например: info)</label>
                <input type="text" name="url" class="form-control" id="exampleFormControlInput1" required>
              </div>
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlTextarea1">Контент</label>
                <textarea type="text" name="content" id="froala-textarea" class="form-control" id="exampleFormControlTextarea1"></textarea>
              </div>
              <button class="btn btn-primary" type="submit">Добавить</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
var editor = new FroalaEditor('#froala-textarea', {
    key: "1C%kZV[IX)_SL}UJHAEFZMUJOYGYQE[\\ZJ]RAe(+%$==",
    attribution: false,
    language: 'ru',
    imageUploadURL: realdir + '/upload_image.php',
    imageUploadParams: {
        id: 'my_editor'
    },
    fontFamily: {
      "Roboto,sans-serif": 'Roboto',
      "Montserrat,sans-serif": 'Montserrat',
      "Open Sans,sans-serif": 'Open Sans'
    },
    fontFamilySelection: true
});
</script>
