<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,user-scalable=no">
    <meta name="color-scheme" content="only light">

    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" /> -->


    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Dots&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="second-style.css">
</head>

<body>
    <header>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>



        <div class="background-header"></div>
        <div class="on-off">
            <div class="on">ON</div>
            <div class="off open_on-off">OFF</div>
            <div class="runner open_on-off"></div>
        </div>
    </header>


    <main>
        <div class="parentMenuBurger">
            <div class="menuBurger close">

                <!-- строго первый в меню бургер -->
                <div class="kube">
                    <video muted="" loop="" autoplay="" playsinline="" preload="auto">
                        <!-- <source  src="style/Glass-Cube.webm" type="video/webm"> -->
                        <source src="style/Glass-Cube.mp4" type="video/mp4">

                    </video>
                </div>

                <div class="background"></div>

                <!-- <div class="reg-form">
                    <form action="">
                        <input type="text">
                        <input type="password" id="password" name="password" placeholder="password" required><br><br>

                        <input type="text">
                    </form>
                </div> -->



                <!-- <h1>Форма регистрации</h1> -->
                <div class="reg-form">
                    <div class="form create open">
                        <h1>create account</h1>
                        <p>or use your name when registering</p>

                        <!-- <form action="register.php" method="POST"> -->
                        <form action="" method="POST">
                            <input class="username" type="text" name="usernameUp" placeholder="name" required>
                            <input class="password" type="password" name="passwordUp" placeholder="password" required>

                            <input class="submit" type="submit" id="regButtonUp" value="SIGN UP">
                        </form>
                    </div>

                    <div class="form sign-in">
                        <h1>sign in</h1>
                        <p>or create a new account</p>

                        <!-- <form action="register.php" method="POST"> -->
                        <form action="" method="POST">
                            <input class="username" type="text" name="usernameIn" placeholder="name" required>
                            <input class="password" type="password" name="passwordIn" placeholder="password" required>

                            <input class="submit" type="submit" id="regButtonIn" value="SIGN IN">
                        </form>
                    </div>


                </div>

                <div class="footer">
                <!-- подтягивает из тг -->
                    <div class="telegram">
                        <a href="tg://t.me/m1fkaa">
                            <div class="avatarTelegram">
                                <img src="" alt="">
                                <div class="filter"></div>
                            </div>
                        </a>
                    </div>

                    <div class="label">
                        <h1>m1fka</h1>
                    </div>
                </div>

                <!-- <audio id="audio" src="audio/ENINA.mp3" loop></audio> -->
                <audio id="audio" src="audio/Radiohead-Creep.mp3" loop></audio>





                <!-- <div class="audio-button">pick me</div> -->




                <!-- <ul class="close">
                <li><a href="second.html">random</a></li>
                <li><a href="">plays</a></li>
                <li><a href="profile.html">profile</a></li>
            </ul> -->
            </div>
        </div>




        <div class="dop-info">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="36.000000px" height="36.000000px"
                viewBox="0 0 36.000000 36.000000" preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,36.000000) scale(0.100000,-0.100000)" fill="#c9c9c9" stroke="none">
                    <path d="M100 338 c-132 -67 -132 -249 0 -316 56 -28 104 -28 160 0 132 67
       132 249 0 316 -24 12 -60 22 -80 22 -20 0 -56 -10 -80 -22z m158 -28 c130 -79
       74 -280 -78 -280 -152 0 -208 201 -78 280 43 26 113 26 156 0z" />
                    <path d="M165 251 c-7 -12 12 -24 25 -16 11 7 4 25 -10 25 -5 0 -11 -4 -15 -9z" />
                    <path d="M170 150 c0 -33 4 -60 10 -60 6 0 10 27 10 60 0 33 -4 60 -10 60 -6
       0 -10 -27 -10 -60z" />
                </g>
            </svg>
            <p></p>
        </div>



        <div class="menu">
            <!-- <img class="jk" src="style/surprise-box.png" alt="">
        <img src="style/fortune-wheel.png" alt="">
        <img src="style/crystal-ball.png" alt="">
        <img src="style/free-icon-dice-cube-17554828.png" alt="">
        <img src="style/free-icon-about-me-15165447.png" alt=""> -->
            <div class="menu-randomizer1">
                <div class="shadow-icon">
                    <!-- <img src="style/icon-randomizer.png" alt=""> -->

                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="25px" height="25px"
                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g>
                            <path style="opacity:1" fill="#000000"
                                d="M 3.5,-0.5 C 4.83333,-0.5 6.16667,-0.5 7.5,-0.5C 9.48718,0.343181 11.6539,1.00985 14,1.5C 15.301,1.36126 16.1344,0.694594 16.5,-0.5C 17.8333,-0.5 19.1667,-0.5 20.5,-0.5C 22.217,5.09447 20.717,9.76113 16,13.5C 15.026,17.1731 14.1926,20.8398 13.5,24.5C 11.1667,24.5 8.83333,24.5 6.5,24.5C 5.43089,21.592 5.26423,18.592 6,15.5C 7.64267,13.0232 9.47601,10.6898 11.5,8.5C 10.675,7.61432 9.67504,7.28099 8.5,7.5C 8.5,8.5 8.5,9.5 8.5,10.5C 6.5,10.5 4.5,10.5 2.5,10.5C 2.24401,6.73072 2.57734,3.06405 3.5,-0.5 Z M 4.5,2.5 C 9.54107,3.31633 14.5411,3.31633 19.5,2.5C 18.9802,6.53835 17.1469,9.87168 14,12.5C 12.8512,15.3926 12.3512,18.3926 12.5,21.5C 10.8333,21.5 9.16667,21.5 7.5,21.5C 7.30478,16.224 9.47144,12.224 14,9.5C 14.4828,8.55198 14.6495,7.55198 14.5,6.5C 12.8014,6.37959 11.1347,6.04626 9.5,5.5C 7.60305,5.72817 6.26972,6.72817 5.5,8.5C 4.53443,6.60395 4.2011,4.60395 4.5,2.5 Z" />
                        </g>
                    </svg>

                </div>

            </div>
            <div class="menu-fortuneWheel2">
                <div class="shadow-icon">
                    <!-- <img src="style/icon-fortuneWheel.png" alt=""> -->

                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="25px" height="25px"
                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g>
                            <path style="opacity:1" fill="#000000"
                                d="M 10.5,-0.5 C 11.5,-0.5 12.5,-0.5 13.5,-0.5C 18.8677,1.53434 22.5344,5.201 24.5,10.5C 24.5,11.5 24.5,12.5 24.5,13.5C 22.5344,18.799 18.8677,22.4657 13.5,24.5C 12.5,24.5 11.5,24.5 10.5,24.5C 5.13227,22.4657 1.4656,18.799 -0.5,13.5C -0.5,12.5 -0.5,11.5 -0.5,10.5C 1.4656,5.201 5.13227,1.53434 10.5,-0.5 Z M 7.5,2.5 C 9.83333,2.5 12.1667,2.5 14.5,2.5C 13.0634,10.3049 9.39677,11.4716 3.5,6C 4.73052,4.59524 6.06386,3.42857 7.5,2.5 Z M 17.5,3.5 C 20.3054,5.60334 21.9721,8.43667 22.5,12C 20.5582,14.901 18.2249,15.0676 15.5,12.5C 15.1667,11.6667 14.8333,10.8333 14.5,10C 14.8837,7.47916 15.8837,5.31249 17.5,3.5 Z M 2.5,9.5 C 11.2491,10.9736 12.4158,14.6402 6,20.5C 2.79264,17.3014 1.62597,13.6347 2.5,9.5 Z M 11.5,14.5 C 15.1638,13.9999 18.1638,15.1666 20.5,18C 17.4268,21.3687 13.7602,22.2021 9.5,20.5C 10.3721,18.5504 11.0388,16.5504 11.5,14.5 Z" />
                        </g>
                    </svg>

                </div>
            </div>
            <div class="menu-diceCube3">
                <div class="shadow-icon">
                    <!-- <img src="style/icon-diceCube.png" alt=""> -->

                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="25px" height="25px"
                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g>
                            <path style="opacity:1" fill="#000000"
                                d="M 1.5,0.5 C 8.75461,0.186781 15.9213,0.520114 23,1.5C 23.8123,8.7471 23.6456,15.9138 22.5,23C 15.2529,23.8123 8.08623,23.6456 1,22.5C 0.203625,15.0869 0.370292,7.75355 1.5,0.5 Z M 3.5,2.5 C 9.42544,2.19177 15.2588,2.5251 21,3.5C 21.8072,9.41628 21.6406,15.2496 20.5,21C 14.5837,21.8072 8.75039,21.6406 3,20.5C 2.21238,14.418 2.37905,8.41804 3.5,2.5 Z" />
                        </g>
                        <g>
                            <path style="opacity:1" fill="#000000"
                                d="M 15.5,4.5 C 21.0047,7.17117 20.6713,8.83783 14.5,9.5C 14.366,7.70848 14.6993,6.04181 15.5,4.5 Z" />
                        </g>
                        <g>
                            <path style="opacity:1" fill="#000000"
                                d="M 5.5,14.5 C 6.83333,14.5 8.16667,14.5 9.5,14.5C 9.4652,20.0241 7.79853,20.6908 4.5,16.5C 4.86273,15.8165 5.19607,15.1499 5.5,14.5 Z" />
                        </g>
                    </svg>
                </div>


            </div>
            <div class="menu-coin4">
                <div class="shadow-icon">
                    <!-- <img src="style/icon-coin.png" alt=""> -->

                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="25px" height="25px"
                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g>
                            <path style="opacity:1" fill="#000000"
                                d="M 12.5,24.5 C 12.1667,24.5 11.8333,24.5 11.5,24.5C 2.53591,22.3441 -0.96409,16.6774 1,7.5C 1.41691,6.24402 2.25025,5.57735 3.5,5.5C 4.92466,1.69605 7.758,0.029385 12,0.5C 22.5794,2.31715 25.9127,8.31715 22,18.5C 19.4491,21.6809 16.2824,23.6809 12.5,24.5 Z M 3.5,5.5 C 15.5593,-0.558137 21.3926,3.10853 21,16.5C 17.7015,21.2205 13.2015,22.7205 7.5,21C 2.41642,16.9621 1.08309,11.7954 3.5,5.5 Z" />
                        </g>
                        <g>
                            <path style="opacity:1" fill="#000000"
                                d="M 10.5,6.5 C 13.179,6.52462 14.5123,7.85795 14.5,10.5C 10.551,10.6932 10.551,11.1932 14.5,12C 15.3106,14.2912 14.4772,16.1246 12,17.5C 8.58259,15.9281 8.74926,14.7614 12.5,14C 10.6969,13.3632 9.36359,12.1965 8.5,10.5C 9.63023,9.37765 10.2969,8.04432 10.5,6.5 Z" />
                        </g>
                    </svg>

                </div>

            </div>
            <!-- <div class="menu-myProfile5">
            <div class="shadow-icon"></div> -->
        </div>



        <div class="cont-box"></div>

        <div class="contMain">



            <div class="container1 container">
                <!-- <div class="forScroll"></div> -->
                <div class="background-main">
                    <img src="style/background-main2.jpg" alt="">
                </div>
                <!-- <h1>randomizer</h1> -->



                <div class="random-number">
                    123456789
                </div>

                <div class="button">
                    <button class="generate-button">сгенерировать</button>
                    <div class="generate-button-x">1x</div>
                </div>


                <div class="range open">

                    <div class="min-range">
                        <input type="text" oninput="validateInput(this)" maxlength="10" placeholder="от" />
                    </div>
                    <div class="max-range">
                        <input type="text" oninput="validateInput(this)" maxlength="10" placeholder="до">
                    </div>
                </div>
                <div class="output-list">
                    <textarea placeholder="выборка из списка целых чисел"></textarea>
                </div>

                <div class="additional-settings">
                    <div class="slider">
                        <div class="runner"></div>
                        <div class="dot dot0">
                            <div class="dotT"></div>
                        </div>
                        <div class="dot dot1">
                            <div class="dotT"></div>
                        </div>
                        <div class="dot dot2">
                            <div class="dotT"></div>
                        </div>
                        <!-- <div class="dot dot3"></div> -->
                    </div>
                    <div class="rang-list">от-до</div>


                    <div class="remove-numbers area">
                        <div class="no-repeat-numbers">
                            с повтором ✓
                            <!-- <div class="icon">◯</div> -->
                            <!-- <div class="text-line"></div> -->
                        </div>

                        <textarea placeholder="исключить числа"></textarea>
                        <div class="counter">0</div>
                    </div>

                    <div class="input-list area">
                        <!-- <textarea placeholder="вывод чисел списком" disabled=true></textarea> -->
                        <textarea placeholder="вывод чисел списком"></textarea>
                        <div class="counter">0</div>

                        <div class="text-copy"></div>
                    </div>

                </div>
            </div>

            <div class="container2 container">
                <!-- <div class="forScroll"></div> -->
                <div class="background-main">
                    <img src="style/background-main2.jpg" alt="">
                </div>

                <!-- <h1>fortuneWheel</h1> -->
                <h1>скоро будет</h1>

            </div>

            <div class="container3 container">
                <!-- <div class="forScroll"></div> -->

                <div class="background-main">
                    <img src="style/background-main2.jpg" alt="">
                </div>

                <!-- <h1>diceCube</h1> -->
                <h1>скоро будет</h1>

            </div>

            <div class="container4 container">
                <!-- <div class="forScroll"></div> -->

                <div class="background-main">
                    <img src="style/background-main2.jpg" alt="">
                </div>


                <!-- <canvas id="animationCanvas"></canvas> -->
                <!-- <h1>coin</h1> -->
                <h1>скоро будет</h1>

            </div>
            <!-- 
            <div class="container5 container">
                <div class="background-main">
                    <img src="style/background-main2.jpg" alt="">
                </div>

                <a href="tg://resolve?domain=@m1fkaa">
                <a href="tg://t.me/m1fkaa">
                    <div class="avatarTelegram">
                        подтягивает из тг
                        <img src="" alt="">
                    </div>
                </a>
            </div> -->
            <!-- <div class="container6 container"></div> -->
        </div>
    </main>


    <footer>
        <div class="container">


        </div>
    </footer>

    <script src="second-js.js"></script>
    <script type="module" src="await-js.js"></script>
    <!-- <script src="jquary-js.js"></script> -->


    <?php
    include("forma-php.php");

    ?>



</body>

</html>