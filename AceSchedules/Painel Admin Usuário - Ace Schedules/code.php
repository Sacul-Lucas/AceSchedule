<?php
session_start();
require 'dbcon.php';
include ('dbcon.php');

if(isset($_POST['delete_cadastro']))
{
    $cadastro_id = $_SESSION['id'];

    $query = "DELETE FROM cadastro WHERE id = '$cadastro_id' ";
    $query_run = mysqli_query($con, $query);


    if($query_run)
    {
        $_SESSION['message'] = "Aluno excluido com sucesso";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Não foi possivel excluir o aluno";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_cadastro']))
{
    $cadastro_id = $_SESSION['id'];

    $usuario = mysqli_real_escape_string($con, $_POST['usuario']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $senha = mysqli_real_escape_string($con, $_POST['senha']);
   

    $query = "UPDATE cadastro SET usuario='$usuario', email='$email', senha='$senha' WHERE id='$cadastro_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Aluno atualizado com sucesso";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Aluno não atualizado";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_cadastro']))
{
    $usuario = mysqli_real_escape_string($con, $_POST['usuario']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $senha = mysqli_real_escape_string($con, $_POST['senha']);
    

    $query = "INSERT INTO cadastro (usuario,email,senha) VALUES ('$usuario','$email','$senha')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Aluno cadastrado com sucesso!";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Aluno não cadastrado";
        header("Location: student-create.php");
        exit(0);
    }
}



//------------------------------------------------------------------------------------------------------------------------