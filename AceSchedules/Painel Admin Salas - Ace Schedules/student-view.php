<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="pt-BR">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Detalhes do usuário</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Dados do agendamento
                            <a href="index.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $cadastro_id = $_SESSION['id'];

                            if ($_SESSION[$agSala1] == true) {
                                $agSala1 = 'sala1';
                                $query = "SELECT * FROM .'$agSala1'. WHERE id='$cadastro_id'";
                            }
                                
                            if ($_SESSION[$agSala2] == true) {
                                $agSala2 = 'sala2';
                                $query = "SELECT * FROM .'$agSala2'. id='$cadastro_id'";
                            }
                                
                            if ($_SESSION[$agSala3] == true) {
                                 $agSala3 = 'sala3';
                                $query = "SELECT * FROM .'$agSala3'. id='$cadastro_id'";
                            }
                                
                            if ($_SESSION[$agSala4] == true) {
                                $agSala4 = 'sala4';
                                $query = "SELECT * FROM .'$agSala4'. id='$cadastro_id'";
                            }
                                
                            if ($_SESSION[$agAudi] == true) {
                                $agAudi = 'audi';
                                $query = "SELECT * FROM .'$agAudi'. id='$cadastro_id'";
                            }

                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $cadastro = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Id</label>
                                        <p class="form-control">
                                            <?=$id['id'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Data</label>
                                        <p class="form-control">
                                            <?=$cadastro['dataAgendamento'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Período</label>
                                        <p class="form-control">
                                            <?=$cadastro['periodo'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>Nenhum ID encontrado</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>