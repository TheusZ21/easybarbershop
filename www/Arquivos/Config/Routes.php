<?php

return [

    '/easybarber' => ['Home', 'index'],
    '/easybarber/home' => ['Home', 'index'],

    '/easybarber/login' => ['Login', 'index'],
    '/easybarber/login/auth' => ['Login', 'auth'],
    '/easybarber/login/logout' => ['Login', 'logout'],

    '/easybarber/usuarios' => ['Usuarios', 'index'],
    '/easybarber/usuarios/new' => ['Usuarios', 'index'],
    '/easybarber/usuarios/save' => ['Usuarios', 'save'],
    '/easybarber/usuarios/edit/{id}' => ['Usuarios', 'edit'],
    '/easybarber/usuarios/edit_save' => ['Usuarios', 'edit_save'],
    '/easybarber/usuarios/delete/{id}' => ['Usuarios', 'delete'],

    '/easybarber/barbeiros' => ['Barbeiros', 'index'],
    '/easybarber/barbeiros/new' => ['Barbeiros', 'new'],
    '/easybarber/barbeiros/save' => ['Barbeiros', 'save'],
    '/easybarber/barbeiros/edit/{id}' => ['Barbeiros', 'edit'],
    '/easybarber/barbeiros/edit_save' => ['Barbeiros', 'edit_save'],
    '/easybarber/barbeiros/delete/{id}' => ['Barbeiros', 'delete'],

    '/easybarber/servicos' => ['Servicos', 'index'],
    '/easybarber/servicos/new' => ['Servicos', 'new'],
    '/easybarber/servicos/save' => ['Servicos', 'save'],
    '/easybarber/servicos/edit/{id}' => ['Servicos', 'edit'],
    '/easybarber/servicos/edit_save' => ['Servicos', 'edit_save'],
    '/easybarber/servicos/delete/{id}' => ['Servicos', 'delete'],

    '/easybarber/agendamentos' => ['Agendamentos', 'index'],
    '/easybarber/agendamentos/new' => ['Agendamentos', 'new'],
    '/easybarber/agendamentos/save' => ['Agendamentos', 'save'],
    '/easybarber/agendamentos/edit/{id}' => ['Agendamentos', 'edit'],
    '/easybarber/agendamentos/edit_save' => ['Agendamentos', 'edit_save'],
    '/easybarber/agendamentos/delete/{id}' => ['Agendamentos', 'delete'],

    '/easybarber/admin' => ['Admin', 'index'],
    '/easybarber/user' => ['User', 'index'],

];