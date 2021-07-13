var $fileInput = $('.file-input');
var $droparea = $('.file-drop-area');

$fileInput.on('dragenter focus click', function() {
  $droparea.addClass('is-active');
});

$fileInput.on('dragleave blur drop', function() {
  $droparea.removeClass('is-active');
});

$fileInput.on('change', function() {
  var filesCount = $(this)[0].files.length;
  var $textContainer = $(this).prev();

  if (filesCount === 1) {
    var fileName = $(this).val().split('\\').pop();
    $textContainer.text(fileName);
  } else {
    $textContainer.text(filesCount + ' файл выбран');
  }
});
