<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-alterar'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$sobrenome = mysqli_escape_string($connection,$_POST['sobrenome']);
		$email = mysqli_escape_string($connection,$_POST['email']);
		$idade = mysqli_escape_string($connection,$_POST['idade']);
		$codCli = mysqli_escape_string($connection,$_POST['codCli']);

		$sql = "UPDATE tbClientes SET nomeCli = '$nome', sobreNomeCli = '$sobrenome', emailCli = '$email', idadeCli = '$idade' WHERE codCli = '$codCli'";

		if(mysqli_query($connection, $sql)) {

			header('Location: lista.php');
	}
}