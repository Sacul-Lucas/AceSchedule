<?php
session_start();
include("tconect.php");

$teste = mysqli_real_escape_string($conexao, trim($_POST['teste']));
$periodo = mysqli_real_escape_string($conexao, trim($_POST['periodo']));

$sql = "select count(*) as total from sala1 where teste = '$teste'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['data_exixte'] = true;
	header('Location: painel.php');
	exit;
}

$sql = "INSERT INTO sala1 (teste, periodo) VALUES ('$teste', '$periodo')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_data'] = true;
}

$conexao->close();

header('Location: painel.php');
exit;
?>
