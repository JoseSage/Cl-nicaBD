<?php
	$message_ok=false;
	$message_error='The system is not available';
	if(isset($_POST['username'],$_POST['password'])):
		if($_POST['username']!=""):
			if($_POST['password']!=""):
				$username=$_POST['username'];
				$password=md5($_POST['password']);
				$res=pg_query($conn,("Select * from user_tbl where username='$username' and password='$password'"));
				if(pg_num_rows($res)>0):
					$message_ok=true;
					$user_list=pg_fetch_array($res);
					$_SESSION['id']=$user_list[0];
					$_SESSION['username']=$user_list[1];
					$message_error='Iniciando sesión...';
				else:
					$message_error='Falló el inicio de sesión, por favor revise su cuenta de usuario y contraseña';
				endif;
			else:
				$message_error='Contraseña incorrecta !!!';
			endif;
		else:
			$message_error='Digite un nombre de usuario';
		endif;
	else:
		$message_error='Campos Requeridos';
	endif;
	$json=array('data' => $message_ok, 'message' =>$message_error);
	echo json_encode($json);
?>
