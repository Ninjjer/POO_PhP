<?php 

    abstract class veiculo{
        //atributos = são características que nossos objetos terão
        public $nome;
        public $ano;
        public $valor;        

        public function __construct($nome, $ano, $valor){
            $this->nome = $nome;
            $this->ano = $ano;
            $this->valor = $valor;
        }

        public function getNome(){
            return $this->nome;
        }

        abstract protected function Acelerar();

        abstract protected function Freiar();
        // métodos = ações que nossos objetos poderão executar
        /*public function cadastrar(){
            if($this->nome == "Civic"){
            echo "O carro " . $this->nome . " foi cadastrado";
            }*/
    }

    class carro extends veiculo{
        /*
        public function abrirPorta(){
            echo "Abrir porta";
        }*/
        public function Acelerar(){
            echo "Vrom!";
        }

        public function Freiar(){
            echo "Tum!";
        }
    }

    class moto extends veiculo{
        /*public function darGrau(){
            echo "Empinar a moto";
        }*/
        public function Acelerar(){
            echo "Ron! Ron!";
        }
        
        public function Freiar(){
            echo "Tum!";
        }
    }

    class barco extends veiculo{
        public function Acelerar(){
            echo "Acelera aí";
        }
        public function Freiar(){
            echo "Só parar de acelerar";
        }
    }

    class bicicleta extends veiculo{
        public function Acelerar(){
            echo "Pedala!";
        }
        public function Freiar(){
            echo "Aperte o guidão";
        }
    }

    class skate extends veiculo{
        public function Acelerar(){
            echo "Empurre o solo com o pé";
        }
        public function Freiar(){
            echo "Só pular do skate pra freiar";
        }
    }

    class aviao extends veiculo{
        public function Acelerar(){
            echo "É igual mexer com linux para acelerar";
        }
        public function Freiar(){
            echo "Use a aerodinâmica para freiar";
        }
    }

    class elevador extends veiculo{
        public function Acelerar(){
            echo "Aperte o botão para locomover";
        }    
        public function Freiar(){
            echo "Só Deus freia isso aqui";
        }
    }

echo "---Carro---<br><br>";
$carro = new carro("Civic", 2023, 105000);
$carro -> Acelerar();
echo "<br>";
$carro -> Freiar();

echo "<hr> ---Moto--- <br><br>";
$moto = new moto("Pop 100", 2010, 10200);
$moto -> Acelerar();
echo "<br>";
$moto -> Freiar();

echo "<hr> ---Barco--- <br><br>";

$barco = new barco("Astray", 2020, 600000);
$barco -> Acelerar();
echo "<br>";
$barco -> Freiar();

echo "<hr> ---Bicicleta--- <br><br>";

$bicicleta = new bicicleta("BMX", 2022, 15000);
$bicicleta -> Acelerar();
echo "<br>";
$bicicleta -> Freiar();

echo "<hr> ---Skate--- <br><br>";

$skate = new skate("Chorão", 2018, 1500000);
$skate -> Acelerar();
echo "<br>";
$skate -> Freiar();

echo "<hr> ---Avião--- <br><br>";

$aviao = new aviao("Flying-V", 2020, 2000000);
$aviao -> Acelerar();
echo "<br>";
$aviao -> Freiar();

echo "<hr> Vez do elevador <br><br>";

$elevador = new elevador("Elevador", 2010, 400000);
$elevador -> Acelerar();
echo "<br>";
$elevador -> Freiar();
