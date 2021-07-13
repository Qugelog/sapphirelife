<?php
    session_start();

    define("moonstudio", true);
    define('SERVER_DIR', dirname ( __FILE__ ));
    define('ENGINE_DIR', SERVER_DIR.'/engine');
    define('PUBLIC_DIR', SERVER_DIR.'/public');
    define('ASSETS_DIR', SERVER_DIR.'/assets');
    define('ADMIN_DIR', SERVER_DIR.'/adminpanel');

    require_once ENGINE_DIR.'/config.php';
    require_once ENGINE_DIR.'/main.php';

    if($mysqli->connect_errno) return exit("Подключение к БД не удалось");

    if($url[0] == 'admin')
    {
        if(IfAdmin())
        {
            require_once ADMIN_DIR.'/index.php';
        }
        else
        {
            require_once ADMIN_DIR.'/login.php';
        }
    }
    else require_once $page;
?>
