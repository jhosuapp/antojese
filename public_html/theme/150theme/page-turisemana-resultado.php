<?php include './template-part/header.php' ?>
<?php include './template-part/menu-lateral.php' ?>

<!-- SEARCH -->
<section class="ctn ctm-filters">
  <div class="ctm-filters__container">
    <div class="ctm-block">
      <p><b>Estados Unidos</b></p>
      <div>
        <p class="ctm-filters__des">
            Lake Havasu City
            <img src="./assets/icons/icon-calendar-white.svg" alt="calendario" />
            Junio
        </p>
      </div>
    </div>
    <div class="ctm-filters__modify">
      <button class="btn btn--icon">Modificar</button>
      <img src="./assets/icons/icon-search.svg" alt="buscar" />
    </div>
  </div>
</section>

<!-- BTN FILTER MOBILE -->
<section class="cars-filter-btn ctm-block">
  <div class="cars-filter-btn__cont">
    <a href="">
      <div class="cars-filter-btn__cont--btn">
        <img src="./assets/icons/filter.svg" alt="" />
        <h5>Filtros</h5>
      </div>
    </a>
    <div class="cars-filter-btn__cont--number">
      <span class="chip">2</span>
    </div>
  </div>
</section>

<!-- CTN PRINCIPAL -->
<section class="ctn turisemana">
    <div class="turisemana__body">
        <article class="ctm-block filters-modal-mobile turisemanaFilters" id="content-modal">
            <div class="ctm-flight__filters">
                <h4>Filtros activos</h4>
                <div class="block" id="dinamic-chips">
                </div>
                <!-- ORDEN FILTROS CELULAR -->
                <div class="input-custom ordery-mobile">
                    <div class="input-custom__select input-custom__select--filter input-custom__no-write">
                        <input type="text" name="selectClase" value="Precio" data-value="precio">
                        <div class="options">
                            <option data-value="menorMayor">Precio menor a mayor</option>
                            <option data-value="mayorMenor">Precio mayor a menor</option>
                        </div>
                        <label>Ordenar por</label>
                    </div>
                </div>
            </div>
            <!-- Personas -->
            <div class="toggleTurisemana ctm-flight__filters">
                <div class="toggleTurisemana__show">
                    <h5>Número de personas</h5>
                </div>
                <div class="toggleTurisemana__hidden input-custom">
                    <div class="input-custom__select input-custom__no-write" id="selectToggle">
                        <input type="text" name="selectClase" value="Selecione una opción" data-value="economica">
                        <div class="options">
                            <option data-value="economica">2 Persona</option>
                            <option data-value="premiumEconomy">4 personas</option>
                            <option data-value="ejecutivaBusiness">6 personas</option>
                            <option data-value="primeraClase">8 personas</option>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Calificación -->
            <div class="toggleTurisemana ctm-flight__filters">
                <div class="toggleTurisemana__show">
                    <h5>Calificación</h5>
                </div>
                <div class="toggleTurisemana__hidden input-custom">
                    <div class="input-custom__select input-custom__no-write" id="selectToggle">
                        <input type="text" name="selectClase" value="Selecione una opción" data-value="economica">
                        <div class="options">
                            <option data-value="economica">2 Persona</option>
                            <option data-value="premiumEconomy">4 personas</option>
                            <option data-value="ejecutivaBusiness">6 personas</option>
                            <option data-value="primeraClase">8 personas</option>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tipo de cocina -->
            <div class="toggleTurisemana ctm-flight__filters">
                <div class="toggleTurisemana__show">
                    <h5>Tipo de cocina</h5>
                </div>
                <div class="toggleTurisemana__hidden input-custom">
                    <div class="input-custom__select input-custom__no-write" id="selectToggle">
                        <input type="text" name="selectClase" value="Selecione una opción" data-value="economica">
                        <div class="options">
                            <option data-value="economica">Mini</option>
                            <option data-value="premiumEconomy">Parcial</option>
                            <option data-value="ejecutivaBusiness">Completa</option>
                            <option data-value="primeraClase">No tiene</option>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="turisemanaContent">
            <!-- FILTROS Origen -->
            <div class="ctm-flight__rst-info">
                <div class="input-custom">
                    <div class="input-custom__select input-custom__select--filter input-custom__no-write">
                        <input type="text" name="selectClase" value="Precio" data-value="precio">
                        <div class="options">
                            <option data-value="menorMayor">Precio menor a mayor</option>
                            <option data-value="mayorMenor">Precio mayor a menor</option>
                        </div>
                        <label>Origen</label>
                    </div>
                </div>
            </div>
            <!-- CONTENEDORES LUGARES -->
            <div class="turisemanaContent__body">
                <div class="turisemanaContent__house">
                    <div class="description">
                        <div class="description__swiper">
                            <div class="swiper swiperTurisemana">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="./assets-temporal/turisemana/turisemana.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets-temporal/turisemana/turisemana.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets-temporal/turisemana/turisemana.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets-temporal/turisemana/turisemana.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets-temporal/turisemana/turisemana.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                        <div class="description__info">
                            <h2 class="infoTitle">Havasu Dunes Resort</h2>
                            <div class="valoration">
                                <img src="./assets/icons/thumbs-up.svg" alt="buscar" />
                                <img src="./assets/icons/thumbs-up.svg" alt="buscar" />
                                <img src="./assets/icons/thumbs-up.svg" alt="buscar" />
                                <img src="./assets/icons/thumbs-up.svg" alt="buscar" />
                            </div>
                            <div class="infoUbication">
                                <div class="infoUbication__img"></div>
                                <p>USA - Lake Havasu City - AZ</p>
                            </div>
                            <div class="infoContent toggle">
                                <div class="infoContent__btn toggle__show">
                                    <a href="#">Ver detalle</a>
                                </div>
                                <p class="toggleTurisemana__hidden">
                                    Todo lo que es la experiencia de Arizona es accesible desde el Havasu Dunes Resort. Lake Situado a sólo una milla de Lake Havasu City y el Puente de Londres, se puede ir a la playa del lago, golf y pistas de tenis a sólo una milla de distancia, o esquí acuático y windsurf en el lago Havasu, también se encuentra a sólo un minuto de la estación. Si usted está listo para un viaje de un día, Parker Dam está a sólo 30 kilómetros de distancia y los juegos de azar en los casinos de Laughlin, Nevada está a una hora y media de distancia. El complejo también es un buen punto de partida para la presa Hoover, Flagstaff, y el Gran Cañón, ya que está a sólo unas pocas horas de las atracciones.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="availability">
                        <div class="availability__containerTitles">
                            <div class="availabilityTitles">
                                <h3>Tipo</h3>
                                <p>Acomodaión/Cocina</p>
                            </div>
                            <div class="availabilityTitles">
                                <h3>Disponibilidad</h3>
                                <p># de noches</p>
                            </div>
                            <div class="availabilityTitles">
                                <h3>Precio</h3>
                                <p>Impuestos incluidos</p>
                            </div>
                        </div>
                        <div class="availability__typeContent">
                            <div class="typeUnit">
                                <div class="typeUnit__info typeOption input-custom">
                                    <input type="radio" name="radio" id="">
                                    <div class="typeUnit__description">
                                        <h3>Estudio</h3>
                                        <p>4 personas/Cocina Mini</p>
                                    </div>
                                </div>
                                <div class="typeUnit__info availabilityOption">
                                    <p>
                                        2-Jun-2023 / 9-Jun-2023
                                    </p>
                                </div>
                                <div class="typeUnit__info priceOption">
                                    <a href="/page-turisemana-resultado-interna.php" class="btn">
                                        $ 0'000.000
                                    </a>
                                </div>
                            </div>
                            <div class="typeUnit">
                                <div class="typeUnit__info typeOption input-custom">
                                    <input type="radio" name="radio" id="">
                                    <div class="typeUnit__description">
                                        <h3>Estudio</h3>
                                        <p>4 personas/Cocina Mini</p>
                                    </div>
                                </div>
                                <div class="typeUnit__info availabilityOption">
                                    <p>
                                        9-Jun-2023 / 16-Jun-2023
                                    </p>
                                </div>
                                <div class="typeUnit__info priceOption">
                                    <a href="/page-turisemana-resultado-interna.php" class="btn">
                                        $ 0'000.000
                                    </a>
                                </div>
                            </div>
                            <div class="typeUnit">
                                <div class="typeUnit__info typeOption input-custom" input-custom>
                                    <input type="radio" name="radio" id="">
                                    <div class="typeUnit__description">
                                        <h3>Tipo_acomodación</h3>
                                        <p># personas / Tipo_cocina</p>
                                    </div>
                                </div>
                                <div class="typeUnit__info availabilityOption">
                                    <p>
                                        Disponibilidad # noches
                                    </p>
                                </div>
                                <div class="typeUnit__info priceOption">
                                    <a href="/page-turisemana-resultado-interna.php" class="btn">
                                        $ 0'000.000
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btnHouse">
                        <a class="btn" href="#">Seleccionar</a>
                    </div>
                </div>
                <div class="turisemanaContent__house">
                    <div class="description">
                        <div class="description__swiper">
                            <div class="swiper swiperTurisemana">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="./assets-temporal/turisemana/turisemana.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets-temporal/turisemana/turisemana.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets-temporal/turisemana/turisemana.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets-temporal/turisemana/turisemana.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets-temporal/turisemana/turisemana.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                        <div class="description__info">
                            <h2 class="infoTitle">Havasu Dunes Resort</h2>
                            <div class="valoration">
                                <img src="./assets/icons/thumbs-up.svg" alt="buscar" />
                                <img src="./assets/icons/thumbs-up.svg" alt="buscar" />
                                <img src="./assets/icons/thumbs-up.svg" alt="buscar" />
                                <img src="./assets/icons/thumbs-up.svg" alt="buscar" />
                            </div>
                            <div class="infoUbication">
                                <div class="infoUbication__img"></div>
                                <p>USA - Lake Havasu City - AZ</p>
                            </div>
                            <div class="infoContent toggle">
                                <div class="infoContent__btn toggle__show">
                                    <a href="#">Ver detalle</a>
                                </div>
                                <p class="toggleTurisemana__hidden">
                                    Todo lo que es la experiencia de Arizona es accesible desde el Havasu Dunes Resort. Lake Situado a sólo una milla de Lake Havasu City y el Puente de Londres, se puede ir a la playa del lago, golf y pistas de tenis a sólo una milla de distancia, o esquí acuático y windsurf en el lago Havasu, también se encuentra a sólo un minuto de la estación. Si usted está listo para un viaje de un día, Parker Dam está a sólo 30 kilómetros de distancia y los juegos de azar en los casinos de Laughlin, Nevada está a una hora y media de distancia. El complejo también es un buen punto de partida para la presa Hoover, Flagstaff, y el Gran Cañón, ya que está a sólo unas pocas horas de las atracciones.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="availability">
                        <div class="availability__containerTitles">
                            <div class="availabilityTitles">
                                <h3>Tipo</h3>
                                <p>Acomodaión/Cocina</p>
                            </div>
                            <div class="availabilityTitles">
                                <h3>Disponibilidad</h3>
                                <p># de noches</p>
                            </div>
                            <div class="availabilityTitles">
                                <h3>Precio</h3>
                                <p>Impuestos incluidos</p>
                            </div>
                        </div>
                        <div class="availability__typeContent">
                            <div class="typeUnit">
                                <div class="typeUnit__info typeOption input-custom">
                                    <input type="radio" name="radio" id="">
                                    <div class="typeUnit__description">
                                        <h3>Estudio</h3>
                                        <p>4 personas/Cocina Mini</p>
                                    </div>
                                </div>
                                <div class="typeUnit__info availabilityOption">
                                    <p>
                                        2-Jun-2023 / 9-Jun-2023
                                    </p>
                                </div>
                                <div class="typeUnit__info priceOption">
                                    <a href="/page-turisemana-resultado-interna.php" class="btn">
                                        $ 0'000.000
                                    </a>
                                </div>
                            </div>
                            <div class="typeUnit">
                                <div class="typeUnit__info typeOption input-custom">
                                    <input type="radio" name="radio" id="">
                                    <div class="typeUnit__description">
                                        <h3>Estudio</h3>
                                        <p>4 personas/Cocina Mini</p>
                                    </div>
                                </div>
                                <div class="typeUnit__info availabilityOption">
                                    <p>
                                        9-Jun-2023 / 16-Jun-2023
                                    </p>
                                </div>
                                <div class="typeUnit__info priceOption">
                                    <a href="/page-turisemana-resultado-interna.php" class="btn">
                                        $ 0'000.000
                                    </a>
                                </div>
                            </div>
                            <div class="typeUnit">
                                <div class="typeUnit__info typeOption input-custom" input-custom>
                                    <input type="radio" name="radio" id="">
                                    <div class="typeUnit__description">
                                        <h3>Tipo_acomodación</h3>
                                        <p># personas / Tipo_cocina</p>
                                    </div>
                                </div>
                                <div class="typeUnit__info availabilityOption">
                                    <p>
                                        Disponibilidad # noches
                                    </p>
                                </div>
                                <div class="typeUnit__info priceOption">
                                    <a href="/page-turisemana-resultado-interna.php" class="btn">
                                        $ 0'000.000
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btnHouse">
                        <a class="btn" href="#">Seleccionar</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
<?php include './template-part/modal-vuelos.php' ?>
<?php include './template-part/footer.php' ?>