<?php

namespace X\App\Controllers;

   use X\Sys\Controller;


   class Users extends Controller{
   		

   		public function __construct($params){
            parent::__construct($params);
            $this->addData(array(
               'page'=>'Login'));
            $this->model=new \X\App\Models\mUsers();
            $this->view =new \X\App\Views\vUsers($this->dataView);
            
         }
         
   		function users(){
            $this->view->__construct($this->dataView,$this->dataTable);
            $this->view->show();
         }
       function login(){
           $_SESSION['user']=htmlspecialchars($_POST['nom']);
           $_SESSION['pass']=htmlspecialchars($_POST['pass1']);

           $this->model->login($_SESSION['user'],$_SESSION['pass']);

       }

   }