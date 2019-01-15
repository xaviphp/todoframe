<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 08/01/19
 * Time: 19:22
 */

namespace X\App\Views;

use X\Sys\View;

class vReg extends View
{
    function __construct($dataView,$dataTable=null){
        parent::__construct($dataView,$dataTable);
        echo $this->output= $this->render('treg.php');

    }
}