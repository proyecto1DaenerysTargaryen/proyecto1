<?php
	include "head.php";
	


	$fechaActual=date('Y-m-d');
	$hora=date('H');
	$min=date('i');
	$sec=date('s');
	$horaActual= $hora.":".$min.":".$sec;
	//echo $horaActual;
	session_start();
	$_SESSION['id_usuario']=2;
	$usu=$_SESSION['id_usuario'];
	//echo $usu;
	$_REQUEST['r']=1;//para entrar en el switch
	$_REQUEST['id']=3;//id recurso
	$id=$_REQUEST['id'];//id recurso
	switch ($_REQUEST['r']) {
		case '1'://reserva por primera vez
			$updateRecurso="UPDATE tbl_recurso SET disponible=1 where id_recurso=".$id;
			$insertReserva="INSERT INTO tbl_reserva(id_recurso, id_usuario, f_inici, h_ini ) VALUES(".$id.",".$usu.",'".$fechaActual."','".$horaActual."') ";
			//echo $updateRecurso;
			//$qry_updateRecurso=mysqli_query($con,$updateRecurso);
			//$qry_insertReserva=mysqli_query($con,$insertReserva);
			//echo $insertReserva;
			//header('Location:recursos.php');
			break;
		case '2'://devolver la reserva
			$updateRecurso="UPDATE tbl_recurso SET disponible=0 where id_recurso=".$id;
			$updateReserva="UPDATE tbl_reserva SET f_devol='".$fechaActual."', f_devol='".$horaActual."'";
			//$qry_updateRecurso=mysqli_query($con,$updateRecurso);
			//$qry_updateReserva=mysqli_query($con,$updateReserva);
			//header('Location:recursos.php');
			break;
		case '3'://incidencia
			$tipus=$_REQUEST['tipus'];
			$desc=$_REQUEST['desc'];
			$updateRecurso="UPDATE tbl_recurso SET disponible=1 where id_recurso=".$id;
			$insertIncidencia="INSERT INTO tbl_incidencia (id_reserva, id_tipus_incidencia, descripcion) VALUES (".$id.",".$tipus.",".$desc.") ";
			//$qry_updateRecurso=mysqli_query($con,$updateRecurso);
			//$qry_insertIncidencia=mysqli_query($con,$insertIncidencia);
			//header('Location:recursos.php');
			break;
		default:
			# code...
			break;
	}
	
?>