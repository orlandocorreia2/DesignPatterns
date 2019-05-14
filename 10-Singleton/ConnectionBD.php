<?php


//Singleton
class ConnectionBD
{
    public $string_connection;

    //Guarda internamente a instância
    private static $instance;

    //Esconde o construtor
    protected function __construct() {}

    //Método que retorna singleton
    public static function getInstance()
    {
        //Garante apenas uma instância de ConnectionDB
        self::$instance = self::$instance ?? new ConnectionBD();
        return self::$instance;
    }


    public function open()
    {
        echo 'Abrindo conexão com o banco ' . $this->string_connection .'<br/>';
    }
}