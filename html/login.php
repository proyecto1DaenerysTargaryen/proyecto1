<?php
  include "BBDD.php";
  include "functions.php";

  $usu=$_REQUEST['nick'];
  $contra=$_REQUEST['pss'];
  $usuario=str_replace(" ", "",$usu);
  //echo $usuario;

  $loginn=login($usuario, $contra);
  if(!$loginn){
    header('Location:index.php');
  }else{
    session_start();
    $_SESSION['id_usuario']=$loginn;
    //echo "***".$_SESSION['id_usuario'];
    header('Location:recursos.php');
  }



?>
