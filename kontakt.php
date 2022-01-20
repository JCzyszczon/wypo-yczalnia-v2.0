<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NETFLEX - kontakt</title>
    <meta name="author" content="Jakub Czyszczoń, Adam Jasiński">
    <meta name="description" content="Oglądaj najlepsze filmy i seriale już dziś! Czekają na ciebie największe nowości kinowe oraz stare klasyki.">
    <meta name="keywords" content="filmy, seriale, wypożyczalnia filmów">
    <link rel="stylesheet" href="style-kontakt.php">
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
            <p>Wyślij Wiadomość</p>
            <form class="contact-form" action="contactform.php" method="post">
                <input type="text" name="name" placeholder="Imię">
                <input type="text" name="mail" placeholder="E-mail">
                <input type="text" name="subject" placeholder="Temat">
                <textarea name="message" placeholder="Treść"></textarea>
                <input type="submit" name="submit">
            <div class="kontakt">
                <h3>Telefon: 123321137</h3>
                <h3>E-mail: admin@netflex.com</h3>
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