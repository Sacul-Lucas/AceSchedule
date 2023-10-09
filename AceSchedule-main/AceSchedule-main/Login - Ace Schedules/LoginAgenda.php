<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        

        $sql_code = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'" ;
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['usuario'] = $usuario['usuario'];

            header("Location: painel.php");

        } 
    }

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="index.css">
  <title>lg Schedule</title>
</head>
<body>
    <div class="Cadastro-img">
        <img id="logoETPC" src="img/Logo_etpc.png">
    </div>
    <section>
            <form  class="form-box" id="inputCadastro" method="POST" >
                <div class="form-value" method="POST">
                    <h2>Login</h2>
                    <div class="inputbox" >
                        <input type="text" id="username" name="usuario" placeholder="Insira o nome de usuário">
                        <label for="">Usuario</label>
                    </div>
                    <div class="inputbox" >
                        <input type="text" id="email" name="email" placeholder="Insira o seu email">
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox" >
                        <input type="password" id="senha" name="senha" placeholder="Insira a sua senha">
                        <label for="">Senha</label>
                    </div>
                    <div class="forget" >
                        <label for=""><input type="checkbox">Lembre-me   <a href="#">da Senha </a></label>
                    </div>
                    <button type="submit" id="cadastrar" name="cadastrar"> login</button>
                </div>
            </form>   
            
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>