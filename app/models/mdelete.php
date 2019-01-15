<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 14/01/19
 * Time: 17:18
 */

namespace X\App\Models;


use X\Sys\Model;

class mDelete extends Model
{
    public function __construct(){
        parent::__construct();

    }
    function taskdelete($nomt)
    {

        if (isset($_POST) &&
            !empty($nomt)
            ) {



            $sql = "DELETE  FROM task WHERE idtask='.$nomt.'";
            $this->query($sql);
            $this->execute();

            header('Location: /X-master/panel');

        } else {
            echo 'Tarea no borrada';
        }
    }
}