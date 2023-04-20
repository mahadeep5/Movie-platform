<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="viewport" content="IE=edge">
    <meta name="viewport" content="width=devicde-width, initial-scale=1.0">
    <title>Responsive Movie Platform</title>
    <!--link to css-->
    <link rel="stylesheet" href="css/style.css">
    <!--link swiper-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!--fav icon-->
    <link rel="shortcut icon" href="img/fav-icon.png" type="image/x-icon">
    <!--box icon-->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css " rel="stylesheet">
</head>

<body>

    <!--header-->
    <header>
        <!--nav-->
        <div class="nav container">
            <a href="index.html " class="logo">Movie <span>Store</span> 
            </a>
            <nav>
                <ul>
                    <li>
                        <a href="login.php" class="nav-link">
                            <span class='nav-link-title '>login</span>
                        </a>
                    </li>
                    <li>
                        <a href="signup.php" class="nav-link">
                            <span class='nav-link-title'>Sign Up</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php" class="nav-link">
                            <span class='nav-link-title'>log out</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>


        <!--navbar-->
        <div class="navbar">
            <a href="index.php " class=" nav-link nav-active ">
                <i class='bx bx-home'></i>
                <span class='nav-link-title '>Home</span>
            </a>

            <a href="#popular" class="nav-link ">
                <i class='bx bxs-hot'></i>
                <span class='nav-link-title '>Trending</span>
            </a>
            <a href="#movies" class="nav-link ">
                <i class='bx bx-compass'></i>
                <span class='nav-link-title '>Explore</span>
            </a>
            <a href="trailer.html " class="nav-link ">
                <i class='bx bx-tv'></i>
                <span class='nav-link-title'>Movies</span>
            </a>
            <a href="Youtube.html " class="nav-link ">
                <i class='bx bxl-youtube'></i>
                <span class='nav-link-title'>Youtube</span>
            </a>
            <a href="Search.html " class="nav-link ">
                <i class='bx bx-search'></i>
                <span class='nav-link-title'>Search</span>
            </a>
            <a href="video.html " class="nav-link">
                <i class='bx bx-play-circle'></i>
                <span class='nav-link-title '>play-list</span>
            </a>
            <!--languages-->
            <form name="webpage">
                <select name="portfolio" id="portfolio">
                <option value="#">Languages</option>

                <option value="kannada.html">Kannada</option>

                <option value="English.html">English</option>

                <option value="Hindi.html">Hindi</option>

                </select>
            </form>
            <style>
                select#portfolio {
                    font-size: 12px;
                    background-color: var(--container-color);
                    color: white;
                }
            </style>

            <script>
                var urlMenu = document.getElementById('portfolio');
                urlMenu.onchange = function() {
                    var useroption = this.options[this.selectedIndex];
                    if (useroption.value != "nothing") {
                        window.open(useroption.value, "KANNADA ENGLISH HINDHI", "");
                    }
                }
            </script>
        </div>
        </div>
    </header>
    <!--home section-->

    <section class="home container " id="home ">
        <!--home image-->
        <img src="img/home-background.png " alt=" " class="home-img ">
        <!--home text-->
        <div class="home-text">
            <h1 class="home-title">Hitman's wifes<br>Bodyguard</h1>
            <p>Releasing 10 april</p>
            <a href="trailer1.html" class="watch-btn">
                <i class='bx bx-right-arrow'></i>
                <span>watch the trailer</span>
            </a>
        </div>
    </section>
    <!--Home end-->
    <!--popular section start-->
    <section class="popular container" id="popular">
        <!--heading-->
        <div class="heading">
            <h2 class="heading-title">Popular Movies</h2>

            <!--swiper buttons-->
            <div class="swiper-btn ">
                <div class="swiper-button-next"></div>
                <div class=" swiper-button-prev"></div>
            </div>
        </div>
        <!--content-->
        <div class="popular-content swiper">
            <div class="swiper-wrapper">

                <!--movies bx1-->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="img/popular-movie-1.jpg " alt=" " class="movie-box-img ">
                        <div class="box-text ">
                            <h2 class="movie-title ">Spider-man:no way Home</h2>
                            <span class="movie-type ">Action</span>
                            <a href="# " class="watch-btn play-btn ">
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--movies bx2-->
                <div class="swiper-slide ">
                    <div class=" movie-box ">
                        <img src="img/popular-movie-2.jpg " alt=" " class="movie-box-img ">
                        <div class=" box-text ">
                            <h2 class="movie-title ">Jungle Cruise</h2>
                            <span class="movie-type ">Action/Adventure</span>
                            <a href="# " class="watch-btn play-btn ">
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--movies bx3-->
                <div class="swiper-slide ">
                    <div class=" movie-box ">
                        <img src="img/popular-movie-3.jpg " alt=" " class="movie-box-img ">
                        <div class=" box-text ">
                            <h2 class="movie-title ">Loki</h2>
                            <span class="movie-type ">Action</span>
                            <a href=" # " class="watch-btn play-btn ">
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--movies bx4-->
                <div class="swiper-slide ">
                    <div class=" movie-box ">
                        <img src="img/popular-movie-4.jpg " alt=" " class="movie-box-img ">
                        <div class=" box-text ">
                            <h2 class="movie-title ">Squid Game</h2>
                            <span class="movie-type ">Action/Drama</span>
                            <a href=" # " class="watch-btn play-btn ">
                                <i class='bx bx-right-arrow '></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--movies bx5-->
                <div class="swiper-slide ">
                    <div class=" movie-box ">
                        <img src="img/popular-movie-5.jpg " alt=" " class="movie-box-img ">
                        <div class=" box-text ">
                            <h2 class="movie-title ">The falcon and the winter soldier</h2>
                            <span class="movie-type ">Action</span>
                            <a href=" # " class="watch-btn play-btn ">
                                <i class='bx bx-right-arrow '></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--movies bx6-->
                <div class="swiper-slide ">
                    <div class=" movie-box ">
                        <img src="img/popular-movie-6.jpg " alt=" " class="movie-box-img ">
                        <div class=" box-text ">
                            <h2 class="movie-title ">Hawkeye</h2>
                            <span class="movie-type ">Action/Drama</span>
                            <a href=" # " class="watch-btn play-btn ">
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--movies bx7-->
                <div class="swiper-slide ">
                    <div class=" movie-box ">
                        <img src="img/popular-movie-7.jpg " alt=" " class="movie-box-img ">
                        <div class=" box-text ">
                            <h2 class="movie-title ">Agents of S.H.I.E.L.D</h2>
                            <span class="movie-type ">Action</span>
                            <a href=" # " class="watch-btn play-btn ">
                                <i class='bx bx-right-arrow '></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--movies bx9-->
                <div class="swiper-slide ">
                    <div class=" movie-box ">
                        <img src="img/popular-movie-8.jpg " alt=" " class="movie-box-img ">
                        <div class=" box-text ">
                            <h2 class="movie-title ">The flash</h2>
                            <span class="movie-type ">Action/Sci-Fi</span>
                            <a href="# " class="watch-btn play-btn ">
                                <i class='bx bx-right-arrow '></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!--movies bx9-->
                <div class="swiper-slide ">
                    <div class=" movie-box ">
                        <img src="img/popular-movie-1.jpg " alt=" " class="movie-box-img ">
                        <div class=" box-text ">
                            <h2 class="movie-title ">The flash</h2>
                            <span class="movie-type ">Action/Sci-Fi</span>
                            <a href="# " class="watch-btn play-btn ">
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--popular section end-->
    <!--movies section start-->
    <section class="movies container" id="movies">
        <!--heading-->
        <div class="heading">
            <h2 class="heading-title">Movies And Shows</h2>
        </div>
        <!--movies content-->
        <div class="movies-content">
            <!--movie box 1-->
            <div class=" movie-box ">
                <img src="img/movie-1.jpg " alt=" " class="movie-box-img ">
                <div class=" box-text ">
                    <h2 class="movie-title ">Jumanjin:welcome to the Jungle</h2>
                    <span class="movie-type ">Action/Comedy</span>
                    <a href="trailer.html " class="watch-btn play-btn ">
                        <i class='bx bx-right-arrow'></i>
                    </a>
                </div>
            </div>
            <!--movie box 2-->
            <div class=" movie-box ">
                <img src="img/movie-2.jpg " alt=" " class="movie-box-img ">
                <div class=" box-text ">
                    <h2 class="movie-title ">Hitman's wifes Bodyguard</h2>
                    <span class="movie-type ">Action/comedy</span>
                    <a href=" trailer2.html " class="watch-btn play-btn ">
                        <i class='bx bx-right-arrow '></i>
                    </a>
                </div>
            </div>


            <!--movie box 3-->
            <div class=" movie-box ">
                <img src="img/movie-3.jpg " alt=" " class="movie-box-img ">
                <div class=" box-text ">
                    <h2 class="movie-title ">Shang-chi</h2>
                    <span class="movie-type ">Action/Sci-fi</span>
                    <a href="play-page2.html " class="watch-btn play-btn ">
                        <i class='bx bx-right-arrow '></i>
                    </a>
                </div>
            </div>


            <!--movie box 4-->
            <div class=" movie-box ">
                <img src="img/movie-4.jpg " alt=" " class="movie-box-img ">
                <div class=" box-text ">
                    <h2 class="movie-title ">Eternals</h2>
                    <span class="movie-type ">Action/Sci-fi</span>
                    <a href=" play-page3.html " class="watch-btn play-btn ">
                        <i class='bx bx-right-arrow '></i>
                    </a>
                </div>
            </div>


            <!--movie box 5-->
            <div class="movie-box">
                <img src="img/movie-5.jpg " alt=" " class="movie-box-img ">
                <div class=" box-text ">
                    <h2 class="movie-title ">Spectre</h2>
                    <span class="movie-type ">Action/Sci-fi</span>
                    <a href=" play-page4.html " class="watch-btn play-btn ">
                        <i class='bx bx-right-arrow '></i>
                    </a>
                </div>
            </div>


            <!--movie box 6-->
            <div class=" movie-box ">
                <img src="img/movie-6.jpg " alt=" " class="movie-box-img ">
                <div class=" box-text ">
                    <h2 class="movie-title ">Money Heist</h2>
                    <span class="movie-type ">Action/Sci-fi</span>
                    <a href=" play-page5.html " class="watch-btn play-btn ">
                        <i class='bx bx-right-arrow'></i>
                    </a>
                </div>
            </div>

            <!--movie box 7-->
            <div class=" movie-box ">
                <img src="img/movie-7.jpg " alt=" " class="movie-box-img ">
                <div class="box-text ">
                    <h2 class="movie-title "> The Wolverine</h2>
                    <span class="movie-type">Action/Sci-fi</span>
                    <a href="play-page6.html " class="watch-btn play-btn ">
                        <i class='bx bx-right-arrow '></i>
                    </a>
                </div>
            </div>

            <!--movie box 8-->
            <div class=" movie-box ">
                <img src="img/movie-8.jpg " alt=" " class="movie-box-img ">
                <div class=" box-text ">
                    <h2 class="movie-title ">Johnny English</h2>
                    <span class="movie-type ">Action/comedy</span>
                    <a href="play-page7.html " class="watch-btn play-btn ">
                        <i class='bx bx-right-arrow'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--movies section End-->
    <!--next page-->
    <div class="next-page ">
        <a href="nextpage.html" class="next-btn">Next page</a>
    </div>

    <!--copyright-->
    <div class="copyright ">
        <p>&#169; All right reserved</p>
    </div>
    <!--link to swiper js-->
    <script src="js/swiper-bundle.min.js "></script>
    <!--link to js-->
    <script src="js/main.js "></script>
</body>

</html>