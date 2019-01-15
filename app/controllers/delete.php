<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 14/01/19
 * Time: 17:17
 */

namespace X\App\Controllers;


use X\Sys\Controller;

class Delete extends Controller
{
    function __construct($params = null, $dataView = null)
    {
        parent::__construct($params);

        $this->addData(array(
            'page'=>'Delete'));
        $this->model=new \X\App\Models\mDelete();
        $this->view =new \X\App\Views\vDelete($this->dataView,$this->dataTable);
    }
    function delete(){

        $this->view->__construct($this->dataView,$this->dataTable);
        $this->view->show();

    }
    function taskdelete(){
        $_SESSION['idborrar']=htmlspecialchars($_POST['idborrar']);


        $this->model->taskdelete($_SESSION['idborrar']);

    }
}