<?php
    session_start();
    require 'dbcon.php';

?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Painel Administrador</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalhes do agendamento
                            <a href="student-create.php" class="btn btn-primary float-end">Adicionar Agendamento</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>DataAgendamento</th>
                                    <th>Período</th>
                                    <th>Sala</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $Agendamento = '';

                                    if ($_SESSION['idSala'] == true) {
                                        $agSala1 = 'sala1';
                                        $query = "SELECT * FROM `{$agSala1}`";  
                                        $query_run = mysqli_query($con, $query);
                                        $Agendamento = 'idSala';
                                        
                                    }
                                    elseif ($_SESSION['idSala2'] == true) {
                                        $agSala2 = 'sala2';
                                        $query = "SELECT * FROM `{$agSala2}`";
                                        $query_run = mysqli_query($con, $query);
                                        $Agendamento = 'idSala2';
                                    }

                                    elseif ($_SESSION['idSala3'] == true) {
                                        $agSala3 = 'sala3';
                                        $query = "SELECT * FROM `{$agSala3}`";
                                        $query_run = mysqli_query($con, $query);
                                        $Agendamento = 'idSala3';
                                    }

                                    elseif ($_SESSION['idSala4'] == true) {
                                        $agSala4 = 'sala4';
                                        $query = "SELECT * FROM `{$agSala4}`" ;
                                        $query_run = mysqli_query($con, $query);
                                        $Agendamento = 'idSala4';
                                    }

                                    elseif ($_SESSION['idAudi'] == true) {
                                        $agAudi = 'audi';
                                        $query = "SELECT * FROM `{$agAudi}`";
                                        $query_run = mysqli_query($con, $query);
                                        $Agendamento = 'idAudi';
                                    }                                        


                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $cadastro)
                                        {                                                  
                                            ?>
                                            <tr>
                                                <td><?= $cadastro['id']; ?></td>
                                                <td><?= $cadastro['dataAgendamento']; ?></td>
                                                <td><?= $cadastro['periodo']; ?></td>
                                                <td><?= $cadastro[$Agendamento]; ?></td>
                                                
                                                
                                                <td>
                                                    <a href="student-view.php?id=<?= $cadastro['id']; ?>" class="btn btn-info btn-sm">Visualizar</a>
                                                    <a href="student-edit.php?id=<?= $cadastro['id']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_cadastro" value="<?=$cadastro['id'];?>" class="btn btn-danger btn-sm">Deletar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> Nenhum agendamento cadastrado </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>