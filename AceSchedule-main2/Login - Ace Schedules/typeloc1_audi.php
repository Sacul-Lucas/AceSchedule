<?php
session_start();
include("tconect.php");

$teste = mysqli_real_escape_string($conexao, trim($_POST['teste']));
$periodo = mysqli_real_escape_string($conexao, trim($_POST['periodo']));



$sql = "select count(*) as total from sauditorio where teste = '$teste' ";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['data-exixte'] = true;
	echo '<script type="text/javascript">
	        window.onload = function () { alert("Welcome"); } 
          </script>';
	
	
	if($row['total'] == 0) {
		$_SESSION['data-exixte'] = true;
		header('Location: xv2.html');
	exit;
	
}
}



$sql = "INSERT INTO sauditorio (teste, periodo) VALUES ('$teste', '$periodo')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_data'] = true;
}

$conexao->close();

header('Location: painel.php');
exit;
?>
