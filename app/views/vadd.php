<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 11/01/19
 * Time: 15:59
 */

namespace X\App\Views;


use X\Sys\View;

class vAdd extends View
{
    function __construct($dataView,$dataTable=null){
        parent::__construct($dataView,$dataTable);
        echo $this->render('tadd.php');
    }
}