<?php
//Programa para imprimr mensaje de bienvenda
//Creado por GABRIEL GONZALEZ DIAZ
//Fecha:09/Septiembre/2025
//appweb1.php
class texto
{
    public $texto1="Benvenidos a Programacion de App Web";
    public function imprimirtexto()
    {
        echo $this->texto1;
        print $this->texto1;
    }
}
$obj1=new texto;
$obj1->imprimirtexto();
?>
