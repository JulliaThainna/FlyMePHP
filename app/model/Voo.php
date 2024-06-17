<?php
class Voo{
    private $id;
    private $companhia_aerea_id;
    private $origem;
    private $destino;
    private $data_horario;
    private $duracao;
    private $assentos;
    private $valor;

   
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function getCompanhiaAereaId() {
        return $this->companhia_aerea_id;
    }
    public function setCompanhiaAereaId($companhia_aerea_id) {
        $this->companhia_aerea_id = $companhia_aerea_id;
    }

    public function getOrigem() {
        return $this->origem;
    }
    public function setOrigem($origem) {
        $this->origem = $origem;
    }

    public function getDestino() {
        return $this->destino;
    }
    public function setDestino($destino) {
        $this->destino = $destino;
    }

    public function getDataHorario() {
        return $this->data_horario;
    }
    public function setDataHorario($data_horario) {
        $this->data_horario = $data_horario;
    }

    public function getDuracao() {
        return $this->duracao;
    }
    public function setDuracao($duracao) {
        $this->duracao = $duracao;
    }

    public function getAssentos() {
        return $this->assentos;
    }
    public function setAssentos($assentos) {
        $this->assentos = $assentos;
    }

    public function getValor() {
        return $this->valor;
    }
    public function setValor($valor) {
        $this->valor = $valor;
    }
}
?>