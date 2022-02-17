<?php
class contas {
    private $id;
    private $titular;
    private $agencia;
    private $conta;
    private $senha;
    private $saldo;
    private $valor;

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getTitular() {
        return $this->titular;
    }
    public function setTitular($titular) {
        $this->titular = $titular;
    }
    public function getAgencia() {
        return $this->agencia;
    }
    public function setAgencia($agencia) {
        $this->agencia = $agencia;
    }
    public function getConta() {
        return $this->conta;
    }
    public function setConta($conta) {
        $this->conta = $conta;
    }
    public function getSenha() {
        return $this->senha;
    }
    public function setSenha($senha) {
        $this->senha = $senha;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
    public function getValor() {
        return $this->valor;
    }
    public function setValor($valor) {
        $this->valor = $valor;
    }
}