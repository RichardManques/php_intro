<?php
    namespace controllers;

    class ControlSueldo{
        public $sueldo;
        public $desc;
        
        public function __construct()
        {
            $this-> sueldo = $_POST['sueldo'];
            $this-> desc = $_POST['desc'];
        }

        public function calcular(){
            session_start();

            if(!is_numeric($this->sueldo)){
                $_SESSION['msg'] = "Sueldo debe ser un número";
                header("Location:../form_sueldo.php");
                return;
            }
            $descuento = $this->sueldo*$this->desc;
            $sueldo_final = $this->sueldo - $descuento;

            $_SESSION['resp'] = "El sueldo liquido es : $$sueldo_final <br>
            El descuento es: $$descuento";
            header("Location:../form_sueldo.php");
        }
    }
    //llamar al calcular
    $obj = new ControlSueldo();
    $obj->calcular();
?>