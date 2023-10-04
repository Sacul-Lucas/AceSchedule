<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="index.css">
  <title>Schedule</title>
</head>
<body>
    <div class="Cadastro-img">
        <img id="logoETPC" src="img/Logo_etpc.png">
    </div>
    <section>
            <form  class="form-box" id="inputCadastro" method="POST" action="cadastrar.php" >
                <div class="form-value" method="POST">
                    <h2>Cadastro</h2>
                    <div class="inputbox" >
                        <input type="text" id="usuario" name="usuario" placeholder="Insira o nome da Empresa">
                        <label for="">Empresa/Usuario</label>
                    </div>
                    <div class="inputbox" >
                        <input type="text" id="email" name="email" placeholder="Insira o seu email">
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox" >
                        <input type="password" id="senha" name="senha" placeholder="Insira a sua senha">
                        <label for="">Senha</label>
                    </div>
                    
                    <button type="submit" id="cadastrar" name="cadastrar"> Cadastrar</button>
                </div>
            </form>   
            
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>