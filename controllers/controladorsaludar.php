<?php

namespace controllers;

class Controlador{
    public $nombre;
    public $edad;

    public function __construct()
    {
        //rescatar los nombre del formulario y asociarlos a las variables de arriba
        $this->nombre = $_POST['nombre'];
        $this->edad = $_POST['edad'];
    }
    public function saludar(){
        //crear la session
        session_start();
        if(!is_numeric($this->edad)){
            $_SESSION['msg'] = "La edad debe ser númerica";
            header('Location:../form.php');//redirecciona al formulario
            return;
        }
        $resp= "Hola $this->nombre tienes $this->edad años";

        
        //enviar la respuesta al formulario
        $_SESSION['msg'] = $resp;
        header('Location:../form.php');//redirecciona al formulario
    }
}

$obj = new Controlador();
$obj->saludar();