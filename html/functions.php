<?php

  function login($user, $pass){
      include "BBDD.php";
    
      $username = mysqli_real_escape_string($con, $user);
      $password = mysqli_real_escape_string($con, $pass);
      $pass=md5($password);
      $sql = "SELECT id_usuario, contra FROM tbl_usuario WHERE nick='".$username."' LIMIT 1 "; 
      //echo $sql;
      $result = mysqli_query($con, $sql);
      $id = mysqli_fetch_array($result);
    
    If($pass==$id[1]){
      //echo $id[0];
      return $id[0];
    } else {
      return false;
    }
  }

function get_perfil($id_usuari){
  include "BBDD.php";
  $sql = "SELECT id_usuario FROM tbl_usuario WHERE id_usuario='".$id_usuari."' LIMIT 1 "; 
    $result = mysqli_query($con, $sql);
  $id = mysqli_fetch_row($result);
  
  return $id[0];
}
function get_nom_perfil($id_perfil){
  include "BBDD.php";
  $sql = "SELECT nombre, apellido FROM tbl_usuario WHERE id_usuario='".$id_perfil."' LIMIT 1 "; 
  $result = mysqli_query($con, $sql);
  $id = mysqli_fetch_row($result);
  $nombre=$id[0]." ".$id[1];
  return $nombre;
}  

function logout(){
  session_start();
  unset($_SESSION['id_usuario']);
  session_destroy(); 
  header('Location: index.php');
  exit();
}
function sexo($id_perfil){
  include "BBDD.php";
  $sql = "SELECT sexo FROM tbl_usuario WHERE id_usuario='".$id_perfil."' LIMIT 1 "; 
  $qry_sql=mysqli_fetch_array(mysqli_query($con,$sql))[0];

  if($qry_sql=="M"){
    $es="Bienvenido";
    return $es;
  }else{
    $es="Bienvenida";
    return $es;
  }
}

?>