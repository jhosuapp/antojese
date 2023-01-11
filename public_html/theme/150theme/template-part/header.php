<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antojese</title>
    <link rel="stylesheet" href="./css/main.css?v=4">
</head>
<body>
    <header class="header" style="background-image: url('./assets/menu/bg-header.jpg')">
    <div class="ctn">
        <a href="#" class="header-logo">
            <img src="./assets/menu/antojese.svg" alt="antojese">
        </a>
        <nav>
            <ul>
                <li>
                    <a href="#">Vuelos</a>
                </li>
                <li>
                    <a href="#">Turisemana</a>
                </li>
                <li>
                    <a href="#">Espectaculos</a>
                </li>
                <li>
                    <a href="#">Hoteles</a>
                </li>
            </ul>
        </nav>
        <div class="header-hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- CONTENIDO SOLO APLICABLE PARA EL HOME -->
    <div class="ctm-block ctm-block-white home-welcome" data-aos="fade-up">
        <h1>Te damos la bienvenida</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dis senectus habitant sapien tempor amet et purus amet. Nec.</p>
    </div>
    <!-- OPCIONES DINAMICAS DEL MENU LATERAL SOLO PARA EL HOME -->
    <div class="header-options" data-aos="custom"></div>
</header>
<!-- LOADER -->
<div id="loadScreen" class="preloader">
    <span class="loader">
        <img src="./assets/logo.svg" alt="">
    </span>
</div>
<!-- CHAT -->
<?php include 'chat.php'?>