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
           $('#link1').click(function(){$.scrollTo($('#akcja'), 300);});
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
           <a id="link1"href="#" class="btn5">Akcja</a>
           <a id="link2"href="#" class="btn5">Dramat</a>
           <a id="link3"href="#" class="btn5">Biograficzny</a>
           <a id="link4"href="#" class="btn5">Fantasy</a>
           <a id="link5"href="#" class="btn5">Komedia</a>
           <a id="link6"href="#" class="btn5">Animowany</a>
           <a id="link7"href="#" class="btn5">Sci-fi</a>
           <a id="link8"href="#" class="btn5">Gangsterski</a>

           <a href="#" class="scrollup"></a>
           

       </div>
        <h2 class="heading" id="akcja">Akcja</h2>
        <div class="movies-container">
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/spider_homecoming.jpg" alt="">
                </div>
                <h3>Spider-Man: Homecoming</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>132 min | Akcja </span> 
            </div>
             </div>
             <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/spider_far.jpg" alt="">
                </div>
                <h3>Spider-Man: Far From Home</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>126 min | Akcja </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/mroczny_rycerz.jpg" alt="">
                </div>
                <h3>Mroczny Rycerz</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>120 min | Akcja </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/avengers_koniec.jpg" alt="">
                </div>
                <h3>Avengers: Koniec Gry</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>142 min | Akcja </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/spider_noway.jpg" alt="">
                </div>
                <h3>Spider-Man: No Way Home</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>120 min | Akcja </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/avengers.jpg" alt="">
                </div>
                <h3>Avengers</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>123 min | Akcja </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/avengers_czas.jpg" alt="">
                </div>
                <h3>Avengers: Czas Ultrona</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>132 min | Akcja </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/avengers_wojna.jpg" alt="">
                </div>
                <h3>Avengers: Wojna Bez Granic</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>120 min | Akcja </span> 
            </div>
            </div>
        </div>
        <h2 class="heading" id="dramat">Dramat</h2>
        <div class="movies-container">
        <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/zjawa.jpg" alt="">
                </div>
                <h3>Zjawa</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>132 min | Dramat </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/gatsby.jpg" alt="">
                </div>
                <h3>Wielki Gatsby</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>126 min | Dramat </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/wyspa_tajemnic.jpg" alt="">
                </div>
                <h3>Wyspa Tajemnic</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>130 min | Dramat </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/krwawy_diament.jpg" alt="">
                </div>
                <h3>Krwawy Diament</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>141 min | Dramat </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/skazani_na_shawshank.jpg" alt="">
                </div>
                <h3>Skazani Na Shawshank</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>122 min | Dramat </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/nietykalni.jpg" alt="">
                </div>
                <h3>Nietykalni</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>144 min | Dramat </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/joker.jpg" alt="">
                </div>
                <h3>Joker</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>132 min | Dramat </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/green_book.jpg" alt="">
                </div>
                <h3>Green Book</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>129 min | Dramat </span> 
            </div>
            </div>
            <div class="swiper-slide box">
            <div class="box">
                <div class="box-img">
                    <img src="img/forrest_gump.jpg" alt="">
                </div>
                <h3>Forrest Gump</h3>
                <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                <span>131 min | Dramat </span> 
            </div>
            </div>
        </div>
        <h2 class="heading" id="biograficzny">Biograficzny</h2>
        <div class="movies-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/blow.jpg" alt="">
                </div>
                <h3>Blow</h3>
                <span>129 min | Biograficzny </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/wszystko_za_zycie.jpg" alt="">
                </div>
                <h3>Wszystko Za Życie</h3>
                <span>132 min | Biograficzny </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/bohemian.jpg" alt="">
                </div>
                <h3>Bohemian Rhapsody</h3>
                <span>134 min | Biograficzny </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/bogowie.jpg" alt="">
                </div>
                <h3>Bogowie</h3>
                <span>126 min | Biograficzny </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/wiedźmin.jpg" alt="">
                </div>
                <h3>Nietykalni</h3>
                <span>123 min | Biograficzny </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/wilk_z_wallstreet.jpg" alt="">
                </div>
                <h3>Wilk Z Wallstreet</h3>
                <span>120 min | Biograficzny </span> 
            </div>
        </div>
        <h2 class="heading" id="fantasy">Fantasy</h2>
        <div class="movies-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/wladca_druzyna.jpg" alt="">
                </div>
                <h3>Władca Pierścieni: Drużyna Pierścienia</h3>
                <span>140 min | Fantasy </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/wladca_dwie.jpg" alt="">
                </div>
                <h3>Władca Pierścieni: Dwie Wieże</h3>
                <span>139 min | Fantasy </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/wladca_powrot.jpg" alt="">
                </div>
                <h3>Władca Pierścieni: Powrót Króla</h3>
                <span>145 min | Fantasy </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/wladca_niezwykla.jpg" alt="">
                </div>
                <h3>Hobbit: Niezwykła Podróż</h3>
                <span>119 min | Fantasy </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/hobbit_pustkowie.jpg" alt="">
                </div>
                <h3>Hobbit: Pustkowie Smauga </h3>
                <span>130 min | Fantasy </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/hobbit_bitwa.jpg" alt="">
                </div>
                <h3>Hobbit: Bitwa Pięciu Armii</h3>
                <span>142 min | Fantasy </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/harry_kamien.jpg" alt="">
                </div>
                <h3>Harry Potter i Kamień Filozoficzny</h3>
                <span>129 min | Fantasy </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/harry_komnata.jpg" alt="">
                </div>
                <h3>Harry Potter i Komnata Tajemnic</h3>
                <span>128 min | Fantasy </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/harry_wiezien.jpg" alt="">
                </div>
                <h3>Harry Potter i Więzień Azkabanu</h3>
                <span>122 min | Fantasy </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/piraci_nanieznanych.jpg" alt="">
                </div>
                <h3>Piraci Z Karaibów: Na Nieznanych Wodach</h3>
                <span>131 min | Fantasy </span> 
            </div>
        </div>
        <h2 class="heading" id="komedia">Komedia</h2>
        <div class="movies-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/zlap_mnie_jesli_potrafisz.jpg" alt="">
                </div>
                <h3>Złap Mnie Jeśli Potrafisz</h3>
                <span>130 min | Komedia </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/forrest_gump.jpg" alt="">
                </div>
                <h3>Forrest Gump</h3>
                <span>135 min | Komedia </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/nietykalni.jpg" alt="">
                </div>
                <h3>Nietykalni</h3>
                <span>137 min | Komedia </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/wilk_z_wallstreet.jpg" alt="">
                </div>
                <h3>Wilk z Wallstreet</h3>
                <span>120 min | Komedia </span> 
            </div>
            
        </div>
        <h2 class="heading" id="animowany">Animowany</h2>
        <div class="movies-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/krol_lew.jpg" alt="">
                </div>
                <h3>Król Lew</h3>
                <span>129 min | Animacje </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/zwierzogrod.jpg" alt="">
                </div>
                <h3>Zwierzogród</h3>
                <span>123 min | Animacje </span> 
            </div>
        </div>

        <h2 class="heading" id="sci-fi">Sci-fi</h2>
        <div class="movies-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/incepcja.jpg" alt="">
                </div>
                <h3>Incepcja</h3>
                <span>132 min | Sci-fi </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/avatar.jpg" alt="">
                </div>
                <h3>Avatar</h3>
                <span>140 min | Sci-fi </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/spider_homecoming.jpg" alt="">
                </div>
                <h3>Spider-Man: Homecoming</h3>
                <span>120 min | Sci-fi </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/avengers.jpg" alt="">
                </div>
                <h3>Avengers</h3>
                <span>135 min | Sci-fi </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/mroczny_rycerz.jpg" alt="">
                </div>
                <h3>Mroczny Rycerz</h3>
                <span>139 min | Sci-fi </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/obcy_8.jpg" alt="">
                </div>
                <h3>Obcy - 8 Pasażer Nostromo</h3>
                <span>130 min | Sci-fi </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/efekt_motyla.jpg" alt="">
                </div>
                <h3>Efekt Motyla</h3>
                <span>132 min | Sci-fi </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/interstellar.jpg" alt="">
                </div>
                <h3>Interstellar</h3>
                <span>129 min | Sci-fi </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/spider_noway.jpg" alt="">
                </div>
                <h3>Spider-Man: No Way Home</h3>
                <span>120 min | Sci-fi </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/avengers_czas.jpg" alt="">
                </div>
                <h3>Avengers: Czas Ultrona</h3>
                <span>136 min | Sci-fi </span> 
            </div>
        </div>
        <h2 class="heading" id="gangsterski">Gangsterski</h2>
        <div class="movies-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/ojciec_chrzestny.jpg" alt="">
                </div>
                <h3>Ojciec Chrzestny</h3>
                <span>135 min | Gangsterski </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/pulp_fiction.jpg" alt="">
                </div>
                <h3>Pulp Fiction</h3>
                <span>122 min | Gangsterski </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/chłopcy_z_ferajny.jpg" alt="">
                </div>
                <h3>Chłopcy z Ferajny</h3>
                <span>142 min | Gangsterski </span> 
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