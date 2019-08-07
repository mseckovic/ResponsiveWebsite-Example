<?php 
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Polovni Oldtajmeri</title>

    <!-- Icon-->
    <link rel="icon" href="img/ikonice/mehanika.png" />
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="header" style="position:absolute;top:0;left:0;right:0;bottom:0" id="blur">
    </div>
    <div class="header">
        <div class="container" id="kontis" style="position:relative">
            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-9 col-lg-9">
                    <a href="index.php">
                        <img src="img/oldtajmeri.png" border="0" alt="logo">
                        </img>
                    </a>
                </div>
                <div class="col-lg-1">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2">
                    <a href="index.php">
                        <img src="img/logo2.png" border="0" alt="logo">
                        </img>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default">
        <div class="container">
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="onama.php">O nama</a>
                    </li>
                    <li>
                        <a href="ponuda.php">Ponuda</a>
                    </li>
                    <li>
                        <a href="kontakt.php">Kontakt</a>
                    </li>
                    <li>
						<a href="prodavnica.php">Prodavnica</a>
                    </li>
                    <li class="active">
                        <?php
                            if(isset($_SESSION['username'])){
                                echo "<p style='text-align=center; padding-top: 15px;'> <b>Username: </b> ".$_SESSION['username']."<a href='logout.php' style='color: black; '>  Logout</a>";
                            }else{
                                header("Location:logovanje.html");
                            }    
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="jumbotron" id="malidzambo">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                    </div>
                    <div class="hidden-xs hidden-sm col-md-5 col-lg-4">
                        <img class="showcase-img" src="img/200.png" id="znacka"></img>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <div class="container-fluid" id="malibaner">
        <div class="row">
            <strong>Svakog radnog dana radimo od 8:00 do 20:00! Vikendom od 8:00 do 16:00!</strong>
        </div>
    </div>
    <section>
        <div class="container-fluid" id="pomeriformu">
            <form class="form-horizontal marginicatop" action="form.php" action="class.php" method="post">
                <?php
                include("osoba.php");
                    $imeiprezime = $_POST['ime'];
                    $prebivaliste = $_POST['prebivaliste'];
                    $model = $_POST['model'];
                    $modelCart = $_POST['modelCart'];
                    $telefon = $_POST['telefon'];
                    $email = $_POST['mail'];
                    $username = $_SESSION['username'];
                    $osoba = new Osoba();
                    $osoba->kupujete($imeiprezime,$prebivaliste,$model,$modelCart,$telefon,$email,$username);

                ?>
            </form>
        </div>
    </section>
    <footer>
        <div class="container-fluid futer">
            <div class="row">
                <div class="hidden-xs hidden-sm col-md-1 col-lg-1">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <p class="footertext">
                        Polovni Oldtajmeri
                        <br>
                        <br> Ulica polovnih oldtajmera bb
                        <br> 11070, Surcin
                        <br> Srbija
                    </p>
                </div>
                <div class="hidden-xs hidden-sm col-md-2 col-lg-2 futerlogokolona">
                    <center>
                        <img src="img/oldtajmeri.png" id="futerlogo"></img>
                    </center>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <p class="footertext">
                        Ponedeljak - Petak
                        <br> 8:00 - 20:00
                        <br>
                        <br> Subotom i Nedeljom
                        <br> 8:00 - 16:00
                    </p>
                </div>
                <div class="hidden-xs hidden-sm col-md-1 col-lg-1">
                </div>
            </div>
        </div>
        <div class="container-fluid kopirajtfuter">
            <div class="row">
                © Milos Seckovic, 2017
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>

</html>