<?php
class historico {
    private $id;
    private $idConta;
    private $tipo;
    private $valor;
    private $dataOpe;

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function getIdConta() {
        return $this->idConta;
    }
    public function setIdConta($idConta) {
        $this->idConta = $idConta;
    }

    public function getTipo() {
        return $this->tipo;
    }
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getValor() {
        return $this->valor;
    }
    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getDataOpe() {
        return $this->dataOpe;
    }
    public function setDataOpe($dataOpe) {
        $this->dataOpe = $dataOpe;
    }
}