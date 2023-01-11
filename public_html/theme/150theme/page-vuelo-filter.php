<?php include './template-part/header.php' ?>

<?php include './template-part/menu-lateral.php'?>

<section class="ctn ctm-filters">
    <div class="ctm-filters__container">
        <div class="ctm-block">
            <p><b class="flight-origin"></b> - <b class="flight-destiny"></b></p>
            <div>
                <p class="ctm-filters__des">
                    <img src="./assets/icons/icon-calendar-white.svg" alt="calendario">
                    <span class="flight-departure"></span> - <span class="flight-comeback"></span>
                </p>
                <p class="ctm-filters__des">
                    <img src="./assets/icons/icon-user-white.svg" alt="usuario">
                    <span class="flight-people"></span>
                </p>
            </div>
        </div>
        <div class="ctm-filters__modify">
            <button class="btn btn--icon">Modificar</button>
            <img src="./assets/icons/icon-search.svg" alt="buscar">
        </div>
    </div>
</section>
<!-- FILTROS Y RESULTADOS -->
<section class="ctn ctm-flight" id="ancla">
    <article class="ctm-block filters-modal-mobile hidden-options-tab width" id="content-modal">
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
        <!-- PRECIOS -->
        <div class="toggle ctm-flight__filters">
            <div class="toggle__show">
                <h5>Precio</h5>
            </div>
            <div class="toggle__hidden input-custom">
                <div class="rangePrice">
                    <!--CONT-->
                    <div class="rangePrice__slider">
                        <!--SLIDER-->
                        <div class="slider">
                            <div class="progress"></div>
                        </div>
                        <!--INPUT PRICES-->
                        <div class="range-input">
                            <input type="range" class="range-min" name="" id="" min="0" max="1000000" value="0" step="10000" />
                            <input type="range" class="range-max" name="" id="" min="0" max="1000000" value="1000000" step="10000" />
                        </div>
                        <!--PRICES-->
                        <div class="rangePrice__slider--prices">
                            <span id="min-price-txt">$0</span>
                            <span id="max-price-txt">$1.000.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- AEROLINEAS -->
        <div class="toggle ctm-flight__filters">
            <div class="toggle__show">
                <h5>Aerolineas</h5>
            </div>
            <div class="toggle__hidden input-custom">
                <div class="input-custom__checkbox--blue checkbox-filters input-custom__checkbox--img">
                    <input type="checkbox" name="avianca" id="avianca" data-text="Avianca">
                    <label for="avianca">
                        <img src="./assets/logos/avianca.png" alt="">
                        <div>
                            <b>Avianca</b>
                            <span>desde $000.000</span>
                        </div>
                    </label>
                </div>
                <div class="input-custom__checkbox--blue checkbox-filters input-custom__checkbox--img">
                    <input type="checkbox" name="test" id="test" data-text="Test">
                    <label for="test">
                        <img src="./assets/logos/avianca.png" alt="">
                        <div>
                            <b>Test</b>
                            <span>desde $000.000</span>
                        </div>
                    </label>
                </div>
            </div>
        </div>
        <!-- ESCALAS -->
        <div class="toggle ctm-flight__filters">
            <div class="toggle__show">
                <h5>Escalas</h5>
            </div>
            <div class="toggle__hidden input-custom">
                <div class="input-custom__checkbox--blue checkbox-filters input-custom__checkbox--img">
                    <input type="checkbox" name="directo" id="directo" data-text="Directo">
                    <label for="directo">
                        <div>
                            <b>Directo</b>
                            <span>desde $000.000</span>
                        </div>
                    </label>
                </div>
            </div>
        </div>
        <!-- HORARIO -->
        <div class="toggle ctm-flight__filters">
            <div class="toggle__show">
                <h5>Horario</h5>
            </div>
            <div class="toggle__hidden input-custom">
                <div class="rangetime">
                    <!--CONT-->
                    <div class="rangetime__slider">
                        <!--SLIDER-->
                        <div class="slider slider-from">
                            <div class="progress"></div>
                        </div>
                        <!--INPUT timeS-->
                        <div class="range-input range-input-from">
                            <input type="range" class="range-min" name="" id="" min="0" max="1440" value="0" step="15" />
                            <input type="range" class="range-max" name="" id="" min="0" max="1440" value="1440"step="15" />
                        </div>
                        <!--timeS-->
                        <div class="rangetime__slider--times">
                            <span id="min-time-txt">00:00</span>
                            <span id="max-time-txt">23:59</span>
                        </div>
                    </div>
                </div>
                <div class="rangetime">
                    <!--CONT-->
                    <div class="rangetime__slider">
                        <!--SLIDER-->
                        <div class="slider slider-come">
                            <div class="progress"></div>
                        </div>
                        <!--INPUT timeS-->
                        <div class="range-input range-input-come">
                            <input type="range" class="range-min" name="" id="" min="0" max="1440" value="0" step="15" />
                            <input type="range" class="range-max" name="" id="" min="0" max="1440" value="1440" step="15" />
                        </div>
                        <!--timeS-->
                        <div class="rangetime__slider--times">
                            <span id="min-time-txt-come">00:00</span>
                            <span id="max-time-txt-come">23:59</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DURACION -->
        <div class="toggle ctm-flight__filters">
            <div class="toggle__show">
                <h5>Duración</h5>
            </div>
            <div class="toggle__hidden input-custom">
                <div class="input-custom__select input-custom__no-write" id="selectToggle">
                    <input type="text" name="selectClase" value="Selecione una opción" data-value="economica">
                    <div class="options">
                        <option data-value="economica">Economica</option>
                        <option data-value="premiumEconomy">Premium economy</option>
                        <option data-value="ejecutivaBusiness">Ejecutiva/Business</option>
                        <option data-value="primeraClase">Primera clase</option>
                    </div>
                </div>
            </div>
        </div>
        <!-- EQUPAJE -->
        <div class="toggle ctm-flight__filters">
            <div class="toggle__show">
                <h5>Equipaje</h5>
            </div>
            <div class="toggle__hidden input-custom">
                <div class="input-custom__checkbox--blue checkbox-filters input-custom__checkbox--img">
                    <input type="checkbox" name="equpipajeMano" id="equpipajeMano" data-text="Equipaje de mano">
                    <label for="equpipajeMano">
                        <div>
                            <b>Equipaje de mano</b>
                            <span>desde $000.000</span>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    </article>
    <!--RESULTADOS-->
    <article>
        <div class="ctm-flight__rst-tab hidden-options-tab height">
            <button class="open-modal-personality">
                Personaliza tu viaje
                <img src="./assets/icons/icon-info.svg" alt="info">
            </button>
            <button class="open-modal-personality">
                Vuelos recomendados
                <img src="./assets/icons/icon-info.svg" alt="info">
            </button>
        </div>
        <!-- MIGA DE PAN -->
        <div class="ctm-flight__rst-breadcrumb">
            <ul class="tab-general">
                <li class="tab-general-btn">
                    <img class="flightImg" alt="ida">
                    <span>Vuelo de ida</span>
                </li>
                <li class="tab-general-btn">
                    <img class="flightImgCome" alt="vuelta">
                    <span>Vuelo de regreso</span>
                </li>
                <li class="tab-general-btn hidden-options">
                    <img src="" alt="">
                    Detalles
                </li>
            </ul>
        </div>
        <!--TAB GENERAL-->
        <div class="tab-general">
            <!-- TAB VUELOS DE IDA -->
            <div class="tab-general-ctn">
                <!-- FILTROS IDA -->
                <div class="ctm-flight__rst-plane">
                    <div class="block">
                        <figure>
                            <img src="./assets/icons/icon-plane.svg" alt="">
                        </figure>
                        <div class="ctm-block">
                            <h4>Elige tu vuelo de ida</h4>
                            <p class="flight-departure"></p>
                        </div>
                    </div>
                    <div class="input-custom">
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
                <!-- INFO AL USUARIO -->
                <div class="ctm-flight__rst-info ctm-block">
                    <img src="./assets/icons/icon-info.svg" alt="info">
                    <p>El precio incluye los impuestos y comisiones correspondientes al total de pasajeros</p>
                </div>
                <!-- VUELOS -->
                <div class="toggle ctm-flight__rst-agency recommended">
                    <div class="toggle__show ctm-block data-flight">
                        <div class="agency">
                            <img src="./assets/logos/avianca.png" alt="avianca">
                            <p>Avianca</p>
                        </div>
                        <div class="times">
                            <div>
                                <p>00:00</p>
                                <span>Bogotá</span>
                            </div>
                            <div>
                                <span>Directo</span>
                                <span>2h 15m</span>
                            </div>
                            <div>
                                <p>00:00</p>
                                <span>Cali</span>
                            </div>
                        </div>
                        <div class="baggage">
                            <img src="./assets/icons/icon-baggage-store.svg" alt="equipaje">
                            <img src="./assets/icons/icon-baggage-cabin.svg" alt="equipaje">
                            <img src="./assets/icons/icon-baggage-personal.svg" alt="equipaje">
                        </div>
                        <div class="price">
                            <p>$0.000.000</p>
                            <div class="info open-modal-detail">
                                <img src="./assets/icons/icon-info.svg" alt="info">
                            </div>
                        </div>
                    </div>
                    <!--OPCIONES DE EQUIPAJE -->
                    <div class="toggle__hidden">
                        <div class="ctm-flight__rst-baggage swiper swiper-baggage">
                            <div class="swiper-wrapper">
                                <!-- TARIFAS -->
                                <div class="ctm-block swiper-slide">
                                    <h4>Tarifa base</h4>
                                    <h5>Equipaje</h5>
                                    <div class="flex">
                                        <img src="./assets/icons/icon-baggage-personal.svg" alt="equipaje">
                                        <p>
                                            Incluye equipaje personal<br>
                                            <span>El equipaje debe caber bajo la silla de en frente</span>
                                        </p>
                                    </div>
                                    <div class="flex disable">
                                        <img src="./assets/icons/icon-baggage-cabin.svg" alt="equipaje">
                                        <p>No incluye equipaje en cabina</p>
                                    </div>
                                    <div class="flex disable">
                                        <img src="./assets/icons/icon-baggage-store.svg" alt="equipaje">
                                        <p>No incluye equipaje en bodega</p>
                                    </div>
                                    <h5>Servicios</h5>
                                    <div class="flex">
                                        <div class="icon fine"></div>
                                        <p>No incluye equipaje en bodega</p>
                                    </div>
                                    <div class="flex">
                                        <div class="icon wrong"></div>
                                        <p>No incluye equipaje en bodega</p>
                                    </div>
                                    <div class="flex">
                                        <div class="icon wrong"></div>
                                        <p>No incluye equipaje en bodega No incluye equipaje en bodega No incluye equipaje en bodega</p>
                                    </div>
                                    <div class="pay">
                                        <p>Valor por pasajaero</p>
                                        <h4>$000.000.000</h4>
                                        <a href="#ancla" class="btn tab-general-btn data-flightBtn" data-flightbtn="0" data-country="BOG - COL" data-img="./assets/logos/avianca.png">Seleccionar</a>
                                    </div>
                                </div>
                                <!-- TARIFAS -->
                                <div class="ctm-block swiper-slide">
                                    <h4>Tarifa base</h4>
                                    <h5>Equipaje</h5>
                                    <div class="flex">
                                        <img src="./assets/icons/icon-baggage-personal.svg" alt="equipaje">
                                        <p>
                                            Incluye equipaje personal<br>
                                            <span>El equipaje debe caber bajo la silla de en frente</span>
                                        </p>
                                    </div>
                                    <div class="flex">
                                        <img src="./assets/icons/icon-baggage-cabin.svg" alt="equipaje">
                                        <p>Incluye equipaje en cabina</p>
                                    </div>
                                    <div class="flex disable">
                                        <img src="./assets/icons/icon-baggage-store.svg" alt="equipaje">
                                        <p>No incluye equipaje en bodega</p>
                                    </div>
                                    <h5>Servicios</h5>
                                    <div class="flex">
                                        <div class="icon fine"></div>
                                        <p>No incluye equipaje en bodega</p>
                                    </div>
                                    <div class="flex">
                                        <div class="icon fine"></div>
                                        <p>No incluye equipaje en bodega</p>
                                    </div>
                                    <div class="flex">
                                        <div class="icon wrong"></div>
                                        <p>No incluye equipaje en bodega</p>
                                    </div>
                                    <div class="pay">
                                        <p>Valor por pasajaero</p>
                                        <h4>$000.000.000</h4>
                                        <a href="#ancla" class="btn tab-general-btn data-flightBtn" data-flightbtn="0" data-country="BOG - COL" data-img="./assets/logos/avianca.png">Seleccionar</a>
                                    </div>
                                </div>
                                <!-- TARIFAS -->
                                <div class="ctm-block swiper-slide">
                                    <h4>Tarifa base</h4>
                                    <h5>Equipaje</h5>
                                    <div class="flex">
                                        <img src="./assets/icons/icon-baggage-personal.svg" alt="equipaje">
                                        <p>
                                            Incluye equipaje personal<br>
                                            <span>El equipaje debe caber bajo la silla de en frente</span>
                                        </p>
                                    </div>
                                    <div class="flex">
                                        <img src="./assets/icons/icon-baggage-cabin.svg" alt="equipaje">
                                        <p>Incluye equipaje en cabina</p>
                                    </div>
                                    <div class="flex">
                                        <img src="./assets/icons/icon-baggage-store.svg" alt="equipaje">
                                        <p>Incluye equipaje en bodega</p>
                                    </div>
                                    <h5>Servicios</h5>
                                    <div class="flex">
                                        <div class="icon fine"></div>
                                        <p>No incluye equipaje en bodega</p>
                                    </div>
                                    <div class="flex">
                                        <div class="icon fine"></div>
                                        <p>No incluye equipaje en bodega</p>
                                    </div>
                                    <div class="flex">
                                        <div class="icon fine"></div>
                                        <p>No incluye equipaje en bodega</p>
                                    </div>
                                    <div class="pay">
                                        <p>Valor por pasajaero</p>
                                        <h4>$000.000.000</h4>
                                        <a href="#ancla" class="btn tab-general-btn data-flightBtn" data-flightbtn="0" data-country="BOG - COL" data-img="./assets/logos/avianca.png">Seleccionar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!--PAGINADOR-->
                <div class="ctm-flight__show-more">
                    <button class="btn">Cargar más</button>
                </div>
            </div>
            <!-- TAB VUELOS DE VUELTA -->
            <div class="tab-general-ctn">
                <!--VUELO DE IDA SELECCIONADO -->
                <div class="ctm-flight__rst-agency flight-custom" id="flight-from">
                    <div class="flight-custom__ctn ctm-block">
                        <div class="item">
                            <figure>
                                <img src="./assets/icons/icon-plane.svg" alt="">
                            </figure>
                            <p>Vuelo de ida</p>
                        </div>
                        <div class="item">
                            <p class="flight-departure"></p>
                            <a href="#ancla" class="tab-general-btn tab-change-option">Cambiar</a>
                        </div>
                    </div>
                </div>  
                <!-- FILTROS VUELOS DE VUELTA -->
                <div class="ctm-flight__rst-agency flight-custom mt"  id="flight-come">
                    <div class="flight-custom__ctn ctm-block">
                        <div class="item">
                            <figure>
                                <img src="./assets/icons/icon-plane-reverse.svg" alt="">
                            </figure>
                            <p>Vuelo de regreso</p>
                        </div>
                        <div class="item">
                            <p class="flight-comeback"></p>
                            <a href="#ancla" class="tab-general-btn tab-change-option">Cambiar</a>
                        </div>
                    </div>
                    <div class="ctm-flight__rst-plane ctm-flight__rst-plane--margin">
                        <div class="block">
                            <figure>
                                <img src="./assets/icons/icon-plane-reverse.svg" alt="">
                            </figure>
                            <div class="ctm-block">
                                <h4>Elige tu vuelo de regreso</h4>
                                <p class="flight-comeback"></p>
                            </div>
                        </div>
                        <div class="input-custom">
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
                </div>
                <!-- INFO AL USUARIO -->
                <div class="ctm-flight__rst-info ctm-block">
                    <img src="./assets/icons/icon-info.svg" alt="info">
                    <p>El precio incluye los impuestos y comisiones correspondientes al total de pasajeros</p>
                </div>
                <!-- VUELOS -->
                <div class="toggle ctm-flight__rst-agency recommended">
                    <div class="toggle__show ctm-block data-flightCome">
                        <div class="agency">
                            <img src="./assets/logos/avianca.png" alt="avianca">
                            <p>Avianca REGRESO</p>
                        </div>
                        <div class="times">
                            <div>
                                <p>00:00</p>
                                <span>Bogotá</span>
                            </div>
                            <div>
                                <span>Directo</span>
                                <span>2h 15m</span>
                            </div>
                            <div>
                                <p>00:00</p>
                                <span>Cali</span>
                            </div>
                        </div>
                        <div class="baggage">
                            <img src="./assets/icons/icon-baggage-store.svg" alt="equipaje">
                            <img src="./assets/icons/icon-baggage-cabin.svg" alt="equipaje">
                            <img src="./assets/icons/icon-baggage-personal.svg" alt="equipaje">
                        </div>
                        <div class="price">
                            <p>$0.000.000</p>
                            <div class="info open-modal-detail">
                                <img src="./assets/icons/icon-info.svg" alt="info">
                            </div>
                        </div>
                    </div>
                    <!--OPCIONES DE EQUIPAJE -->
                    <div class="toggle__hidden">
                        <div class="ctm-flight__rst-baggage swiper swiper-baggage">
                            <div class="swiper-wrapper">
                                <div class="ctm-block swiper-slide">
                                    <h4>Tarifa base</h4>
                                    <h5>Equipaje</h5>
                                    <div class="flex">
                                        <img src="./assets/icons/icon-baggage-personal.svg" alt="equipaje">
                                        <p>
                                            Incluye equipaje personal<br>
                                            <span>El equipaje debe caber bajo la silla de en frente</span>
                                        </p>
                                    </div>
                                    <div class="flex disable">
                                        <img src="./assets/icons/icon-baggage-cabin.svg" alt="equipaje">
                                        <p>No incluye equipaje en cabina</p>
                                    </div>
                                    <div class="flex disable">
                                        <img src="./assets/icons/icon-baggage-store.svg" alt="equipaje">
                                        <p>No incluye equipaje en bodega</p>
                                    </div>
                                    <h5>Servicios</h5>
                                    <div class="flex">
                                        <div class="icon fine"></div>
                                        <p>No incluye equipaje en bodega</p>
                                    </div>
                                    <div class="flex">
                                        <div class="icon wrong"></div>
                                        <p>No incluye equipaje en bodega</p>
                                    </div>
                                    <div class="flex">
                                        <div class="icon wrong"></div>
                                        <p>No incluye equipaje en bodega</p>
                                    </div>
                                    <div class="pay">
                                        <p>Valor por pasajaero</p>
                                        <h4>$000.000.000</h4>
                                        <a href="#ancla" class="btn tab-general-btn data-flightBtnCome hidden-options"  data-flightBtnCome="0" data-country="COL - BOG" data-img="./assets/logos/avianca.png">Seleccionar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!-- PAGINADOR -->
                <div class="ctm-flight__show-more">
                    <button class="btn">Cargar más</button>
                </div>
            </div>
            <!-- DETALLE DE LOS VUELOS -->
            <div class="tab-general-ctn flight-selected__detail">
                <div class="flight-selected__item">
                    <div class="flight-selected__ctn" id="detail-flight">
                        <div class="flight-custom__ctn ctm-block">
                            <div class="item">
                                <figure>
                                    <img src="./assets/icons/icon-plane.svg" alt="">
                                </figure>
                                <p>Vuelo de ida</p>
                            </div>
                            <div class="item">
                                <p class="flight-departure"></p>
                                <a href="#ancla" class="tab-general-btn tab-change-option-detail">Cambiar</a>
                            </div>
                        </div>
                        <div class="flight-modal__detail">
                            <div class="container ctm-block">
                                <div class="block">
                                    <div>
                                        <img src="./assets/logos/avianca.png" alt=""> 
                                        <p>Avianca</p>
                                    </div>
                                    <div>
                                        <p>Vuelo # AV123</p>
                                        <p>Airbus A320</p>
                                        <p>Económica</p>
                                    </div>
                                </div>
                                <div class="time">
                                    <div class="time-line">
                                        <p class="time-dot">00:00</p>
                                        <div class="time-des">
                                            <p>Bogotá</p>
                                            <span>Aeropuerto</span>
                                            <span>Mié. 12 Oct. 2022</span>
                                        </div>
                                    </div>
                                    <p class="time-duration">Duración 2h 15m</p>
                                    <div class="time-line">
                                        <p class="time-dot">00:00</p>
                                        <div class="time-des">
                                            <p>Bogotá</p>
                                            <span>Aeropuerto</span>
                                            <span>Mié. 12 Oct. 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flight-selected__price ctm-block">
                            <div class="item">
                                <h5>Tarifa base</h5>
                                <div class="flex">
                                    <h4>$000.000</h4>
                                    <span>Valor por pasajero</span>
                                </div>
                            </div>
                            <div class="flex flex--center">
                                <p>Actualizar a la tarifa M + 000.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="flight-selected__ctn" id="detail-flightCome">
                        <div class="flight-custom__ctn ctm-block">
                            <div class="item">
                                <figure>
                                    <img src="./assets/icons/icon-plane-reverse.svg" alt="">
                                </figure>
                                <p>Vuelo de regreso</p>
                            </div>
                            <div class="item">
                                <p class="flight-comeback"></p>
                                <a href="#ancla" class="tab-general-btn tab-change-option-detail">Cambiar</a>
                            </div>
                        </div>
                        <div class="flight-modal__detail">
                            <div class="container ctm-block">
                                <div class="block">
                                    <div>
                                        <img src="./assets/logos/avianca.png" alt=""> 
                                        <p>Avianca</p>
                                    </div>
                                    <div>
                                        <p>Vuelo # AV123</p>
                                        <p>Airbus A320</p>
                                        <p>Económica</p>
                                    </div>
                                </div>
                                <div class="time">
                                    <div class="time-line">
                                        <p class="time-dot">00:00</p>
                                        <div class="time-des">
                                            <p>Bogotá</p>
                                            <span>Aeropuerto</span>
                                            <span>Mié. 12 Oct. 2022</span>
                                        </div>
                                    </div>
                                    <p class="time-duration">Duración 2h 15m</p>
                                    <div class="time-line">
                                        <p class="time-dot">00:00</p>
                                        <div class="time-des">
                                            <p>Bogotá</p>
                                            <span>Aeropuerto</span>
                                            <span>Mié. 12 Oct. 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flight-selected__price ctm-block">
                            <div class="item">
                                <h5>Tarifa base</h5>
                                <div class="flex">
                                    <h4>$000.000</h4>
                                    <span>Valor por pasajero</span>
                                </div>
                            </div>
                            <div class="flex flex--center">
                                <p>Actualizar a la tarifa M + 000.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flight-selected__item">
                    <div class="ctm-block flight-total">
                        <div class="item">
                            <h5>Pasajero <br> (2 adultos)</h5>
                            <h5>$000.000</h5>
                        </div>
                        <div class="item">
                            <p>Precio vuelo</p>
                            <p>$000.000</p>
                        </div>
                        <div class="item">
                            <p>Precio vuelo</p>
                            <p>$000.000</p>
                        </div>
                        <div class="item item--total">
                            <p>Total viaje</p>
                            <h4>$000.000</h4>
                        </div>
                        <a href="#" class="btn">Continuar</a>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>



<?php include './template-part/modal-vuelos.php' ?>

<?php include './template-part/footer.php' ?>