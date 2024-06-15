<?php
class Usuario{
    private $cpf;
    private $nome;
    private $email;
    private $senha;
    private $telefone;
    private $genero;
    private $data_nasc;

    public function getCpf() {
        return $this->cpf;
    }
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }
    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getTelefone() {
        return $this->telefone;
    }
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getGenero() {
        return $this->genero;
    }
    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function getDataNasc() {
        return $this->data_nasc;
    }
    public function setDataNasc($data_nasc) {
        $this->data_nasc = $data_nasc;
    }
}
?>