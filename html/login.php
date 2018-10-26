<?php
	include "con_db.php";

	function login($user, $pass){
  		include "con_db.php";
  	
    	$username = mysqli_real_escape_string($con, $user);
     	$password = mysqli_real_escape_string($con, $pass);
     	$pass=md5($password);
    	$sql = "SELECT id_usuario, contra FROM tbl_usuario WHERE nick='".$username."' LIMIT 1 "; 
    	echo $sql;
    	$result = mysqli_query($con,$sql);
    	$id = mysqli_fetch_array($result);
  	
  	If($pass==$id[1]){
  		//echo $id[0];
  		return $id[0];
    } else {
    	return false;
   	}
  }







	$usu=$_REQUEST['nick'];
	$contra=$_REQUEST['contra'];
	$usuario=str_replace(" ", "",$usu);
	//echo $usuario;

	$loginn=login($usuario, $contra);

	if(!$loginn){
		header('Location:index.php');
	}else{
		session_start();
		$_SESSION['id_usuario']=$loginn;
		echo "***".$_SESSION['id_usuario'];
	}



?>
