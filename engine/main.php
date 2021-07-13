<?php

    if(!defined("moonstudio")) return header("Location: /");

    $action = stripslashes(htmlspecialchars(trim($_GET['action'])));

    $url = explode('/', $action);

    if(empty($url[0]))
    {
		$title = $title = ''.$config['ServerName'].'';
        $page = PUBLIC_DIR.'/index.php';
    }
    else
    {
        switch ($url[0])
	    {
            case 'admin':
            {
                if(IfAdmin())
                {
                    if(empty($url[1]))
                    {
                        $title = 'Главная | Админ панель';
                        $page = ADMIN_DIR.'/main.php';
                        $h_path = 'Главная';
                    }
                    else if($url[1] == "settings")
                    {
                        $title = 'Настройки | Админ панель';
                        $page = ADMIN_DIR.'/settings.php';
                        $h_path = 'Настройки';
                    }
                    else if($url[1] == "servers")
                    {
                        $title = 'Серверы | Админ панель';
                        $page = ADMIN_DIR.'/servers.php';
                        $h_path = 'Серверы';
                    }
                    else if($url[1] == "addserver")
                    {
                        $title = 'Добавление сервера | Админ панель';
                        $page = ADMIN_DIR.'/addserver.php';
                        $h_path = 'Добавление сервера';
                    }
                    else if($url[1] == "category")
                    {
                        $title = 'Категории | Админ панель';
                        $page = ADMIN_DIR.'/category.php';
                        $h_path = 'Категории';
                    }
                    else if($url[1] == "addcategory")
                    {
                        $title = 'Добавление категории | Админ панель';
                        $page = ADMIN_DIR.'/addcategory.php';
                        $h_path = 'Добавление категории';
                    }
                    else if($url[1] == "tovar")
                    {
                        $title = 'Товары | Админ панель';
                        $page = ADMIN_DIR.'/tovar.php';
                        $h_path = 'Товары';
                    }
                    else if($url[1] == "addtovar")
                    {
                        $title = 'Добавление товаров | Админ панель';
                        $page = ADMIN_DIR.'/addtovar.php';
                        $h_path = 'Добавление товаров';
                    }
                    else if($url[1] == "promo")
                    {
                        $title = 'Промо-коды | Админ панель';
                        $page = ADMIN_DIR.'/promo.php';
                        $h_path = 'Промо-коды';
                    }
                    else if($url[1] == "addpromo")
                    {
                        $title = 'Добавление промо-кодов | Админ панель';
                        $page = ADMIN_DIR.'/addpromo.php';
                        $h_path = 'Добавление промо-кодов';
                    }
                    else if($url[1] == "pages")
                    {
                        $title = 'Страницы | Админ панель';
                        $page = ADMIN_DIR.'/pages.php';
                        $h_path = 'Страницы';
                    }
                    else if($url[1] == "addpage")
                    {
                        $title = 'Добавление страницы | Админ панель';
                        $page = ADMIN_DIR.'/addpage.php';
                        $h_path = 'Добавление страницы';
                    }
                    else if($url[1] == "editpage")
                    {
                        $title = 'Редактирование | Админ панель';
                        $page = ADMIN_DIR.'/editpage.php';
                        $h_path = 'Редактирование';
                    }
                    else header("Location: /admin");
                }
                else
                {
                    $title = 'Вход | Админ панель';
                    $page = ADMIN_DIR.'/login.php';
                }
                break;
            }
            case 'logout':
            {
                session_unset();
                session_destroy();
                header("Location: /");
                break;
            }
            default:
		    {
                $checkurl = $mysqli->real_escape_string(stripslashes(htmlspecialchars(trim($url[0]))));

                $sql = "SELECT * FROM `pages` WHERE `url` = '{$checkurl}'";
                $result = $mysqli->query($sql);

                $rows = $result->num_rows;
                if($rows == 1)
                {
                	$result->data_seek(0);
                    $dpage = $result->fetch_assoc();

                    $title = $dpage['name'];
                    $page = PUBLIC_DIR.'/custom_page.php';
                }
                else {
                    header("Location: /");
                }
            }
        }
    }
?>
