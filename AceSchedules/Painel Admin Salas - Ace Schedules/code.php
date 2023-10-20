<?php
session_start();
require 'dbcon.php';
include ('dbcon.php');

if(isset($_POST['delete_cadastro']))
{
    $cadastro_id = $_SESSION['id'];

    if ($_SESSION[$agSala1] == true) {
        $agSala1 = 'sala1';
        $query = "DELETE FROM .'$agSala1'. WHERE id = '$cadastro_id'";
    }
    
    if ($_SESSION[$agSala2] == true) {
        $agSala2 = 'sala2';
        $query = "DELETE FROM .'$agSala2'. WHERE id = '$cadastro_id'";
    }
    
    if ($_SESSION[$agSala3] == true) {
        $agSala3 = 'sala3';
        $query = "DELETE FROM .'$agSala3'. WHERE id = '$cadastro_id'";
    }
    
    if ($_SESSION[$agSala4] == true) {
        $agSala4 = 'sala4';
        $query = "DELETE FROM .'$agSala4'. WHERE id = '$cadastro_id'";
    }
    
    if ($_SESSION[$agAudi] == true) {
        $agAudi = 'audi';
        $query = "DELETE FROM .'$agAudi'. WHERE id = '$cadastro_id'";
    }
    


    $query_run = mysqli_query($con, $query);


    if($query_run)
    {
        $_SESSION['message'] = "Agendamento excluido com sucesso";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Não foi possivel excluir o Agendamento";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_cadastro']))
{
    $cadastro_id = $_SESSION['id'];

    $dataAgendamento = mysqli_real_escape_string($conexao, trim($_POST['dataAgendamento']));
    $periodo = mysqli_real_escape_string($conexao, trim($_POST['periodo']));
    

    if ($_SESSION[$agSala1] == true) {
        $agSala1 = 'sala1';
        $query = "UPDATE .'$agSala1'. SET dataAgendamento='$dataAgendamento', periodo='$periodo', WHERE id='$cadastro_id' ";
    }
    
    if ($_SESSION[$agSala2] == true) {
        $agSala2 = 'sala2';
        $query = "UPDATE .'$agSala2'. SET dataAgendamento='$dataAgendamento', periodo='$periodo', WHERE id='$cadastro_id' ";
    }
    
    if ($_SESSION[$agSala3] == true) {
        $agSala3 = 'sala3';
        $query = "UPDATE .'$agSala3'. SET dataAgendamento='$dataAgendamento', periodo='$periodo', WHERE id='$cadastro_id' ";
    }
    
    if ($_SESSION[$agSala4] == true) {
        $agSala4 = 'sala4';
        $query = "UPDATE .'$agSala4'. SET dataAgendamento='$dataAgendamento', periodo='$periodo', WHERE id='$cadastro_id' ";
    }
    
    if ($_SESSION[$agAudi] == true) {
        $agAudi = 'audi';
        $query = "UPDATE .'$agAudi'. SET dataAgendamento='$dataAgendamento', periodo='$periodo', WHERE id='$cadastro_id' ";
    }

    if($query_run)
    {
        $_SESSION['message'] = "Agendamento atualizado com sucesso";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Agendamento não atualizado";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_cadastro']))
{
    $cadastro_id = $_SESSION['id'];

    $dataAgendamento = mysqli_real_escape_string($conexao, trim($_POST['dataAgendamento']));
    $periodo = mysqli_real_escape_string($conexao, trim($_POST['periodo']));


    if ($_SESSION[$agSala1] == true) {
        $agSala1 = 'sala1';
        $query = "INSERT INTO .'$agSala1'. (dataAgendamento,periodo) VALUES ('$dataAgendamento','$periodo')";
    }
    
    if ($_SESSION[$agSala2] == true) {
        $agSala2 = 'sala2';
        $query = "INSERT INTO .'$agSala2'. (dataAgendamento,periodo) VALUES ('$dataAgendamento','$periodo')";
    }
    
    if ($_SESSION[$agSala3] == true) {
        $agSala3 = 'sala3';
        $query = "INSERT INTO .'$agSala3'. (dataAgendamento,periodo) VALUES ('$dataAgendamento','$periodo')";
    }
    
    if ($_SESSION[$agSala4] == true) {
        $agSala4 = 'sala4';
        $query = "INSERT INTO .'$agSala4'. (dataAgendamento,periodo) VALUES ('$dataAgendamento','$periodo')";
    }
    
    if ($_SESSION[$agAudi] == true) {
        $agAudi = 'audi';
        $query = "INSERT INTO .'$agAudi'. (dataAgendamento,periodo) VALUES ('$dataAgendamento','$periodo')";
    }
    

    

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Agendamento realizado com sucesso!";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Agendamento não realizado";
        header("Location: student-create.php");
        exit(0);
    }
}



//------------------------------------------------------------------------------------------------------------------------