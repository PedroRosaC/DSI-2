<?php

class Usuario {
    protected $id;
    protected $nome;
    protected $data_nascimento;
    protected $senha;
    protected $email;

    // Construtor para inicializar os atributos
    public function __construct() {
        
    }
    public function insert(){
        require_once 'ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'INSERT INTO usuario values (0,"'. $this->nome . '","'. $this->email .'", "'. $this->senha .'" , "'. $this->data_nascimento .'")';

        $db->Executar($sql);
        $db->Desconectar();
        return $db->total;


    }
    
    // Métodos para acessar (get) e modificar (set) os atributos

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDataNascimento() {
        return $this->data_nascimento;
    }

    public function setDataNascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    
}

?>