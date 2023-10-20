<?php
session_start();
include("conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="script-menu.js" defer></script>
    <title>Agendamento de Salas</title>
</head>

<body bgcolor="#1c1c31">

    <header>
        <div class="navbar">
            <a href="Home.html"><img src="img/logo-fundacao-csn.png.png" class="logo"></a>
        </div>

        <div class="sub-bar">




            <a><img src="img/logo.png" class="logo2"></a>
            <div class="subbarLinks">
                <p>QUEM SOMOS</p>

                <div class="barSocial">
                    <a href="#"><img src="img/instagram.png" class="socialLinks"></a>
                    <a href="#"><img src="img/linkedin.png" class="socialLinks"></a>
                    <a href="#"><img src="img/github.png" class="socialLinks"></a>
                </div>
            </div>


        </div>

          
        <div class="listmenu">
               <button onclick="location.href='https://etpc.com.br/'" class="barrmenulink"> Home</button>
               <button onclick="location.href='https://etpc.com.br/'" class="barrmenulink"> Painel de salas</button>
               <button onclick="location.href='https://fundacaocsn.org.br/#contact'" class="barrmenulink"> Contato</button>
        </div>

        <div class="container1" onclick="myFunction(this);aa(this);">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
        </div>
    </header>

    <div class="user">
        <h7 class="nome">
            Bem vindo, <?php echo $_SESSION["usuario"] ?>
        </h7>
    </div>

    <div class="container">

        <div class="row">
            <div class="col">
                <h1>Salas Disponíveis</h1>
                <h6>Clique em uma sala para realizar um pedido de agendamento</h6>

            </div>

            <div class="col">

                <div class="card card1" id="card1">
                    <h5>Auditorio</h5>
                </div>

                <div class="card card2" id="card2">
                    <h5>Sala 106</h5>
                </div>

                <div class="card card3" id="card3">
                    <h5>Sala 128</h5>
                </div>

                <div class="card card4" id="card4">
                    <h5>Sala 129</h5>
                </div>

                <div class="card card5" id="card5">
                    <h5>Sala 130</h5>
                </div>

            </div>


        </div>


    </div>

    <!----------------------------POU-UPS 1--------------------------------------------------------------->

    <dialog id="modal1">
        <div class="modal-container">
            <div class="modal">
                <h1>Auditorio Informações</h1>
                <li>Capacidade Maxima: 120 pessoas</li>
                <li>Capacidade Minima: 90 pessoas</li>

                <button id="close">Fechar</button>
                <button id="reserva">Reservar</button>
            </div>
        </div>
    </dialog>
    <!------------------------------------------------------------------------------------------------------------>


    <!----------------------------POU-UPS 2--------------------------------------------------------------->
    <dialog id="modal2">
        <div class="modal-container">
            <div class="modal">
                <h1>Sala 106 Informações</h1>
                <li>Capacidade Maxima: 50 pessoas</li>
                <li>Capacidade Minima: 25 pessoas</li>

                <button id="close2">Fechar</button>
                <button id="reserva2">Reservar</button>
            </div>
        </div>
    </dialog>
    <!------------------------------------------------------------------------------------------------------------>


    <!----------------------------POU-UPS 3--------------------------------------------------------------->
    <dialog id="modal3">
        <div class="modal-container">
            <div class="modal">
                <h1>Sala 128 Informações</h1>
                <li>Capacidade Maxima: 70 pessoas</li>
                <li>Capacidade Minima: 50 pessoas</li>

                <button id="close3">Fechar</button>
                <button id="reserva3">Reservar</button>
            </div>
        </div>
    </dialog>
    <!------------------------------------------------------------------------------------------------------------>


    <!----------------------------POU-UPS 4--------------------------------------------------------------->
    <dialog id="modal4">
        <div class="modal-container">
            <div class="modal">
                <h1>Sala 129 Informações</h1>
                <li>Capacidade Maxima: 80</li>
                <li>Capacidade Minima: 6 pessoas</li>

                <button id="close4">Fechar</button>
                <button id="reserva4">Reservar</button>
            </div>
        </div>
    </dialog>
    <!------------------------------------------------------------------------------------------------------------>


    <!----------------------------POU-UPS 5--------------------------------------------------------------->
    <dialog id="modal5">
        <div class="modal-container">
            <div class="modal">
                <h1>Sala 130 Informações</h1>
                <li>Capacidade Maxima: 30 pessoas</li>
                <li>Capacidade Minima: 15 pessoas</li>

                <button id="close5">Fechar</button>
                <button id="reserva5">Reservar</button>
            </div>
        </div>
    </dialog>
    <!------------------------------------------------------------------------------------------------------------>

    <dialog id="poupup-reserva-auditorio" class="poupup-reserva">
        <div class="poupup-container">
            <div class="poupup">

                <div class="poupup-topo">
                    <div class="bola-agenda">
                        <img src="img/agenda.png">
                    </div>
                    <div class="barra-1"></div>
                    <div class="bola-pagamento">
                        <p>$</p>
                    </div>
                    <div class="barra-2"></div>
                    <div class="bola-verificar">
                        <img src="img/verificar.png">
                    </div>
                </div>

                <div class="sub-poupup">
                    <form action="typeloc1_audi.php" method="POST">
                        <p>Dia da reserva</p>


                        <input type="date" id="dataAgendamento" name="dataAgendamento" class="data" placeholder="Insira a data desejada" />


                        <p>Horario da Reserva</p>

                        <select id="periodo" name="periodo" action="typeloc1_audi.php" method="POST">
                            <option value="Manhã">Manhã</option>
                            <option value="Tarde">Tarde</option>
                            <option value="Noite">Noite</option>
                        </select>


                        <spaw></spaw>

                        <div classe="btn-dolado">
                            <button id="btn-agendar-auditorio" action="typeloc1_audi.php" method="POST">Agendar</button>
                        </div>

                    </form>

                    <form>
                        <div classe="btn-dolado">
                            <button id="btn-voltar">Voltar</button>
                        </div>

                    </form>

                </div>
    </dialog>

    <dialog id="poupup-reserva-106" class="poupup-reserva">
        <div class="poupup-container">
            <div class="poupup">

                <div class="poupup-topo">
                    <div class="bola-agenda">
                        <img src="img/agenda.png">
                    </div>
                    <div class="barra-1"></div>
                    <div class="bola-pagamento">
                        <p>$</p>
                    </div>
                    <div class="barra-2"></div>
                    <div class="bola-verificar">
                        <img src="img/verificar.png">
                    </div>
                </div>

                <div class="sub-poupup">
                    <form action="typeloc_sala1.php" method="POST">
                        <p>Dia da reserva</p>


                        <input type="date" id="dataAgendamento" name="dataAgendamento" class="data" placeholder="Insira a data desejada" />


                        <p>Horario da Reserva</p>

                        <select id="periodo" name="periodo" action="typeloc_sala1.php" method="POST">
                            <option value="Manhã">Manhã</option>
                            <option value="Tarde">Tarde</option>
                            <option value="Noite">Noite</option>


                        </select>
                        <spaw></spaw>

                        <div classe="btn-dolado">
                            <button id="btn-agendar-sala106" method="POST" action="typeloc_sala1.php">Agendar</button>
                        </div>
                    </form>

                    <form>
                        <div classe="btn-dolado">
                            <button id="btn-voltar2">Voltar</button>
                        </div>
                    </form>



                </div>
    </dialog>>

    <dialog id="poupup-reserva-128" class="poupup-reserva">
        <div class="poupup-container">
            <div class="poupup">

                <div class="poupup-topo">
                    <div class="bola-agenda">
                        <img src="img/agenda.png">
                    </div>
                    <div class="barra-1"></div>
                    <div class="bola-pagamento">
                        <p>$</p>
                    </div>
                    <div class="barra-2"></div>
                    <div class="bola-verificar">
                        <img src="img/verificar.png">
                    </div>
                </div>

                <div class="sub-poupup">
                    <form action="typeloc_sala2.php" method="POST">
                        <p>Dia da reserva</p>


                        <input type="date" id="dataAgendamento" name="dataAgendamento" class="data" placeholder="Insira a data desejada" />


                        <p>Horario da Reserva</p>

                        <select id="periodo" name="periodo" action="typeloc_sala2.php" method="POST">
                            <option value="Manhã">Manhã</option>
                            <option value="Tarde">Tarde</option>
                            <option value="Noite">Noite</option>


                        </select>

                        <spaw></spaw>
                        <div classe="btn-dolado">
                            <button id="btn-agendar-sala128" action="typeloc_sala2.php" method="POST">Agendar</button>
                        </div>
                    </form>

                    <form>
                        <div classe="btn-dolado">
                            <button id="btn-voltar">Voltar</button>
                        </div>
                    </form>




                </div>
    </dialog>

    <dialog id="poupup-reserva-129" class="poupup-reserva">
        <div class="poupup-container">
            <div class="poupup">

                <div class="poupup-topo">
                    <div class="bola-agenda">
                        <img src="img/agenda.png">
                    </div>
                    <div class="barra-1"></div>
                    <div class="bola-pagamento">
                        <p>$</p>
                    </div>
                    <div class="barra-2"></div>
                    <div class="bola-verificar">
                        <img src="img/verificar.png">
                    </div>
                </div>

                <div class="sub-poupup">
                    <form action="typeloc_sala3.php" method="POST">
                        <p>Dia da reserva</p>


                        <input type="date" id="dataAgendamento" name="dataAgendamento" class="data" placeholder="Insira a data desejada" />


                        <p>Horario da Reserva</p>

                        <select id="periodo" name="periodo" action="typeloc_sala3.php" method="POST">
                            <option value="Manhã">Manhã</option>
                            <option value="Tarde">Tarde</option>
                            <option value="Noite">Noite</option>


                        </select>

                        <spaw></spaw>

                        <div classe="btn-dolado">
                            <button id="btn-agendar-sala129" action="typeloc_sala3.php" method="POST">Agendar</button>

                        </div>

                    </form>

                    <form>
                        <div classe="btn-dolado">
                            <button id="btn-voltar">Voltar</button>
                        </div>
                    </form>
                </div>
    </dialog>

    <dialog id="poupup-reserva-sala130" class="poupup-reserva">
        <div class="poupup-container">
            <div class="poupup">

                <div class="poupup-topo">
                    <div class="bola-agenda">
                        <img src="img/agenda.png">
                    </div>
                    <div class="barra-1"></div>
                    <div class="bola-pagamento">
                        <p>$</p>
                    </div>
                    <div class="barra-2"></div>
                    <div class="bola-verificar">
                        <img src="img/verificar.png">
                    </div>
                </div>

                <div class="sub-poupup">
                    <form action="typeloc_sala4.php" method="POST">
                        <p>Dia da reserva</p>


                        <input type="date" id="dataAgendamento" name="dataAgendamento" class="data" placeholder="Insira a data desejada" />


                        <p>Horario da Reserva</p>

                        <select id="periodo" name="periodo" action="typeloc_sala4.php" method="POST">
                            <option value="Manhã">Manhã</option>
                            <option value="Tarde">Tarde</option>
                            <option value="Noite">Noite</option>


                        </select>
                        <spaw></spaw>
                        <div classe="btn-dolado">
                            <button id="btn-agendar-sala130" action="typeloc_sala4.php" method="POST">Agendar</button>

                        </div>

                    </form>

                    <form>
                        <div classe="btn-dolado">
                            <button id="btn-voltar">Voltar</button>
                        </div>

                    </form>
                </div>
    </dialog>

    <script type="text/javascript" src="scripts.js"></script>
</body>

</html>