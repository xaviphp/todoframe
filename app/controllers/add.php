<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 14/01/19
 * Time: 16:57
 */

namespace X\App\Controllers;


use X\Sys\Controller;

class add extends Controller
{
    function __construct($params = null, $dataView = null)
    {
        parent::__construct($params);

        $this->addData(array(
            'page'=>'Add'));
        $this->model=new \X\App\Models\mAdd();
        $this->view =new \X\App\Views\vAdd($this->dataView,$this->dataTable);
    }
    function add(){

        $this->view->__construct($this->dataView,$this->dataTable);
        $this->view->show();

    }
    function taskadd(){
        $_SESSION['taskname']=htmlspecialchars($_POST['nom']);
        $_SESSION['desctask']=htmlspecialchars($_POST['desc']);
        $_SESSION['estado']=htmlspecialchars($_POST['list']);
        $this->model->taskadd($_SESSION['taskname'],$_SESSION['desctask'], $_SESSION['estado']);

    }
}