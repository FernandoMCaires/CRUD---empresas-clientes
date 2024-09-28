<?php

require_once 'models/Empresa.php';
require_once 'models/Cliente.php';

class EmpresaController
{
    //Verifica se o usuario está logado, se não, redireciona ele para fazer login
    private function verificarAutentificacao()
    {
        verificarSessao();
    }


    public function login()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $empresa = new Empresa();
        $resultado = $empresa->autenticar($email, $senha);

        if ($resultado) {
            $_SESSION['empresa_logada'] = $resultado['id']; 
            header('Location: /company/empresas/listar');
            exit();
        } else {
            echo "Login inválido!";
        }
    } else {
        require 'views/Empresa/login.php';
    }
}


    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: /company/login');
        exit();
    }


    public function cadastrar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $empresa = new Empresa();

            if ($empresa->cadastrar($nome, $email, $senha)) {
                header('Location: /company/login');
            } else {
                echo "Erro ao cadastrar empresa!";
            }
        } else {
            require 'views/Empresa/cadastro.php';
        }
    }

    public function editar($id)
    {
        $this->verificarAutentificacao();
    
        $empresa = new Empresa();
    
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'] ?? ''; 
            $email = $_POST['email'] ?? ''; 
            $senha = $_POST['senha'] ?? ''; 

    
            if ($nome && $email && $senha) {
                // Tenta atualizar a empresa
                if ($empresa->atualizar($id, $nome, $email, $senha)) {
        
                    header('Location: /company/empresas/listar');
                    exit();
                } else {
                    echo "Erro ao atualizar empresa!"; 
                }
            } 
        }
    
        // Busca os dados da empresa a partir do id
        $empresaDados = $empresa->listarPorId($id);
    
        // Se nao encontrar nada
        if (!$empresaDados) {
            echo "Empresa não encontrada!"; 
            exit();
        }
    
        // Inclui a view 
        require 'views/Empresa/editar.php';
    }
    



    public function listarPorId()
    {
        $this->verificarAutentificacao();

        // Obtem o ID da empresa logada
        $empresaId = $_SESSION['empresa_logada'];

        //Carregar empresa
        $empresa = new Empresa();
        $empresaDados = $empresa->listarPorId($empresaId);

        // Verifica se a empresa foi encontrada
        if ($empresaDados) {
            // Carrega os clientes da empresa
            $cliente = new Cliente();
            $clienteDados = $cliente->listarPorEmpresaId($empresaId); 
        } else {
            $clienteDados = null; 
        }

        require 'views/Empresa/listar.php';
    }
}
