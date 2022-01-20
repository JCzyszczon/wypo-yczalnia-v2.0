<?php
	session_start();

	if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)){
		header('Location: glowna.php');
		exit();
	}
?>

<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <meta name="author" content="Jakub Czyszczoń, Adam Jasiński">
    <meta name="description" content="Oglądaj najlepsze filmy i seriale już dziś! Czekają na ciebie największe nowości kinowe oraz stare klasyki.">
    <meta name="keywords" content="filmy, seriale, wypożyczalnia filmów">
    <link rel="stylesheet" href="style-log.php">
    <!--BoxIcons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
     <!-- Link Swiper's CSS -->
     <link
     rel="stylesheet"
     href="https://unpkg.com/swiper/swiper-bundle.min.css"
   />
</head>
<body>
    <div class="go-back"></div><a href="index.php"><i class='bx bx-arrow-back arrow'></i></a></div>

    <article>
        <div id="container">
            <form action="logowanie.php" method="post">
                
                <input type="text" name="login" placeholder="login" onfocus="this.placeholder=''" onblur="this.placeholder='login'" required>
                
                <input type="password" name="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'" required>
                
                <input type="submit" value="Zaloguj się">
                
            </form>
            <div class="info">
                <div class="pas"><a href="#">Nie pamiętasz hasła?</a></div>
                <div class="rej"><a href="rejestracja.php">Zarejestruj się</a></div>
                <div style="clear:both;"></div>
            </div>
        </div>
    </article>

<?php
	if(isset($_SESSION['blad'])){
		echo $_SESSION['blad'];
	}
?>

</body>
</html>