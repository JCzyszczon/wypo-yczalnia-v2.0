<?php

	session_start();

	if((!isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==false)){
		header('Location: index.php');
		exit();	
	}
?>

<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NETFLEX - strona główna</title>
    <meta name="author" content="Jakub Czyszczoń, Adam Jasiński">
    <meta name="description" content="Oglądaj najlepsze filmy i seriale już dziś! Czekają na ciebie największe nowości kinowe oraz stare klasyki.">
    <meta name="keywords" content="filmy, seriale, wypożyczalnia filmów">
    <link rel="stylesheet" href="style-main.php">
    <!--BoxIcons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
     <!-- Link Swiper's CSS -->
     <link
     rel="stylesheet"
     href="https://unpkg.com/swiper/swiper-bundle.min.css"
   />

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   <script src="jquery.scrollTo.min.js"></script>
   
   <script>
       jQuery(function($)
       {
           //zresetuj scrolla
           $.scrollTo(0);
           $('#link1').click(function(){$.scrollTo($('#kryminal'), 300);});
           $('#link2').click(function(){$.scrollTo($('#dramat'), 300);});
           $('#link3').click(function(){$.scrollTo($('#biograficzny'), 300);});
           $('#link4').click(function(){$.scrollTo($('#fantasy'), 300);});
           $('#link5').click(function(){$.scrollTo($('#komedia'), 300);});
           $('#link6').click(function(){$.scrollTo($('#animowany'), 300);});
           $('#link7').click(function(){$.scrollTo($('#sci-fi'), 300);});
           $('#link8').click(function(){$.scrollTo($('#gangsterski'), 300);});
           $('.scrollup').click(function(){$.scrollTo($('body'), 500);});
       }
       );
       
       // pokaż podczas przewijania
       $(window).scroll(function()
       {
           if($(this).scrollTop()>300) $('.scrollup').fadeIn();
           else $('.scrollup').fadeOut();
       }
       
       );
   </script>


