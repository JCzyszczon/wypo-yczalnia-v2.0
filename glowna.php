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
        <li><a href="#" class="usr"><i class='bx bxs-user'></i></a>
			<ul>
				<li><a href="#">Konto</a></li>
				<li><a href="#">Zamówienia</a></li>
				<li><a href="logout.php">Wyloguj</a></li>
			</ul>
		</li>
    </header>

    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <div class="swiper-slide container">
                <img src="img/the-witcher-netflix-geralt-sword-henry-cavill-uhdpaper.com-hd-8.1962.jpg" alt="">
                <div class="home-text">
                    <span>Netflix Originals</span>
                    <h1>Wiedźmin <br> Sezon 2</h1>
                    <h3>Wiedźmin Geralt, zmutowany łowca potworów, szuka swojego miejsca w świecie, <br> gdzie ludzie często okazują się gorsi niż najstraszniejsze monstra.</h3>
                    <a href="login.php" class="btn3">Oglądaj</a>
                    <a href="login.php" class="shop"><i class='bx bxs-cart-add' ></i></a>
                </div>
            </div>
            
            <div class="swiper-slide container">
                <img src="img/home3.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Spider-Man: <br> Far from Home </h1>
                    <h3>Peter Parker wyrusza na szkolne wakacje do Europy.<br> Nie będzie mu dane odstawienie kostiumu Spider-mana na zbyt długo.</h3>
                    <a href="login.php" class="btn3">Oglądaj</a>
                    <a href="login.php" class="shop"><i class='bx bxs-cart-add' ></i></a>
                </div>
            </div>
            
            <div class="swiper-slide container">
                <img src="img/home1.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Venom: Let There <br> Be Carnage </h1>
                    <h3>Venom to jedna z najważniejszych, najbardziej złożonych postaci Marvela. Opowiada o dziennikarzu Eddiem Brocku, <br> którego ciało w wyniku eksperymentu scaliło się z obcą formą życia - Venomem.</h3>
                    <a href="login.php" class="btn3">Oglądaj</a>
                    <a href="login.php" class="shop"><i class='bx bxs-cart-add' ></i></a>
                </div>
            </div>
        
        </div>


        <div class="swiper-pagination"></div>
    </section>

