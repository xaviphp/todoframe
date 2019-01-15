<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 14/01/19
 * Time: 17:27
 */

namespace X\App\Controllers;


use X\Sys\Controller;

class Modificar extends Controller
{
    function __construct($params = null, $dataView = null)
    {
        parent::__construct($params);

        $this->addData(array(
            'page'=>'Modificar'));
        $this->model=new \X\App\Models\mModificar();
        $this->view =new \X\App\Views\vModificar($this->dataView,$this->dataTable);
    }
    function modificar(){

        $this->view->__construct($this->dataView,$this->dataTable);
        $this->view->show();

    }
    function taskmod(){
        $_SESSION['idborrar2']=htmlspecialchars($_POST['idborrar']);
        $_SESSION['list']=htmlspecialchars($_POST['list']);


        $this->model->taskmod($_SESSION['idborrar2'], $_SESSION['list']);

    }
}