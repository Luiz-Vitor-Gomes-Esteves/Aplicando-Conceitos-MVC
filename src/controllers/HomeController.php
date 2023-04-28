<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;


class HomeController extends Controller {

    //Função mostrar todos os dados do BD 
    public function index()
    {
        $usuarios = Usuario::select()->execute();
        $this->render('home',[
            'usuarios'=>$usuarios      
        ]);
    }

   

}