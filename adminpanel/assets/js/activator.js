var url = $(location).attr('pathname').replace(/\//g, '');

function SetActive(name, number) {
    $('#a_'+name).addClass('active');
    $('#a_'+name).attr('aria-expanded', 'true');
    $('#navbar-'+name).addClass('show');
    $('#a'+number+'_'+name).addClass('active');
}

switch(url) {
    case 'admin': {
        $('#a_admin').addClass('active');
        break;
    }
    case 'admin'+'servers': {
        SetActive('servers', '1');
        break;
    }
    case 'admin'+'addserver': {
        SetActive('servers', '2');
        break;
    }
    case 'admin'+'category': {
        SetActive('category', '1');
        break;
    }
    case 'admin'+'addcategory': {
        SetActive('category', '2');
        break;
    }
    case 'admin'+'tovar': {
        SetActive('tovar', '1');
        break;
    }
    case 'admin'+'addtovar': {
        SetActive('tovar', '2');
        break;
    }
    case 'admin'+'otziv': {
        SetActive('otziv', '1');
        break;
    }
    case 'admin'+'addotziv': {
        SetActive('otziv', '2');
        break;
    }
    case 'admin'+'promo': {
        SetActive('promo', '1');
        break;
    }
    case 'admin'+'addpromo': {
        SetActive('promo', '2');
        break;
    }
    case 'admin'+'pages': {
        SetActive('pages', '1');
        break;
    }
    case 'admin'+'addpage': {
        SetActive('pages', '2');
        break;
    }
    case 'admin'+'settings': {
        $('#a_settings').addClass('active');
        break;
    }
}
