<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 10/01/19
 * Time: 16:22
 */

namespace X\App\Controllers;


use X\Sys\Controller;

class Panel extends Controller
{
    public function __construct($params){
        parent::__construct($params);
        $this->addData(array(
            'page'=>'Panel'));
        $this->model=new \X\App\Models\mPanel();
        $this->view =new \X\App\Views\vPanel($this->dataView,$this->dataTable);


    }
    function home(){

        $this->view->__construct($this->dataView,$this->dataTable);
        $this->view->show();

    }
}