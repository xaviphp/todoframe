<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 14/01/19
 * Time: 17:27
 */

namespace X\App\Models;


use X\Sys\Model;

class mModificar extends Model
{
    public function __construct(){
        parent::__construct();

    }
    function taskmod($nomt,$est)
    {

        if (isset($_POST) &&
            !empty($nomt) &&
            !empty($est)
        ) {



            $sql="UPDATE task SET Estado='".$est."' WHERE idtask='".$nomt."'";
            $this->query($sql);
            $this->execute();

            header('Location: /X-master/panel');

        } else {
            echo 'Tarea no modificada';
        }
    }
}