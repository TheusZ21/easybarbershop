<?php

session_start();


/*
|--------------------------------------------------------------------------
| VIEW
|--------------------------------------------------------------------------
*/

function view($viewName, $data = [])
{
    $viewPath = "Views/{$viewName}.php";

    if(file_exists($viewPath)){

        extract($data);

        include($viewPath);

    } else {

        echo "View não encontrada!";
    }
}


/*
|--------------------------------------------------------------------------
| BASE URL
|--------------------------------------------------------------------------
*/

function base_url($path = '')
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        ? "https"
        : "http";

    $host = $_SERVER['HTTP_HOST'];

    return $protocol . "://" . $host . "/easybarber/" . ltrim($path, '/');
}


/*
|--------------------------------------------------------------------------
| REDIRECT
|--------------------------------------------------------------------------
*/

function redirect($path)
{
    header("Location: " . base_url($path));
    exit;
}


/*
|--------------------------------------------------------------------------
| FLASH MESSAGE
|--------------------------------------------------------------------------
*/

function msg($texto, $tipo = 'success')
{
    return '
        <div class="alert alert-'.$tipo.'">
            '.$texto.'
        </div>
    ';
}


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

function auth()
{
    if(!isset($_SESSION['usuario_logado'])){

        redirect('login');
    }
}


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

function admin()
{
    auth();

    if($_SESSION['usuario_logado']->usuarios_nivel != 1){

        redirect('');
    }
}


/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
*/

function user()
{
    auth();

    if($_SESSION['usuario_logado']->usuarios_nivel != 2){

        redirect('');
    }
}