<!--   <section class="popular-movies" id="popular-movies">
        <h2 class="heading">Popularne Filmy</h2>
        <div class="movies-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/wiedźmin.jpg" alt="">
                </div>
                <h3>Wiedźmin</h3>
                <span>120 min | Akcja </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/wiedźmin.jpg" alt="">
                </div>
                <h3>Wiedźmin</h3>
                <span>120 min | Akcja </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/wiedźmin.jpg" alt="">
                </div>
                <h3>Wiedźmin</h3>
                <span>120 min | Akcja </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/wiedźmin.jpg" alt="">
                </div>
                <h3>Wiedźmin</h3>
                <span>120 min | Akcja </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/wiedźmin.jpg" alt="">
                </div>
                <h3>Wiedźmin</h3>
                <span>120 min | Akcja </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/wiedźmin.jpg" alt="">
                </div>
                <h3>Wiedźmin</h3>
                <span>120 min | Akcja </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/wiedźmin.jpg" alt="">
                </div>
                <h3>Wiedźmin</h3>
                <span>120 min | Akcja </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/wiedźmin.jpg" alt="">
                </div>
                <h3>Wiedźmin</h3>
                <span>120 min | Akcja </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/wiedźmin.jpg" alt="">
                </div>
                <h3>Wiedźmin</h3>
                <span>120 min | Akcja </span> 
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/wiedźmin.jpg" alt="">
                </div>
                <h3>Wiedźmin</h3>
                <span>120 min | Akcja </span> 
            </div>
        </div>
    </section> -->

    <section class="popular-series" id="popular-series">
        <h2 class="heading">Popularne Filmy</h2>
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

    <section class="popular-series" id="popular-series">
        <h2 class="heading">Popularne Seriale</h2>
        <div class="popular-series-container swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/wiedźmin.jpg" alt="">
                    </div>
                    <h3>Wiedźmin</h3>
                    <p class="movie-list-item-desc">Wiedźmin Geralt, zmutowany łowca potworów, szuka swojego miejsca w świecie, gdzie ludzie często okazują się gorsi niż najstraszniejsze monstra.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>60 min |<span class="red"> Fantasy </span></span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/dom_z_papieru.jpg" alt="">
                    </div>
                    <h3>Dom z Papieru</h3>
                    <p class="movie-list-item-desc">Ośmioro zamaskowanych przestępców napada na hiszpańską mennicę narodową. Ich przedstawicielem jest tajemniczy Profesor.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>43 min |<span class="red"> Akcja</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/wikingowie.jpg" alt="">
                    </div>
                    <h3>Wikingowie</h3>
                    <p class="movie-list-item-desc">Młody wiking, Ragnar Lothbrok, pragnie, by wyprawy łupieżcze odbywały się nie tylko na wschód, ale także w kierunku przeciwnym.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>45 min |<span class="red"> Dramat</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/house_of_cards.jpg" alt="">
                    </div>
                    <h3>House of Cards</h3>
                    <p class="movie-list-item-desc">Francis Underwood jest bezwzględnym politykiem próbującym się zemścić na prezydencie, który pominął go przy obsadzeniu stanowiska sekretarza stanu.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>60 min |<span class="red"> Dramat</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/arcane.jpg" alt="">
                    </div>
                    <h3>Arcane</h3>
                    <p class="movie-list-item-desc">Animowana seria o pochodzeniu dwóch kultowych bohaterek League of Legends — i o sile, która je rozdzieli.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>41 min |<span class="red"> Animacje</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/peaky_blinders.jpg" alt="">
                    </div>
                    <h3>Peaky Blinders</h3>
                    <p class="movie-list-item-desc">Należący do gangsterskiej rodziny z Birmingham Tommy Shelby usiłuje zwiększyć swoje wpływy, wykorzystując skradziony transport broni.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>60 min |<span class="red"> Kryminał </span></span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/biuro.jpg" alt="">
                    </div>
                    <h3>Biuro</h3>
                    <p class="movie-list-item-desc">Kamery towarzyszą pracownikom oddziału firmy sprzedającej artykuły papierowe w czasie ich codziennych obowiązków.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>21 min |<span class="red"> Komedia</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/gra_o_tron.jpg" alt="">
                    </div>
                    <h3>Gra o Tron</h3>
                    <p class="movie-list-item-desc">Adaptacja sagi George'a R.R. Martina. W królestwie Westeros walka o władzę, spiski oraz zbrodnie są na porządku dziennym.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>60 min |<span class="red"> Dramat</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/nasza_planeta.jpg" alt="">
                    </div>
                    <h3>Nasza Planeta</h3>
                    <p class="movie-list-item-desc">Widowiskowe ujęcia rzadko spotykanych zwierząt zostają zestawione z gorzkimi refleksjami o wpływie ludzkości na ich siedliska i inne gatunki zamieszkujące naszą planetę.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>59 min |<span class="red"> Dokumentalny</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/czarnobyl.jpg" alt="">
                    </div>
                    <h3>Czarnobyl</h3>
                    <p class="movie-list-item-desc">Po wybuchu elektrowni jądrowej w Czarnobylu ratownicy poświęcają zdrowie i życie, by ratować Europę przed skutkami katastrofy.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>64 min |<span class="red"> Dramat</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/breaking_bad.jpg" alt="">
                    </div>
                    <h3>Breaking Bad</h3>
                    <p class="movie-list-item-desc">Gdy nauczyciel chemii dowiaduje się, że ma raka, postanawia rozpocząć produkcję metamfetaminy, by finansowo zabezpieczyć swoją rodzinę.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>45 min |<span class="red"> Dramat</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/chłopaki_z_baraków.jpg" alt="">
                    </div>
                    <h3>Chłopaki z Baraków</h3>
                    <p class="movie-list-item-desc">Trzech przyjaciół mieszkających na osiedlu barakowozów zamierza wzbogacić się niewielkim kosztem.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>22 min |<span class="red"> Komedia</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/detektyw.jpg" alt="">
                    </div>
                    <h3>Detektyw</h3>
                    <p class="movie-list-item-desc">Dziwne morderstwo na terenie Kalifornii łączy losy trojga przedstawicieli prawa oraz kryminalisty. Starając się odnaleźć sprawcę, trafiają w sieć spisków, zdrad i intryg.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>60 min |<span class="red"> Kryminał</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/rick_i_morty.jpg" alt="">
                    </div>
                    <h3>Rick i Morty</h3>
                    <p class="movie-list-item-desc">Ekscentryczny naukowiec Rick udaje się ze swoim wnukiem Mortym do najdziwniejszych miejsc w galaktyce i alternatywnych rzeczywistości.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>22 min |<span class="red"> Komedia</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/stranger_things.jpg" alt="">
                    </div>
                    <h3>Stranger Things</h3>
                    <p class="movie-list-item-desc">Podczas powrotu do domu znika dwunastoletni Will Byers. Zaginięcie chłopca jest początkiem dziwnych i niebezpiecznych wydarzeń.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>60 min |<span class="red"> Dramat</span> </span> 
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="popular-series" id="popular-series">
        <h2 class="heading">Nasze propozycje</h2>
        <div class="popular-series-container swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/wyspa_tajemnic.jpg" alt="">
                    </div>
                    <h3>Wyspa Tajemnic</h3>
                    <p class="movie-list-item-desc">Szeryf federalny Daniels stara się dowiedzieć, jakim sposobem z zamkniętej celi w szpitalu dla chorych psychicznie przestępców zniknęła pacjentka.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>141 min |<span class="red"> Dramat</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/wilk_z_wallstreet.jpg" alt="">
                    </div>
                    <h3>Wilk z Wall Street</h3>
                    <p class="movie-list-item-desc">Historia Jordana Belforta, brokera, którego błyskawiczna droga na szczyt i rozrzutny styl życia wzbudziły zainteresowanie FBI.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>132 min |<span class="red"> Biograficzny</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/django.jpg" alt="">
                    </div>
                    <h3>Django</h3>
                    <p class="movie-list-item-desc">Łowca nagród Schultz i czarnoskóry niewolnik Django wyruszają w podróż, aby odbić żonę tego drugiego z rąk bezlitosnego Calvina Candie'ego.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>120 min |<span class="red"> Western</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/avengers.jpg" alt="">
                    </div>
                    <h3>Avengers</h3>
                    <p class="movie-list-item-desc">Grupa superbohaterów, na czele z Thorem, Iron Manem i Hulkiem, łączy siły, by obronić Ziemię przed inwazją kosmitów.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>142 min |<span class="red"> Akcja</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/mroczny_rycerz.jpg" alt="">
                    </div>
                    <h3>Mroczny Rycerz</h3>
                    <p class="movie-list-item-desc">Batman, z pomocą porucznika Gordona oraz prokuratora Harveya Denta, występuje przeciwko przerażającemu i nieobliczalnemu Jokerowi.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>130 min |<span class="red"> Akcja</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/forrest_gump.jpg" alt="">
                    </div>
                    <h3>Forrest Gump</h3>
                    <p class="movie-list-item-desc">Historia życia Forresta, chłopca o niskim ilorazie inteligencji z niedowładem kończyn, który staje się miliarderem i bohaterem wojny w Wietnamie.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>129 min |<span class="red"> Dramat</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/bogowie.jpg" alt="">
                    </div>
                    <h3>Bogowie</h3>
                    <p class="movie-list-item-desc">Profesor Zbigniew Religa, utalentowany kardiochirurg wierzy, że jest w stanie dokonać przeszczepu serca. Nie poddaje się mimo wielu nieudanych operacji.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>129 min |<span class="red"> Biograficzny</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/interstellar.jpg" alt="">
                    </div>
                    <h3>Interstellar</h3>
                    <p class="movie-list-item-desc">Byt ludzkości na Ziemi dobiega końca wskutek zmian klimatycznych. Grupa naukowców odkrywa tunel czasoprzestrzenny.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>149 min |<span class="red"> Sci-Fi</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/zwierzogrod.jpg" alt="">
                    </div>
                    <h3>Zwierzogród</h3>
                    <p class="movie-list-item-desc">Nick Bajer – żyjący z drobnych przekrętów szczwany lis, i Judy Hops – pierwszy w historii królik zatrudniony w policji, łączą siły, by rozwiązać pewną kryminalną zagadkę.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>121 min |<span class="red"> Animacja</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/wszystko_za_zycie.jpg" alt="">
                    </div>
                    <h3>Wszystko za Życie</h3>
                    <p class="movie-list-item-desc">Christopher kończy studia, ale zamiast poświęcić się karierze zawodowej, wyrusza autostopem w kierunku Alaski.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>125 min |<span class="red"> Biograficzny</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/wladca_druzyna.jpg" alt="">
                    </div>
                    <h3>Władca Pierścieni: Drużyna Pierścienia</h3>
                    <p class="movie-list-item-desc">Podróż hobbita z Shire i jego ośmiu towarzyszy, której celem jest zniszczenie potężnego pierścienia pożądanego przez Czarnego Władcę - Saurona.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>139 min |<span class="red"> Przygodowy</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/wladca_niezwykla.jpg" alt="">
                    </div>
                    <h3>Hobbit: Niezwykła Podróż</h3>
                    <p class="movie-list-item-desc">Hobbit Bilbo Baggins wyrusza w niebezpieczną podroż, by wraz z czarodziejem Gandalfem i trzynastoma krasnoludami pokonać smoka Smauga.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>118 min |<span class="red"> Przygodowy</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/harry_kamien.jpg" alt="">
                    </div>
                    <h3>Harry Potter i Kamień Filozoficzny</h3>
                    <p class="movie-list-item-desc">W dniu jedenastych urodzin Harry dowiaduje się, że jest czarodziejem. Czeka na niego szkoła magii pełna tajemnic.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>144 min |<span class="red"> Przygodowy</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/piraci_klatwa.jpg" alt="">
                    </div>
                    <h3>Piraci z Karaibów: Klątwa Czarnej Perły</h3>
                    <p class="movie-list-item-desc">Kowal Will Turner sprzymierza się z kapitanem Jackiem Sparrowem, by odzyskać swoją miłość - porwaną córkę gubernatora.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>131 min |<span class="red"> Przygodowy</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/gatsby.jpg" alt="">
                    </div>
                    <h3>Wielki Gatsby</h3>
                    <p class="movie-list-item-desc">Nowy Jork, rok 1922. Milioner Jay Gatsby spotyka po pięciu latach swoją wielką miłość, Daisy, z którą wcześniej rozdzieliły go koleje losu.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>127 min |<span class="red"> Dramat</span> </span> 
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="popular-series" id="popular-series">
        <h2 class="heading">Filmowe Klasyki</h2>
        <div class="popular-series-container swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/skazani_na_shawshank.jpg" alt="">
                    </div>
                    <h3>Skazani na Shawshank</h3>
                    <p class="movie-list-item-desc">Adaptacja opowiadania Stephena Kinga. Niesłusznie skazany na dożywocie bankier, stara się przetrwać w brutalnym, więziennym świecie.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>135 min |<span class="red"> Dramat</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/zielona_mila.jpg" alt="">
                    </div>
                    <h3>Zielona Mila</h3>
                    <p class="movie-list-item-desc">Emerytowany strażnik więzienny opowiada przyjaciółce o niezwykłym mężczyźnie, którego skazano na śmierć za zabójstwo dwóch 9-letnich dziewczynek.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>141 min |<span class="red"> Dramat</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/ojciec_chrzestny.jpg" alt="">
                    </div>
                    <h3>Ojciec Chrzestny</h3>
                    <p class="movie-list-item-desc">Opowieść o nowojorskiej rodzinie mafijnej. Starzejący się Don Corleone pragnie przekazać władzę swojemu synowi.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>151 min |<span class="red"> Gangsterski</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/pulp_fiction.jpg" alt="">
                    </div>
                    <h3>Pulp Fiction</h3>
                    <p class="movie-list-item-desc">Przemoc i odkupienie w opowieści o dwóch płatnych mordercach pracujących na zlecenie mafii, żonie gangstera, bokserze i parze okradającej ludzi w restauracji.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>127 min |<span class="red"> Gangsterski</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/podziemny_krag.jpg" alt="">
                    </div>
                    <h3>Podziemny Krąg</h3>
                    <p class="movie-list-item-desc">Dwóch mężczyzn znudzonych rutyną zakłada klub, w którym co tydzień odbywają się walki na gołe pięści.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>131 min |<span class="red"> Dramat</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/krol_lew.jpg" alt="">
                    </div>
                    <h3>Król Lew</h3>
                    <p class="movie-list-item-desc">Targany niesłusznymi wyrzutami sumienia po śmierci ojca mały lew Simba skazuje się na wygnanie, rezygnując z przynależnego mu miejsca na czele stada.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>120 min |<span class="red"> Animacje</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/zlap_mnie_jesli_potrafisz.jpg" alt="">
                    </div>
                    <h3>Złap Mnie Jeśli Potrafisz</h3>
                    <p class="movie-list-item-desc">Oparta na faktach historia młodego fałszerza, który w latach 60., podając się za pilotów, lekarzy i profesorów, wyłudził z banków ponad 2,5 mln dolarów.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>128 min |<span class="red"> Komedia</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/obcy_8.jpg" alt="">
                    </div>
                    <h3>Obcy - 8 Pasażer Nostromo</h3>
                    <p class="movie-list-item-desc">Załoga statku kosmicznego Nostromo odbiera tajemniczy sygnał i ląduje na niewielkiej planetoidzie, gdzie jeden z jej członków zostaje zaatakowany przez obcą formę życia.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>130 min |<span class="red"> Sci-Fi</span> </span> 
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/krwawy_diament.jpg" alt="">
                    </div>
                    <h3>Krwawy Diament</h3>
                    <p class="movie-list-item-desc">Przemytnik z RPA i rybak z ludu Mende wyruszają na poszukiwanie różowego diamentu, który mógłby zmienić ich życie.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>135 min |<span class="red"> Dramat</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/blow.jpg" alt="">
                    </div>
                    <h3>Blow</h3>
                    <p class="movie-list-item-desc">Oparta na faktach historia George'a Junga, który w latach 80. dorobił się fortuny na handlu narkotykami.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>119 min |<span class="red"> Biograficzny</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/efekt_motyla.jpg" alt="">
                    </div>
                    <h3>Efekt Motyla</h3>
                    <p class="movie-list-item-desc">Evan, który potrafi podróżować w czasie, przekona się, że nawet najdrobniejsza zmiana w przeszłości ma kolosalny wpływ na teraźniejszość.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>131 min |<span class="red"> Sci-Fi</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/chłopcy_z_ferajny.jpg" alt="">
                    </div>
                    <h3>Chłopcy z Ferajny</h3>
                    <p class="movie-list-item-desc">Kilkunastoletni Henry i Tommy DeVito trafiają pod opiekę potężnego gangstera. Obaj szybko uczą się panujących w mafii reguł.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>140 min |<span class="red"> Dramat</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/forrest_gump.jpg" alt="">
                    </div>
                    <h3>Forrest Gump</h3>
                    <p class="movie-list-item-desc">Historia życia Forresta, chłopca o niskim ilorazie inteligencji z niedowładem kończyn, który staje się miliarderem i bohaterem wojny w Wietnamie.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>122 min |<span class="red"> Dramat</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/avatar.jpg" alt="">
                    </div>
                    <h3>Avatar</h3>
                    <p class="movie-list-item-desc">Jake, sparaliżowany były komandos, zostaje wysłany na planetę Pandora, gdzie zaprzyjaźnia się z lokalną społecznością i postanawia jej pomóc.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>142 min |<span class="red"> Sci-Fi</span> </span>  
                </div>
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="img/incepcja.jpg" alt="">
                    </div>
                    <h3>Incepcja</h3>
                    <p class="movie-list-item-desc">Czasy, gdy technologia pozwala na wchodzenie w świat snów. Złodziej Cobb ma za zadanie wszczepić myśl do śpiącego umysłu.</p>
                    <a href="login.php" class="btn4">Oglądaj</a>
                    <a href="login.php" class="shop2"><i class='bx bxs-cart-add' ></i></a>
                    <span>125 min |<span class="red"> Sci-Fi</span> </span>  
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