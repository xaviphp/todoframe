<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 10/01/19
 * Time: 16:23
 */

namespace X\App\Views;


use X\Sys\View;

class vPanel extends View
{
    function __construct($dataView,$dataTable=null){
        parent::__construct($dataView,$dataTable);
        echo $this->output= $this->render('tPanel.php');

    }
}