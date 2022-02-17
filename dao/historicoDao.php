<?php
    require 'models/historico.php';

    class historicoDao {
        private $pdo;

        public function __construct(PDO $driver) {
            $this->pdo = $driver;
        }
    
        function getHistorico(historico $h){
            $info = array();

            $idConta = $h->getIdConta();

            $sql = "SELECT * FROM historico WHERE id_conta = '$idConta'";
            $sql = $this->pdo->query($sql);

            if($sql->rowCount() > 0){
                $info = $sql->fetchAll();
            }

            return $info;
        }

        function setHistorico(historico $h){
            $info = array();

            $idConta = $h->getIdConta();
            $tipo = $h->getTipo();
            $valor = $h->getValor();

            $sql = "INSERT INTO historico (id_conta, tipo, valor, data_operacao) VALUES ('$idConta', '$tipo', '$valor', NOW())";
            $this->pdo->query($sql);

            return $info;
        }
    }
?>