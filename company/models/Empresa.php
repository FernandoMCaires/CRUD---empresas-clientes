<?php 

require_once 'config/configurador.php';

class Empresa{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Configurador::conectar();
    }

    public function autenticar($email, $senha){
        $stmt = $this->pdo->prepare("SELECT * FROM empresas where email = ? AND senha = ?");
        $stmt->execute([$email, $senha]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function cadastrar($nome, $email, $senha){
        $stmt = $this->pdo->prepare("INSERT INTO empresas (nome, email, senha) VALUES(?, ?, ?)");
        return $stmt->execute([$nome, $email, $senha]);
    }


    public function atualizar($id, $nome, $email ) {
        $stmt = $this->pdo->prepare("UPDATE empresas SET nome = ?, email = ? WHERE id = ?");
        return $stmt->execute([$nome, $email, $id]);
    }
    
    


    public function listarPorId($id){
        $stmt = $this->pdo->prepare("SELECT * FROM empresas WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}