</head>
<body>
    <header>
        <a href="glowna.php" class="logo">
            <i class='bx bxs-movie'></i> NETFLEX
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="glowna.php">Strona główna</a></li>
            <li><a href="filmy.php">Filmy</a></li>
            <li><a href="seriale.php">Seriale</a></li>
            <li><a href="polecane.php">Polecane</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
            
        </ul>
        <div class="text">
            <div claas="search_logo">
                <i class='bx bx-search'></i>
            </div>
            <div class="search_input">
                <input type="search" placeholder="Wyszukaj tytuł" class="search_bar">
            </div>
        </div>
        <a href="#" class="shop1"><i class='bx bxs-cart-add' ></i></a>
        <a href="#" class="usr"><i class='bx bxs-user'></i></a>
    </header>

   <section class="popular-movies" id="popular-movies">
       <div class="gatunki">
           <a id="link1"href="#" class="btn5">Kryminał</a>
           <a id="link2"href="#" class="btn5">Dramat</a>
           <a id="link3"href="#" class="btn5">Biograficzny</a>
           <a id="link4"href="#" class="btn5">Fantasy</a>
           <a id="link5"href="#" class="btn5">Komedia</a>
           <a id="link6"href="#" class="btn5">Animowany</a>
           <a id="link7"href="#" class="btn5">Sci-fi</a>
           <a id="link8"href="#" class="btn5">Gangsterski</a>

           <a href="#" class="scrollup"></a>
           

       </div>
        <h2 class="heading" id="kryminal">Kryminał</h2>
        <div class="movies-container">
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/gomorra.jpg" alt="">
                </div>
                <h3>Gomorra</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>40 min | Kryminał </span> 
            </div>
             </div>
             <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/narcos.jpg" alt="">
                </div>
                <h3>Narcos</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>50 min | Kryminał </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/sherlock.jpg" alt="">
                </div>
                <h3>Sherlock</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>60 min | Kryminał </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/detektyw.jpg" alt="">
                </div>
                <h3>Detektyw</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>50 min | Kryminał </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/peaky_blinders.jpg" alt="">
                </div>
                <h3>Peaky Blinders</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>50 min | Kryminał </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/breaking_bad.jpg" alt="">
                </div>
                <h3>Breaking Bad</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>49 min | Kryminał </span> 
            </div>
            </div>
        </div>
        <h2 class="heading" id="dramat">Dramat</h2>
        <div class="movies-container">
        <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/stranger_things.jpg" alt="">
                </div>
                <h3>Stranger Things</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>59 min | Dramat </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/rodzina_soprano.jpg" alt="">
                </div>
                <h3>Rodzina Soprano</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>41 min | Dramat </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/gomorra.jpg" alt="">
                </div>
                <h3>Gomorra</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>49 min | Dramat </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/narcos.jpg" alt="">
                </div>
                <h3>Narcos</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>54 min | Dramat </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/bojack_horseman.jpg" alt="">
                </div>
                <h3>BoJack Horseman</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>30 min | Dramat </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/sherlock.jpg" alt="">
                </div>
                <h3>Sherlock</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>120 min | Dramat </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/wikingowie.jpg" alt="">
                </div>
                <h3>Wikingowie</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>42 min | Dramat </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/detektyw.jpg" alt="">
                </div>
                <h3>Detektyw</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>50 min | Dramat </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/peaky_blinders.jpg" alt="">
                </div>
                <h3>Peaky Blinders</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>49 min | Dramat </span> 
            </div>
            </div>
            <div class="swiper-slide box">
                <div class="box">
                    <div class="box-img">
                        <img src="img/gra_o_tron.jpg" alt="">
                    </div>
                    <h3>Gra o Tron</h3>
                    <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                        <a href="login.php" class="btn4">Oglądaj</a>
                        <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>60 min | Dramat </span> 
                </div>
                </div>
        </div>
        <h2 class="heading" id="biograficzny">Biograficzny</h2>
        <div class="movies-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/narcos.jpg" alt="">
                </div>
                <h3>Narcos</h3>
                <span>50 min | Biograficzny </span> 
            </div>
            
        </div>
        <h2 class="heading" id="fantasy">Fantasy</h2>
        <div class="movies-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/wiedźmin.jpg" alt="">
                </div>
                <h3>Wiedźmin</h3>
                <span>55 min | Fantasy </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/arcane.jpg" alt="">
                </div>
                <h3>Arcane</h3>
                <span>39 min | Fantasy </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/gra_o_tron.jpg" alt="">
                </div>
                <h3>Gra o Tron</h3>
                <span>60 min | Fantasy </span> 
            </div>
            
        </div>
        <h2 class="heading" id="komedia">Komedia</h2>
        <div class="movies-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/bojack_horseman.jpg" alt="">
                </div>
                <h3>BoJack Horseman</h3>
                <span>30 min | Komedia </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/chłopaki_z_baraków.jpg" alt="">
                </div>
                <h3>Chłopaki z Baraków</h3>
                <span>25 min | Komedia </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/rick_i_morty.jpg" alt="">
                </div>
                <h3>Rick i Morty</h3>
                <span>40 min | Komedia </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/biuro.jpg" alt="">
                </div>
                <h3>Biuro</h3>
                <span>25 min | Komedia </span> 
            </div>
            
        </div>
        <h2 class="heading" id="animowany">Animowany</h2>
        <div class="movies-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/wojny_klonow.jpg" alt="">
                </div>
                <h3>Gwiezdne Wojny: Wojny Klonów</h3>
                <span>20 min | Animacje </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/bojack_horseman.jpg" alt="">
                </div>
                <h3>BoJack Horseman</h3>
                <span>30 min | Animacje </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/arcane.jpg" alt="">
                </div>
                <h3>Arcane</h3>
                <span>40 min | Animacje </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/rick_i_morty.jpg" alt="">
                </div>
                <h3>Rick i Morty</h3>
                <span>40 min | Animacje </span> 
            </div>
        </div>

        <h2 class="heading" id="sci-fi">Sci-fi</h2>
        <div class="movies-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/stranger_things.jpg" alt="">
                </div>
                <h3>Stranger Things</h3>
                <span>40 min | Sci-fi </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/wojny_klonow.jpg" alt="">
                </div>
                <h3>Gwiezdne Wojny: Wojny Klonów</h3>
                <span>20 min | Sci-fi </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/rick_i_morty.jpg" alt="">
                </div>
                <h3>Rick i Morty</h3>
                <span>40 min | Sci-fi </span> 
            </div>
        </div>
        <h2 class="heading" id="gangsterski">Gangsterski</h2>
        <div class="movies-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/rodzina_soprano.jpg" alt="">
                </div>
                <h3>Rodzina Soprano</h3>
                <span>55 min | Gangsterski </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/peaky_blinders.jpg" alt="">
                </div>
                <h3>Peaky Blinders</h3>
                <span>50 min | Gangsterski </span> 
            </div>
            
        </div>
        
    </section>


    <footer>
        <div class="footer">
            <a href="#" class="logo"><i class='bx bxs-movie'></i>NETFLEX</a>
            <div class="info">
                <a href="#">O nas</a>
                <a href="#">Warunki korzystania</a>
                <a href="#">Inwestorzy</a>
            </div>
            <div class="social">
                <a href="https://www.facebook.com" target="_blank">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="https://twitter.com/home" target="_blank">
                    <i class='bx bxl-twitter' ></i>
                </a>
                <a href="https://www.instagram.com" target="_blank">
                    <i class='bx bxl-instagram' ></i>
                </a>
                <a href="https://www.tiktok.com/pl-PL/" target="_blank">
                    <i class='bx bxl-tiktok' ></i>
                </a>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; NETFLEX - wszelkie prawa zastrzeżone.</p>
        </div>
    </footer>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="main.js"></script>

</body>
</html>