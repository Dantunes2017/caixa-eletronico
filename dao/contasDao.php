<?php
    require 'models/contas.php';

    class contasDao {
        private $pdo;

        public function __construct(PDO $driver) {
            $this->pdo = $driver;
        }
    

        function logar(contas $c){
            $agencia = $c->getAgencia();
            $conta = $c->getConta();
            $senha = $c->getSenha();

            $sql = "SELECT * FROM contas WHERE agencia = '$agencia' AND conta = '$conta' AND senha = '$senha'";
            $sql = $this->pdo->query($sql);

            if($sql->rowCount() > 0) {
                $info = $sql->fetch();
                $_SESSION['conta'] = $info['id'];

                header("Location: index.php");
                exit;
            }   
        }

        function getInfo(contas $c){
            $id = $c->getId();
            $info = array();
            
            $sql = "SELECT * FROM contas WHERE id = '$id'";
            $sql = $this->pdo->query($sql);

            if($sql->rowCount() > 0){
                $info = $sql->fetch();
            }

            return $info;
        }

        function retirada(contas $c){
            $id = $c->getId();
            $valor = $c->getValor();

            $sql = "UPDATE contas SET saldo = saldo - '$valor' WHERE id = '$id'";
            $this->pdo->query($sql);
        }

        function deposito(contas $c){
            $id = $c->getId();
            $valor = $c->getValor();

            $sql = "UPDATE contas SET saldo = saldo + '$valor' WHERE id = '$id'";
            $this->pdo->query($sql); 
        }
    }
?>