<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 08/01/19
 * Time: 19:22
 */

namespace X\App\Controllers;
use X\Sys\Controller;

class reg extends Controller
{
    public function __construct($params){
        parent::__construct($params);
        $this->addData(array(
            'page'=>'Registrarse'));
        $this->model=new \X\App\Models\mreg();
        $this->view =new \X\App\Views\vreg($this->dataView,$this->dataTable);


    }


    function reg(){
        /*
         $data=$this->model->getRoles();
         $this->addData($data); */
        //rebuilding with new data
        $this->view->__construct($this->dataView,$this->dataTable);
        $this->view->show();

    }

    function reg2(){
        $_SESSION['nom']=htmlspecialchars($_POST['nom']);
        $_SESSION['pass']=htmlspecialchars($_POST['pass1']);
        $_SESSION['pass2']=htmlspecialchars($_POST['pass2']);

        $this->model->reg2($_SESSION['user'],$_SESSION['pass'],$_POST['pass2']);

    }
}