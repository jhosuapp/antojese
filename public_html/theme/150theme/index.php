<?php include './template-part/header.php' ?>

<?php include './template-part/menu-lateral.php'?>

<!-- VALIDACION PARA PAGINA HOME-->
<div class="enable-home"></div>


<section class="ctn filters">
    <form class="filters-block input-custom" data-aos="custom">
        <!--OPCIONES RADIO BUTTONS -->
        <div class="input-custom__ctn">
            <div class="input-custom__radio">
                <input type="radio" name="destino" id="idaVuelta" checked>
                <label for="idaVuelta">Ida y vuelta</label>
            </div>
            <div class="input-custom__radio">
                <input type="radio" name="destino" id="soloIda">
                <label for="soloIda">Solo ida</label>
            </div>
            <div class="input-custom__radio">
                <input type="radio" name="destino" id="Multidestino">
                <label for="Multidestino">Multidestino</label>
            </div>
        </div>
        <!-- OPCIONES -->
        <div class="input-custom__options">
            <div class="input-custom__block">
                <div class="input-custom__item">
                    <label for="origin">Origen</label>
                    <input type="text" id="origin" name="origin" placeholder="Ciudad o aeropouerto">
                    <img src="./assets/icons/position.svg" alt="icon">
                </div>
                <p class="error-message">Texto de ayuda</p>
            </div>

            <div class="input-custom__block">
                <div class="input-custom__item">
                    <label for="origin">Origen</label>
                    <input type="text" id="origin" name="origin" placeholder="Ciudad o aeropouerto">
                    <img src="./assets/icons/position.svg" alt="icon">
                </div>
                <p class="error-message">Texto de ayuda</p>
            </div>
        </div>
        <!-- OPCIONES CHECKBOX -->
        <div class="input-custom__ctn">
            <div class="input-custom__checkbox">
                <input type="checkbox" name="EquipajeMano" id="EquipajeMano" checked>
                <label for="EquipajeMano">Equipaje de mano</label>
            </div>
            <div class="input-custom__checkbox">
                <input type="checkbox" name="EquipajeEnCabina" id="EquipajeEnCabina">
                <label for="EquipajeEnCabina">Equipaje en cabina</label>
            </div>
            <div class="input-custom__checkbox">
                <input type="checkbox" name="EquipajeEnBodega" id="EquipajeEnBodega">
                <label for="EquipajeEnBodega">Equipaje en bodega</label>
            </div>
        </div>
        <!-- BUSCAR -->
        <div class="input-custom__submit">
            <a class="btn">Buscar</a>
        </div>
    </form>
</section>

<section class="home-bg ctn">
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
    <article class="home-cities ctn">
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

<?php include './template-part/footer.php' ?>