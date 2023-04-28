<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuariosController extends Controller {

   public function add()
   {
      $this->render('add');
   }

   //Ações de recebimento do formulario
   public function addAction()
   {
      $name = filter_input(INPUT_POST,'name');
      $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);

      if($name && $email){

         //Procurar na tabela quem tem esse email através do Hydrahon.
         $data = Usuario::select()->where('email',$email)->execute();

         //Validação de usuarios
         if(count($data)===0){
           
            Usuario::insert([
               'nome'=>$name,
               'email'=>$email
            ])->execute();
            
            $this->redirect('/');
            
         }       

      }//Voltar para tela de adicionar, else
      $this->redirect('/novo');


   }
   public function edit($args)
   {

   }
   public function del($args)
   {

   }

}