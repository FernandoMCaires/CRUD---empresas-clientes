<?php

require_once 'models/Cliente.php';
require_once 'session.php';


class ClienteController
{

    private function verificarAutentificacao()
    {
        verificarSessao();
    }

    public function cadastrar() {
        //verifica se empresa está logada
        $this->verificarAutentificacao(); 
        $clientes = new Cliente;
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $genero = $_POST['genero'];
            $data_nasc = $_POST['data_nasc'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $endereco = $_POST['endereco'];
            
            
            if (isset($_SESSION['empresa_logada']) && is_int($_SESSION['empresa_logada'])) {
                $empresa_id = $_SESSION['empresa_logada'];
            } else {
                echo "Erro: empresa não está logada.";
                return; 
            }
            
            
            $clientes->cadastrar($nome, $email, $telefone, $genero, $data_nasc, $cidade, $estado, $endereco, $empresa_id);
            header('Location: /company/empresas/listar');
            exit();
        }
    
        require('views/Clientes/cadastroClientes.php');
    }
    
    
    
    

    public function editar($id)
    {
        $this->verificarAutentificacao();
        $clientes = new Cliente;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $genero = $_POST['genero'];
            $data_nasc = $_POST['data_nasc'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $endereco = $_POST['endereco'];

            $clientes->atualizar($id, $nome, $email, $telefone, $genero, $data_nasc, $cidade, $estado, $endereco);
            header('Location: /company/empresas/listar');
            exit();
        }

        $clienteDados = $clientes->listarPorIdCliente($id);
        require('views/Clientes/editarCliente.php');
    }

    public function excluir($id)
    {
        $this->verificarAutentificacao();

        $cliente = new Cliente();
        if ($cliente->delete($id)) {
            header('Location: /company/empresas/listar');
            exit();
        } else {
            echo "Erro ao excluir cliente.";
        }
    }
}
