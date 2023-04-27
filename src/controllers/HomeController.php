<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function fotos(){
        $this->render('fotos');
     
    }

    public function foto($parametros){
        echo "Acessando a foto ".$parametros["id"];
    }

    public function index() {

        $post = [
            ['titulo'=>'Titulo de Teste 1', 'corpo'=> 'corpo de teste 1'],
            ['titulo'=>'Titulo de Teste 2', 'corpo'=> 'corpo de teste 2'],
            ['titulo'=>'Titulo de Teste 3', 'corpo'=> 'corpo de teste 3'],
        ];

        $nome ="Luiz";
        $idade=22;

        $this->render('home', [
            'nome'=>$nome,
            'idade'=>$idade,
            'post'=>$post
        ]);

    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

   

}