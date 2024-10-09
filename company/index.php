<?php
session_start();
require_once 'controllers/ClienteController.php';
require_once 'controllers/EmpresaController.php';
require_once 'session.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/company/login':
        $controller = new EmpresaController;
        $controller->login();
        break;

    case '/company/logout':
        $controller = new EmpresaController;
        $controller->logout();
        break;


    case '/company/empresas/cadastrar':
        $controller = new EmpresaController;
        $controller->cadastrar();
        break;

    case '/company/empresas/listar':
        $controller = new EmpresaController;
        $controller->listarPorId();
        break;

    case (preg_match('/^\/company\/empresas\/editar\/(\d+)$/', $uri, $matches) ? true : false):
        $controller = new EmpresaController;
        $controller->editar($matches[1]);
        break;



    case '/company/clientes/cadastro':
        $controller = new ClienteController();
        $controller->cadastrar();
        break;

    case (preg_match('/^\/company\/clientes\/editar\/(\d+)$/', $uri, $matches) ? true : false):
        $controller = new ClienteController;
        $controller->editar($matches[1]);
        break;

    case (preg_match('/^\/company\/clientes\/excluir\/(\d+)$/', $uri, $matches) ? true : false):
        $controller = new ClienteController();
        $controller->excluir($matches[1]);
        break;

    default:
        echo "Pagina não encontrada!";
        break;
}
