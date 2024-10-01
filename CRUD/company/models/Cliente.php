<?php 

require_once 'config/configurador.php';

class Cliente {
    private $pdo;

    public function __construct()
    {
        $this->pdo = Configurador::conectar();
    }
    
    public function cadastrar($nome, $email, $telefone, $genero, $data_nasc, $cidade, $estado, $endereco, $empresa_id) {
        $stmt = $this->pdo->prepare("INSERT INTO clientes (nome, email, telefone, genero, data_nasc, cidade, estado, endereco, empresa_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$nome, $email, $telefone, $genero, $data_nasc, $cidade, $estado, $endereco, $empresa_id]);
    }

    public function atualizar($id, $nome, $email, $telefone, $genero, $data_nasc, $cidade, $estado, $endereco){
        $stmt = $this->pdo->prepare("UPDATE clientes SET nome = ?, email = ?, telefone = ?, genero = ?, data_nasc = ?, cidade = ?, estado = ?, endereco = ? WHERE id = ?");
        return $stmt->execute([$nome, $email, $telefone, $genero, $data_nasc, $cidade, $estado, $endereco, $id]);
    }

    public function delete($id){
        $stmt = $this->pdo->prepare("DELETE FROM clientes WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function listarPorEmpresaId($empresaId)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM clientes WHERE empresa_id = ?");
        $stmt->execute([$empresaId]);
    
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        return $resultado ?: null; 
    }

    // Busca um cliente específico por seu ID
    public function listarPorIdCliente($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM clientes WHERE id = ?");
        $stmt->execute([$id]);

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC); 
        return $resultado ?: null;
    }
}
