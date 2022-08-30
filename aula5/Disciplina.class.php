<?php
    class Disciplina{
        private $nome;
        private $carga_horaria;
        private $ementa;

        //construtor da classe
        public function __construct($nome, $carga_horaria, $ementa){
            $this->nome = $nome;
            $this->carga_horaria = $carga_horaria;
            $this->ementa = $ementa;
            //echo "<br /> classe criada";
        }

        //getters e setters
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getCarga_horaria(){
            return $this->carga_horaria;
        }
        public function setCarga_horaria($carga_horaria){
            $this->carga_horaria = $carga_horaria;
        }

        public function getEmenta(){
            return $this->ementa;
        }
        public function setEmenta($ementa){
            $this->ementa = $ementa;
        }

        //exibir dados
        public function toString(){

            // echo '<br /><strong>O nome da '.__CLASS__.' é: </strong>'.$this->nome;
            // echo '<br /><strong>A carga horária da '.__CLASS__.' é: </strong>'.$this->carga_horaria;
            // echo '<br /><strong>A ementa da '.__CLASS__.' é: </strong>'.$this->ementa.'<br />';

            echo "<br />";
            echo "<h4>".__CLASS__."</h4>";
            echo "<table border='1'>
                <tr>
                    <td><strong>Nome</strong></td>
                    <td>$this->nome</td>
                </tr>
                <tr>
                    <td><strong>Carga Horária</strong></td>
                    <td>$this->carga_horaria</td>
                </tr>
                <tr>
                    <td><strong>Ementa</strong></td>
                    <td>$this->ementa</td>
                </tr>
            </table>";
        }
    }

    //instanciando um objeto
    $logica = new Disciplina("Lógica", 160, "Algoritmos");
    $ltp = new Disciplina("Programação", 320, "Java");
    $logica->toString();
    $ltp->toString();