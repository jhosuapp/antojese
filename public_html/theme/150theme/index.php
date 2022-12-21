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
        <div class="input-custom__options">
            <!-- OPCIONES ORIGEN DESTINO-->
            <div class="input-custom__block">
                <div class="input-custom__item">
                    <label for="origen">Origen</label>
                    <input type="text" id="origen" name="origen" placeholder="Ciudad o aeropouerto">
                    <img src="./assets/icons/position.svg" alt="icon">
                </div>
                <p class="error-message">Texto de ayuda</p>
            </div>

            <div class="input-custom__block">
                <div class="input-custom__item">
                    <label for="destino">Destino</label>
                    <input type="text" id="destino" name="destino" placeholder="Ciudad o aeropouerto">
                    <img src="./assets/icons/position.svg" alt="icon">
                </div>
                <p class="error-message">Texto de ayuda</p>
            </div>
            <!-- OPCIONES SALIDA REGRESO -->
            <div class="input-custom__block input-custom__no-write input-custom__calendar">
                <div class="input-custom__item">
                    <label for="salida">Salida</label>
                    <input type="text" id="salida" name="salida" placeholder="Fecha de ida">
                    <img src="./assets/icons/icon-calendar.svg" alt="icon">
                </div>
                <p class="error-message">Texto de ayuda</p>
            </div>

            <div class="input-custom__block input-custom__no-write input-custom__calendar">
                <div class="input-custom__item">
                    <label for="regreso">Regreso</label>
                    <input type="text" id="regreso" name="regreso" placeholder="Fecha de regreso">
                    <img src="./assets/icons/icon-calendar.svg" alt="icon">
                </div>
                <p class="error-message">Texto de ayuda</p>
            </div>
            <!-- OPCIONES PASAJEROS -->
            <div class="input-custom__block input-custom__no-write open-modal" id="modalPassengers">
                <div class="input-custom__item">
                    <label for="pasajeros">Pasajeros y clase</label>
                    <input type="text" id="pasajeros" name="pasajeros" placeholder="Fecha de regreso">
                    <img src="./assets/icons/icon-user.svg" alt="icon">
                </div>
                <div class="input-custom__modal">
                    <h5>Pasajeros</h5>
                    <div class="flex">
                        <p>Adultos</p>
                        <div>
                            <span class="minus"></span>
                            <input name="adultos" type="number" id="adultos" value="1">
                            <span class="plus"></span>
                        </div>
                    </div>
                    <div class="flex">
                        <span>
                            <p>Niños</p>
                            <p><i>2 a 17 años</i></p>
                        </span>
                        <div>
                            <span class="minus" id="niñosMinus"></span>
                            <input name="niños" type="number" id="niños" value="0">
                            <span class="plus" id="niñosPlus"></span>
                        </div>
                    </div>
                    <!-- CAMPOS DINAMICOS CON EDADES -->
                    <div class="input-childs" id="dinamiChilds">
                    </div>
                    <div class="flex">
                        <span>
                            <p>Bebés</p>
                            <p><i>Menores de 2 años</i></p>
                        </span>
                        <p></p>
                        <div>
                            <span class="minus"></span>
                            <input name="bebes" type="number" id="bebes" value="0">
                            <span class="plus"></span>
                        </div>
                    </div>
                    <h5>Clase</h5>
                    <div class="input-custom__select input-custom__no-write" id="dinamicClase">
                        <input type="text" name="selectClase" value="Economica" data-value="economica">
                        <div class="options">
                            <option data-value="economica">Economica</option>
                            <option data-value="premiumEconomy">Premium economy</option>
                            <option data-value="ejecutivaBusiness">Ejecutiva/Business</option>
                            <option data-value="primeraClase">Primera clase</option>
                        </div>
                    </div>
                </div>
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
<div class="input-custom input-modal" id="modal"></div>

<?php include './template-part/footer.php' ?>