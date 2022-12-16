<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antojese</title>
    <link rel="stylesheet" href="../150theme/css/main.css">
</head>
<body>

<header>

    <div id="loadScreen" class="preloader">
        <span class="loader">
            <img src="./assets/logo.svg" alt="">
        </span>
    </div>

    <nav class="nav-container">
        <div class="nav-container__logo">
            <a href="index.php">
                <img src="./assets/logo-antojese.png" alt="logo">
            </a>
        </div>
        <div class="nav-container__options">
            <ul>
                <li><a href="#">Vuelos</a></li>
                <li><a href="#">Turisemana</a></li>
                <li><a href="#">Hoteles</a></li>
                <li><a href="#">Espectáculos</a></li>
            </ul>
        </div>
        <div class="nav-container__menu" id="menuIcon">
            <img class src="./assets/icons/menu.svg" alt="">
        </div>
    </nav>

    <div class="nav-mobile" id="navMobile">
        <div class="nav-mobile__container">
            <div class="nav-mobile__container--close" id="navMobileClose">
                <img src="./assets/icons/close.svg" alt="">
            </div>
            <div class="nav-mobile__container--user">
                <img src="./assets/icons/user.svg" alt=""> <span>Iniciar sesión</span>
            </div>
            <hr>
            <div class="nav-mobile__container--options">
                <div class="nav-mobile__container--options_item">
                    <img src="./assets/icons/vuelos.svg" alt="">
                    <span>Vuelos</span>
                </div>

                <div class="nav-mobile__container--options_item">
                    <img src="./assets/icons/hoteles.svg" alt="">
                    <span>Hoteles</span>
                </div>

                <div class="nav-mobile__container--options_item">
                    <img src="./assets/icons/autos.svg" alt="">
                    <span>Autos</span>
                </div>

                <div class="nav-mobile__container--options_item">
                    <img src="./assets/icons/salasvip.svg" alt="">
                    <span>Salas VIP</span>
                </div>

                <div class=" itemActive nav-mobile__container--options_item">
                    <img src="./assets/icons/turisemana.svg" alt="">

                    <span>Turisemana</span>
                </div>

                <div class="nav-mobile__container--options_item">
                    <img src="./assets/icons/espectaculos.svg" alt="">
                    <span>Espectáculos</span>
                </div> 

                <div class="nav-mobile__container--options_item">
                    <img src="./assets/icons/parques.svg" alt="">
                    <span>Parques</span>
                </div> 

                <div class="nav-mobile__container--options_item">
                    <img src="./assets/icons/buses.svg" alt="">
                    <span>Buses</span>
                </div> 

                <div class="nav-mobile__container--options_item">
                    <img src="./assets/icons/assist.svg" alt="">
                    <span>Assist card</span>
                </div> 
            </div>

            <hr>

            <div class="nav-mobile__container--carrito">
                <img src="./assets/icons/carrito.svg" alt=""> <span>Carrito de compras</span>
            </div>
        </div>
    </div>
</header>