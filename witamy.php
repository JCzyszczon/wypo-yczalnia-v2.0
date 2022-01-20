<?php
	session_start();

	if((!isset($_SESSION['udanarejestracja']))){
		header('Location: index.php');
		exit();
	}else{
        unset($_SESSION['udanarejestracja']);
    }

    //usuwamy zmiennych pamietajacych wartosci
    if(isset($_SESSION['fr_imie'])) unset($_SESSION['fr_imie']);
    if(isset($_SESSION['fr_nazwisko'])) unset($_SESSION['fr_nazwisko']);
    if(isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
    if(isset($_SESSION['fr_tel'])) unset($_SESSION['fr_tel']);
    if(isset($_SESSION['fr_haslo1'])) unset($_SESSION['fr_haslo1']);
    if(isset($_SESSION['fr_haslo2'])) unset($_SESSION['fr_haslo2']);
    if(isset($_SESSION['fr_regulamin'])) unset($_SESSION['fr_regulamin']);

    //usuwanie bledow rejestracji
    if(isset($_SESSION['e_imie'])) unset($_SESSION['e_imie']);
    if(isset($_SESSION['e_nazwisko'])) unset($_SESSION['e_nazwisko']);
    if(isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
    if(isset($_SESSION['e_tel'])) unset($_SESSION['e_tel']);
    if(isset($_SESSION['e_haslo1'])) unset($_SESSION['e_haslo1']);
    if(isset($_SESSION['e_haslo2'])) unset($_SESSION['e_haslo2']);
    if(isset($_SESSION['e_regulamin'])) unset($_SESSION['e_regulamin']);
    if(isset($_SESSION['e_bot'])) unset($_SESSION['e_bot']);
?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>NETFLEX - witamy!</title>
    <style>
        *{
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
            scroll-padding-top: 2rem;
            scroll-behavior: smooth;

        }
        h1{
            margin-top: 50px;
            color: #fff;
            text-align: center;
        }
        .btn1{
            padding: 0.7rem 1.4rem;
            background-color: #ff2c1f;
            color: #fff;
            font-weight: 400;
            border-radius: 0.5rem;
            justify-content: none;
            align-items: none;
            position: relative;
            left: 50;
            top: 15%;
        }
        .btn1:hover{
            background-color: #fa1216;
        }
        body{
            background-image: url("img/tlo_wyp.png");
            color: #fff;
        }
    </style>
</head>

<body>
	
	<h1>Dziękujemy za rejestracje! Możesz już się zalogować na konto<h1> <br /><br />

	<a href="login.php" class="btn1">Logowanie</a> <br><br>
	

</body>
</html>