<?
    if( !@$_SERVER["HTTP_X_REQUESTED_WITH"] ){
        header('HTTP/1.1 403 Forbidden');
        exit;
    }
?>
