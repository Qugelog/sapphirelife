$('#settings').ajaxForm({
	url: realdir + '/adminpanel/ajax/settings.php',
	dataType: 'text',
	success: function(data) {
        data = $.parseJSON(data);
        Swal.fire(data.title,  data.message,  data.status);
	},
});
$(document).on( 'click', '.deletecategory', function() {
    event.preventDefault();

    Swal.fire({
        title: "Удалить?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#5e72e4',
        confirmButtonText: 'Удалить',
        cancelButtonText: 'Отмена'
    }).then((result) => {
        if (result.value) {
            var id = $(this).data("id")
            $.ajax({
                url: realdir + '/adminpanel/ajax/deletecategory.php',
                type: 'POST',
                dataType: "text",
                data: {id: id},
                success: function(data){
                    Swal.fire('Успех', 'Успшено удален!', 'success');
                    setTimeout(function(){
                        window.location.href = realdir + "/admin/category";
                    }, 1500);
                }
            });
        }
    });
});
$(document).on( 'click', '.deletetovar', function() {
    event.preventDefault();

    Swal.fire({
        title: "Удалить товар?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#5e72e4',
        confirmButtonText: 'Удалить',
        cancelButtonText: 'Отмена'
    }).then((result) => {
        if (result.value) {
            var id = $(this).data("id")
            $.ajax({
                url: realdir + '/adminpanel/ajax/deletetovar.php',
                type: 'POST',
                dataType: "text",
                data: {id: id},
                success: function(data){
                    Swal.fire('Успех', 'Успшено удален!', 'success');
                    setTimeout(function(){
                        window.location.href = realdir + "/admin/tovar";
                    }, 1500);
                }
            });
        }
    });
});
$(document).on( 'click', '.deleteserver', function() {
    event.preventDefault();

    Swal.fire({
        title: "Удалить сервер?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#5e72e4',
        confirmButtonText: 'Удалить',
        cancelButtonText: 'Отмена'
    }).then((result) => {
        if (result.value) {
            var id = $(this).data("id")
            $.ajax({
                url: realdir + '/adminpanel/ajax/deleteserver.php',
                type: 'POST',
                dataType: "text",
                data: {id: id},
                success: function(data){
                    Swal.fire('Успех', 'Успшено удален!', 'success');
                    setTimeout(function(){
                        window.location.href = realdir + "/admin/servers";
                    }, 1500);
                }
            });
        }
    });
});
$(document).on( 'click', '.deleteotziv', function() {
    event.preventDefault();

    Swal.fire({
        title: "Удалить отзыв?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#5e72e4',
        confirmButtonText: 'Удалить',
        cancelButtonText: 'Отмена'
    }).then((result) => {
        if (result.value) {
            var id = $(this).data("id")
            $.ajax({
                url: realdir + '/adminpanel/ajax/deleteotziv.php',
                type: 'POST',
                dataType: "text",
                data: {id: id},
                success: function(data){
                    Swal.fire('Успех', 'Успшено удален!', 'success');
                    setTimeout(function(){
                        window.location.href = realdir + "/admin/otziv";
                    }, 1500);
                }
            });
        }
    });
});
$(document).on( 'click', '.deletepromo', function() {
    event.preventDefault();

    Swal.fire({
        title: "Удалить?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#5e72e4',
        confirmButtonText: 'Удалить',
        cancelButtonText: 'Отмена'
    }).then((result) => {
        if (result.value) {
            var id = $(this).data("id")
            $.ajax({
                url: realdir + '/adminpanel/ajax/deletepromo.php',
                type: 'POST',
                dataType: "text",
                data: {id: id},
                success: function(data){
                    Swal.fire('Успех', 'Успшено удален!', 'success');
                    setTimeout(function(){
                        window.location.href = realdir + "/admin/promo";
                    }, 1500);
                }
            });
        }
    });
});
$(document).on( 'click', '.deletepage', function() {
    event.preventDefault();

    Swal.fire({
        title: "Удалить?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#5e72e4',
        confirmButtonText: 'Удалить',
        cancelButtonText: 'Отмена'
    }).then((result) => {
        if (result.value) {
            var id = $(this).data("id")
            $.ajax({
                url: realdir + '/adminpanel/ajax/deletepage.php',
                type: 'POST',
                dataType: "text",
                data: {id: id},
                success: function(data){
                    Swal.fire('Успех', 'Успшено удален!', 'success');
                    setTimeout(function(){
                        window.location.href = realdir + "/admin/pages";
                    }, 1500);
                }
            });
        }
    });
});
$('#addtovar').ajaxForm({
    url: realdir + '/adminpanel/ajax/addtovar.php',
    dataType: 'text',
    success: function(data) {
        data = $.parseJSON(data);
        Swal.fire(data.title, data.message, data.status);
        if(data.status == "success")
        {
            setTimeout(function () {
                window.location.href = realdir + "/admin/tovar";
            }, 1500);
        }
    },
});
$('#addserver').ajaxForm({
    url: realdir + '/adminpanel/ajax/addserver.php',
    dataType: 'text',
    success: function(data) {
        data = $.parseJSON(data);
        Swal.fire(data.title, data.message, data.status);
        if(data.status == "success")
        {
            setTimeout(function () {
                window.location.href = realdir + "/admin/servers";
            }, 1500);
        }
    },
});
$('#addcategory').ajaxForm({
    url: realdir + '/adminpanel/ajax/addcategory.php',
    dataType: 'text',
    success: function(data) {
        data = $.parseJSON(data);
        Swal.fire(data.title, data.message, data.status);
        if(data.status == "success")
        {
            setTimeout(function () {
                window.location.href = realdir + "/admin/category";
            }, 1500);
        }
    },
});
$('#addotziv').ajaxForm({
    url: realdir + '/adminpanel/ajax/addotziv.php',
    dataType: 'text',
    success: function(data) {
        data = $.parseJSON(data);
        Swal.fire(data.title, data.message, data.status);
        if(data.status == "success")
        {
            setTimeout(function () {
                window.location.href = realdir + "/admin/otziv";
            }, 1500);
        }
    },
});
$('#addpromo').ajaxForm({
    url: realdir + '/adminpanel/ajax/addpromo.php',
    dataType: 'text',
    success: function(data) {
        data = $.parseJSON(data);
        Swal.fire(data.title, data.message, data.status);
        if(data.status == "success")
        {
            setTimeout(function () {
                window.location.href = realdir + "/admin/promo";
            }, 1500);
        }
    },
});
$('#addpage').ajaxForm({
    url: realdir + '/adminpanel/ajax/addpage.php',
    dataType: 'text',
    success: function(data) {
        data = $.parseJSON(data);
        Swal.fire(data.title, data.message, data.status);
        if(data.status == "success")
        {
            setTimeout(function () {
                window.location.href = realdir + "/admin/pages";
            }, 1500);
        }
    },
});
$('#editpage').ajaxForm({
    url: realdir + '/adminpanel/ajax/editpage.php',
    dataType: 'text',
    success: function(data) {
        data = $.parseJSON(data);
        Swal.fire(data.title, data.message, data.status);
        if(data.status == "success")
        {
            setTimeout(function () {
                window.location.href = realdir + "/admin/pages";
            }, 1500);
        }
    },
});
$(document).on( 'click', '.show_otziv', function() {
    var id = $(this).data("id");
    $.ajax({
        url: realdir + '/adminpanel/ajax/showotziv.php',
        type: 'POST',
        dataType: "text",
        data: {id: id},
        success: function(data){
            data = $.parseJSON(data);
            Swal.fire(data.title, data.message, data.status);
        }
    });
});
