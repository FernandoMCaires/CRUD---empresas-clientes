<?php

require_once 'config/configurador.php';

class Configurador
{
    private static $pdo;


    public static function conectar()
    {
        if (!isset(self::$pdo)) {
            try {
                self::$pdo = new PDO('mysql:host=autorack.proxy.rlwy.net;port=41293;dbname=railway', 'root', 'NdyaSGISTppiBLCehoYfvwBByQEINIlC');
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Erro de conexão: ' . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}
