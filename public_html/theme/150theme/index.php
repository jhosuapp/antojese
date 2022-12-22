<?php include './template-part/header.php' ?>

<?php include './template-part/menu-lateral.php'?>

<!-- VALIDACION PARA PAGINA HOME-->
<div class="enable-home"></div>

<!-- FILTROS -->
<section class="ctn filters">
    <?php include './template-part/filter.php'?>  
</section>
<!-- PROMO -->
<section class="home-bg ctn" data-aos="fade-up">
    <div class="home-bg__ctn"  style="background-image: url('./assets-temporal/bg-home.png')">
        <div class="ctm-block ctm-block-white">
            <h2>Titulo promo</h2>
            <br>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa, distinctio. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa, distinctio.</p>
            <br>
            <a href="#" class="btn">Ver más</a>
        </div>
    </div>
</section>
<!--CIUDADES DESTACADAS -->
<section class="ctn--background">
    <article class="home-cities ctn" data-aos="custom">
        <div class="ctm-block">
            <h2>Aliquam dis hac platea urna viverra.</h2>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dis senectus habitant sapien tempor amet et purus amet. Nec.</p>
        </div>
        <div class="home-cities__grid">
            <a href="#" class="home-cities__item" style="background-image: url('./assets-temporal/bg-home-bottom.jpg')" >
                <div>
                    <p><b>Tokio</b></p>
                    <p>00:00 PM</p>
                </div>
                <div>
                    <h3>23°<sup>c</sup></h3>
                    <span>
                        <img src="./assets/icons/icon-sun.svg" alt="clima">
                        <p>Numblado</p>
                    </span>
                </div>
            </a>
            <a href="#" class="home-cities__item" style="background-image: url('./assets-temporal/bg-home-bottom.jpg')" >
                <div>
                    <p><b>Tokio</b></p>
                    <p>00:00 PM</p>
                </div>
                <div>
                    <h3>23°<sup>c</sup></h3>
                    <span>
                        <img src="./assets/icons/icon-sun.svg" alt="clima">
                        <p>Numblado</p>
                    </span>
                </div>
            </a>
            <a href="#" class="home-cities__item" style="background-image: url('./assets-temporal/bg-home-bottom.jpg')" >
                <div>
                    <p><b>Tokio</b></p>
                    <p>00:00 PM</p>
                </div>
                <div>
                    <h3>23°<sup>c</sup></h3>
                    <span>
                        <img src="./assets/icons/icon-sun.svg" alt="clima">
                        <p>Numblado</p>
                    </span>
                </div>
            </a>
            <a href="#" class="home-cities__item" style="background-image: url('./assets-temporal/bg-home-bottom.jpg')" >
                <div>
                    <p><b>Tokio</b></p>
                    <p>00:00 PM</p>
                </div>
                <div>
                    <h3>23°<sup>c</sup></h3>
                    <span>
                        <img src="./assets/icons/icon-sun.svg" alt="clima">
                        <p>Numblado</p>
                    </span>
                </div>
            </a>
        </div>
    </article>
</section>
<!-- MODAL -->
<div class="input-custom input-modal" id="modal">
    <div class="input-modal__block">
        <div class="input-modal__close">
            <img src="./assets/icons/icon-arrow-left.svg" alt="icon">
        </div>
        <div class="input-modal__dinamic" id="contentDinamic"></div>
        <div class="input-modal__close input-modal__flex">
            <a class="btn">Aplicar</a>
        </div>
    </div>
</div>

<?php include './template-part/footer.php' ?>