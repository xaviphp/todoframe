<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 08/01/19
 * Time: 19:22
 */

namespace X\App\Models;

use X\Sys\Model;
class mReg extends Model
{
    public function __construct(){
        parent::__construct();

    }
    public function reg2($nom,$pass,$pass1){
        try{
            if($nom != NULL &&
                $pass != NULL&&
                $pass1 != NULL)
            {

                $nom=htmlspecialchars($_POST['nom']);
                $pass=md5(htmlspecialchars($_POST['pass1']));



                $sql="INSERT INTO `user` (`iduser`, `nombreUsuario`, `Pass`)VALUES(NULL, '".$nom."','".$pass."')";
                $this->query($sql);
                $this->execute();

                header('Location: /X-master/panel');
            }else{
                echo "<script type='text/javascript'>alert('Usuario No Se Puede Crear');</script>";
                header("Location:/X-master/reg");
            }
        }catch(Exception $e){
            echo "<script type='text/javascript'>alert('Usuario No Se Puede Crear');</script>";
            header("Location:/X-master/reg");

        }

    }
}