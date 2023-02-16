<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-excluir'])) {
				
		$codCli = mysqli_escape_string($connection,$_POST['codCli']);

		$sql = "DELETE FROM tbClientes WHERE codCli = '$codCli'";

		if(mysqli_query($connection, $sql)) {

			header('Location: lista.php')
	}
}
