<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 14/01/19
 * Time: 17:27
 */

namespace X\App\Views;


use X\Sys\View;

class vModificar extends View
{
    function __construct($dataView,$dataTable=null){
        parent::__construct($dataView,$dataTable);
        echo $this->render('tModificar.php');
    }
}