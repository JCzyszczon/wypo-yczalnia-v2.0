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

    <section class="popular-series" id="popular-series">
        <h2 class="heading" style="margin-top: 100px;">Polecane tytuły</h2>
        <div class="popular-series-container swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/spider_noway.jpg" alt="">
                    </div>
                    <h3>Spider-Man: No Way Home</h3>
                    <p class="movie-list-item-desc">Kiedy cały świat dowiaduje się, że pod maską Spider Mana skrywa się Peter Parker, superbohater decyduje się zwrócić o pomoc do Doktora Strange'a.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>159 min |<span class="red"> Akcja</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/nie_czas_umierac.jpg" alt="">
                    </div>
                    <h3>Nie Czas Umierać</h3>
                    <p class="movie-list-item-desc">Na prośbę swojego starego przyjaciela, Felixa Leitera z CIA, James Bond bierze udział w misji odbicia porwanego naukowca. Trop prowadzi do niebezpiecznego złoczyńcy.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>136 min |<span class="red"> Akcja</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/avengers_koniec.jpg" alt="">
                    </div>
                    <h3>Avengers: Koniec Gry</h3>
                    <p class="movie-list-item-desc">Po wymazaniu połowy życia we Wszechświecie przez Thanosa Avengersi starają się zrobić wszystko, co konieczne, aby pokonać szalonego tytana.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>142 min |<span class="red"> Akcja</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/joker.jpg" alt="">
                    </div>
                    <h3>Joker</h3>
                    <p class="movie-list-item-desc">Strudzony życiem komik popada w obłęd i staje się psychopatycznym mordercą.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>141 min |<span class="red"> Dramat</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/bohemian.jpg" alt="">
                    </div>
                    <h3>Bohemian Rhapsody</h3>
                    <p class="movie-list-item-desc">Dzięki oryginalnemu brzmieniu Queen staje się jednym z najpopularniejszych zespołów w historii muzyki.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>156 min |<span class="red"> Dramat</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/zjawa.jpg" alt="">
                    </div>
                    <h3>Zjawa</h3>
                    <p class="movie-list-item-desc">Hugh Glass szuka zemsty na ludziach, którzy zostawili go poważnie rannego po ataku niedźwiedzia.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>141 min |<span class="red"> Dramat</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/bogowie.jpg" alt="">
                    </div>
                    <h3>Bogowie</h3>
                    <p class="movie-list-item-desc">Profesor Zbigniew Religa, utalentowany kardiochirurg wierzy, że jest w stanie dokonać przeszczepu serca. Nie poddaje się mimo wielu nieudanych operacji.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>120 min |<span class="red"> Biograficzny</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/green_book.jpg" alt="">
                    </div>
                    <h3>Green Book</h3>
                    <p class="movie-list-item-desc">Drobny cwaniaczek z Bronksu zostaje szoferem ekstrawaganckiego muzyka z wyższych sfer i razem wyruszają na wielotygodniowe tournée.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>126 min |<span class="red"> Dramat</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/nietykalni.jpg" alt="">
                    </div>
                    <h3>Nietykalni</h3>
                    <p class="movie-list-item-desc">Sparaliżowany milioner zatrudnia do opieki młodego chłopaka z przedmieścia, który właśnie wyszedł z więzienia.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>120 min |<span class="red"> Biograficzny</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/django.jpg" alt="">
                    </div>
                    <h3>Django</h3>
                    <p class="movie-list-item-desc">Łowca nagród Schultz i czarnoskóry niewolnik Django wyruszają w podróż, aby odbić żonę tego drugiego z rąk bezlitosnego Calvina Candie'ego.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>127 min |<span class="red"> Western</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/wilk_z_wallstreet.jpg" alt="">
                    </div>
                    <h3>Wilk z Wall Street</h3>
                    <p class="movie-list-item-desc">Historia Jordana Belforta, brokera, którego błyskawiczna droga na szczyt i rozrzutny styl życia wzbudziły zainteresowanie FBI.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>134 min |<span class="red"> Biograficzny</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/zielona_mila.jpg" alt="">
                    </div>
                    <h3>Zielona Mila</h3>
                    <p class="movie-list-item-desc">Emerytowany strażnik więzienny opowiada przyjaciółce o niezwykłym mężczyźnie, którego skazano na śmierć za zabójstwo dwóch 9-letnich dziewczynek.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>117 min |<span class="red"> Dramat</span>  </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/skazani_na_shawshank.jpg" alt="">
                    </div>
                    <h3>Skazani Na Shawshank</h3>
                    <p class="movie-list-item-desc">Adaptacja opowiadania Stephena Kinga. Niesłusznie skazany na dożywocie bankier, stara się przetrwać w brutalnym, więziennym świecie.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>139 min |<span class="red"> Dramat</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/forrest_gump.jpg" alt="">
                    </div>
                    <h3>Forrest Gump</h3>
                    <p class="movie-list-item-desc">Historia życia Forresta, chłopca o niskim ilorazie inteligencji z niedowładem kończyn, który staje się miliarderem i bohaterem wojny w Wietnamie.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>132 min |<span class="red"> Dramat</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/zlap_mnie_jesli_potrafisz.jpg" alt="">
                    </div>
                    <h3>Złap Mnie Jeśli Potrafisz</h3>
                    <p class="movie-list-item-desc">Oparta na faktach historia młodego fałszerza, który w latach 60., podając się za pilotów, lekarzy i profesorów, wyłudził z banków ponad 2,5 mln dolarów.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>130 min |<span class="red"> Komedia</span> </span> 
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
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