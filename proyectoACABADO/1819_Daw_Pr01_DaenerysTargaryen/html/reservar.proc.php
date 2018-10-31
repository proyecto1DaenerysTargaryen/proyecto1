<?php
	include "head.php";
	

	session_start();
	$fechaActual=date('Y-m-d');
	$hora=date('H');
	$min=date('i');
	$sec=date('s');
	$horaActual= $hora.":".$min.":".$sec;
	//echo $horaActual;
	$usu=$_SESSION['id_usuario'];
	//echo "*".$usu."*";
	//echo $usu;
	//$_REQUEST['r']=1;//para entrar en el switch
	//$_REQUEST['id']=3;//id recurso
	//$idR=$_REQUEST['idR'];//id recurso
	$id=$_REQUEST['id'];
	//echo $id;
	switch ($_REQUEST['r']) {
		case '1'://reserva por primera vez
			$updateRecurso="UPDATE tbl_recurso SET disponible=1 where id_recurso=".$id;
			$insertReserva="INSERT INTO tbl_reserva(id_recurso, id_usuario, f_inici, h_ini, incidencia ) VALUES(".$id.",".$usu.",'".$fechaActual."','".$horaActual."',0) ";
			//echo $updateRecurso;
			$qry_updateRecurso=mysqli_query($con,$updateRecurso);
			$qry_insertReserva=mysqli_query($con,$insertReserva);
			echo $updateRecurso;
			echo $insertReserva;
			header('Location:recursos.php');
			break;
		case '2'://devolver la reserva
		$idR=$_REQUEST['idR'];
			$updateRecurso="UPDATE tbl_recurso SET disponible=0 where id_recurso=".$id;
			//echo $updateRecurso;
			$updateReserva="UPDATE tbl_reserva SET f_devol='".$fechaActual."', h_devol='".$horaActual."' where id_recurso=".$id." && f_devol='0000-00-00' && h_devol='00:00:00'";
			//echo $updateReserva;
			$qry_updateRecurso=mysqli_query($con,$updateRecurso);
			$qry_updateReserva=mysqli_query($con,$updateReserva);
			header('Location:recursos.php');
			break;
		case '3'://incidencia
		$idR=$_REQUEST['idR'];
			$tipus=$_REQUEST['tipus'];
			//echo $tipus."*";
			$text=$_REQUEST['text'];
			//echo $text;
			//echo $id;
			$updateRecurso="UPDATE tbl_recurso SET disponible=1 where id_recurso=".$id;
			$updateReserva1="UPDATE tbl_reserva SET incidencia=1 where id_recurso=".$id." && f_devol='0000-00-00' && h_devol='00:00:00'";
			$insertIncidencia="INSERT INTO tbl_incidencia (id_reserva, id_tipus_incidencia, descripcion) VALUES (".$idR.",".$tipus.",'".$text."') ";
			echo $updateRecurso."<br>";
			echo $updateReserva1."<br>";
			echo $insertIncidencia;
			$qry_updateRecurso=mysqli_query($con,$updateRecurso);
			$qry_updateReserva1=mysqli_query($con,$updateReserva1);
			$qry_insertIncidencia=mysqli_query($con,$insertIncidencia);
			header('Location:recursos.php');
			break;
		case '4'://devolder incidencia
			$updateReserva="UPDATE tbl_reserva SET f_devol='".$fechaActual."', h_devol='".$horaActual."', incidencia=0 where id_recurso=".$id." && f_devol='0000-00-00' && h_devol='00:00:00' && incidencia=1";
			$updateRecurso="UPDATE tbl_recurso SET disponible=0 where id_recurso=".$id;
			//echo $updateRecurso;
			//echo $updateReserva;
			$qry_updateReserva=mysqli_query($con,$updateReserva);
			$qry_updateRecurso=mysqli_query($con,$updateRecurso);
			header('Location:recursos.php');
		default:
			# code...
			break;
	}
	
?>