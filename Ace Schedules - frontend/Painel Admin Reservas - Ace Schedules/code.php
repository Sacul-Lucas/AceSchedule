<?php
session_start();
require 'dbcon.php';
include ('dbcon.php');

if(isset($_POST['delete_schedule']))
{
    
    $reserva_id = mysqli_real_escape_string($con, $_POST['delete_schedule']);

    $query = "DELETE FROM reservas WHERE id='$reserva_id'";

    $query_run = mysqli_query($con, $query);


    if($query_run)
    {       
        $_SESSION['message'] = "Agendamento excluído com sucesso";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Não foi possivel excluir o agendamento";
        header("Location: index.php");
        exit(0);
    }
}



if (isset($_POST['update_schedule'])) {
    $reserva_id = mysqli_real_escape_string($con, $_POST['id']);
    $sala_nome = $_POST['sala'];
    $dataAgendamento = mysqli_real_escape_string($con, $_POST['dataAgendamento']);
    $horaAgendamento = mysqli_real_escape_string($con, $_POST['horaAgendamento']);    

    // Atualizar a reserva no banco de dados
    $query = "UPDATE reservas SET dataAgendamento='$dataAgendamento', horaAgendamento='$horaAgendamento', sala='$sala_nome' WHERE id='$reserva_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Agendamento atualizado com sucesso";
    } else {
        $_SESSION['message'] = "Erro ao atualizar agendamento.";
    }

    // Redirecionar de volta para a página inicial ou página de visualização de agendamentos
    header("Location: index.php");
    exit(0);
}


if (isset($_POST['save_schedule'])) {
    // Recuperar dados do formulário
    $dataAgendamento = $_POST['dataAgendamento'];
    $horaAgendamento = $_POST['horaAgendamento'];
    $horaAgendamento .= ":00";
    $nome_sala = $_POST['sala'];

    // Mensagens de debug
    echo "Data: " . $dataAgendamento . "<br>";
    echo "Hora: " . $horaAgendamento . "<br>";
    echo "Sala: " . $nome_sala . "<br>";

    // Verificar se todos os campos estão preenchidos
    if (!empty($dataAgendamento) && !empty($horaAgendamento) && !empty($nome_sala)) {
        try {
            // Conectar ao banco de dados usando PDO
            $pdo = new PDO('mysql:host=localhost;dbname=aceschedule', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Preparar e executar a inserção
            $stmt = $pdo->prepare('INSERT INTO reservas (dataAgendamento, horaAgendamento, sala, status) VALUES (:da, :ho, :sa, :st)');
            $stmt->bindValue(':da', $dataAgendamento);
            $stmt->bindValue(':ho', $horaAgendamento);
            $stmt->bindValue(':sa', $nome_sala);
            $stmt->bindValue(':st', 1, PDO::PARAM_INT);

            if ($stmt->execute()) {
                $_SESSION['message'] = "Agendamento cadastrado com sucesso!";
            } else {
                $_SESSION['message'] = "Agendamento não cadastrado";
            }
        } catch (PDOException $e) {
            // Log do erro (em uma aplicação real, não mostre o erro diretamente ao usuário)
            error_log($e->getMessage());
            $_SESSION['message'] = "Erro ao cadastrar o agendamento: " . $e->getMessage();
        }
    } else {
        $_SESSION['message'] = "Todos os campos são obrigatórios.";
    }

    // Redirecionar para a página de criação de agendamentos
    header("Location: schedule-create.php");
    exit(0);
}
//header('Location: index.php');
//exit();


//------------------------------------------------------------------------------------------------------------------------