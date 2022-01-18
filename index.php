<!--    
Definire classe Persona:
    - ATTRIBUTI (private):
        - nome
        - cognome
        - dataNascita (stringa)
    - METODI:
        - costruttore che accetta nome e cognome
        - setter/getter per ogni variabile
        - printFullPerson: che stampa "nome cognome: dataNascita"
        - toString: che ritorna "nome cognome: dataNascita"


Definire classe Employee che eredita da Persona:
    - ATTRIBUTI (private):
        - stipendio
        - dataAssunzione
    - METODI:
        - costruttore che accetta nome, cognome e stipendio
        - setter/getter per variabili 
        - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
        - toString: che ritorna "nome cognome: stipendio (dataAssunzione)" -->


<?php

    class Persona{

        private $nome;
        private $cognome;
        private $dataNascita;

        public function __construct($nome,$cognome){
        $this->setNome($nome);
        $this->setCognome($cognome);
        }

        public function getNome(){
            return $this -> nome;
        }

        public function setNome($nome){
            return $this -> nome = $nome;
        }

        public function getCognome(){
            return $this -> cognome;
        }

        public function setCognome($cognome){
            return $this -> cognome = $cognome;
        }

        public function getData(){
            return $this -> dataNascita;
        }

        public function setData($dataNascita){
            return $this -> dataNascita = $dataNascita;
        }

        public function printFullPerson(){
            return $this -> getNome() . " " . $this -> getCognome() . ": " . $this -> getData()."<br>";
        }

        public function __toString(){
            return $this -> printFullPerson();
        }
    }



    class Employee extends Persona {
        private $stipendio;
        private $dataAssunzione;

        public function __construct($nome,$cognome,$stipendio){
            parent::__construct($nome,$cognome);
            $this -> setStipendio($stipendio);
        }

        public function getStipendio(){
            return $this -> stipendio;
        }
        public function setStipendio($stipendio){
            return $this -> stipendio = $stipendio;
        }

        public function getdataAssunzione(){
            return $this -> dataAssunzione;
        }
        public function setdataAssunzione($dataAssunzione){
            return $this -> dataAssunzione = $dataAssunzione;
        }
        public function printFullEmployee(){
            return $this -> getNome()." ". $this -> getCognome() . ", stipendio: " . $this -> getStipendio() . " (" . $this -> getdataAssunzione() . ")";
        } 

        public function __toString(){
            return $this->printFullEmployee();
        }
    }

    $p1 = new Persona ("Gianni Pio","Pellegrino");
    $p2 = new Persona ("Mirko", "Orlando");

    $p1 -> setData("28/02/2000");
    $p2 -> setData("16/05/1998");
    echo $p1;
    echo $p2 . "<br>";

    $e1 = new Employee("Federico","Paladino", $stipendio);
    $e2 = new Employee("Aurora", "Farina", $stipendio);

    $e1 -> setdataAssunzione("14/10/2022");
    $e2 -> setdataAssunzione("12/05/74");

    $e1 -> setStipendio("2500$");
    $e2 -> setStipendio("34020$");
    
    echo $e1 . "<br>";
    echo $e2;

?>
     