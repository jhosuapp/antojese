<?php include './template-part/header.php' ?>

<?php include './template-part/menu-lateral.php'?>

<section class="ctn ctm-filters">
    <div class="ctm-filters__container">
        <div class="ctm-block">
            <p><b>Bogotá(BOG) - Cali(CLO)</b></p>
            <div>
                <p class="ctm-filters__des">
                    <img src="./assets/icons/icon-calendar-white.svg" alt="calendario">
                    12 oct - 27 oct
                </p>
                <p class="ctm-filters__des">
                    <img src="./assets/icons/icon-user-white.svg" alt="usuario">
                    1 persona
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
<section class="ctn ctm-flight">
    <article class="ctm-block filters-modal-mobile">
        <div class="ctm-flight__filters">
            <h4>Filtros activos</h4>
            <div class="block">
                <span class="filter chip">
                    <p>Convertibles</p>
                    <button>
                        <img src="./assets/icons/close-filter.svg" alt="">
                    </button>
                </span>
                <span class="filter chip">
                    <p>Convertibles</p>
                    <button>
                        <img src="./assets/icons/close-filter.svg" alt="">
                    </button>
                </span>
            </div>
        </div>
        <!-- PRECIO -->
        <div class="toggle ctm-flight__filters">
            <div class="toggle__show">
                <h5>Precio</h5>
            </div>
            <div class="toggle__hidden input-custom">
                <div class="input-custom__checkbox--blue input-custom__checkbox--img">
                    <input type="checkbox" name="avianca" id="avianca">
                    <label for="avianca">
                        <img src="./assets/logos/avianca.png" alt="">
                        <div>
                            <b>Avianca</b>
                            <span>desde $000.000</span>
                        </div>
                    </label>
                </div>
                <div class="input-custom__checkbox--blue input-custom__checkbox--img">
                    <input type="checkbox" name="test" id="test">
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
                <div class="input-custom__checkbox--blue input-custom__checkbox--img">
                    <input type="checkbox" name=directo" id=directo">
                    <label for=directo">
                        <div>
                            <b>Directo</b>
                            <span>desde $000.000</span>
                        </div>
                    </label>
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
                <div class="input-custom__checkbox--blue input-custom__checkbox--img">
                    <input type="checkbox" name="equpipajeMano" id="equpipajeMano">
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
        <div class="ctm-flight__rst-tab">
            <button class="active">
                Personaliza tu viaje
                <img src="./assets/icons/icon-info.svg" alt="info">
            </button>
            <button>
                Vuelos recomendados
                <img src="./assets/icons/icon-info.svg" alt="info">
            </button>
        </div>
        <!-- MIGA DE PAN -->
        <div class="ctm-flight__rst-breadcrumb">
            <ul>
                <li class="active">Vuelo de ida</li>
                <li>Vuelo de regreso</li>
                <li>Detalles</li>
            </ul>
        </div>
        <!-- FILTROS -->
        <div class="ctm-flight__rst-plane">
            <div class="block">
                <figure>
                    <img src="./assets/icons/icon-plane.svg" alt="">
                </figure>
                <div class="ctm-block">
                    <h4>Elige tu vuelo de ida</h4>
                    <p>12 Oct</p>
                </div>
            </div>
            <div class="input-custom">
                <div class="input-custom__select input-custom__select--filter input-custom__no-write">
                    <input type="text" name="selectClase" value="Precio" data-value="precio">
                    <div class="options">
                        <option data-value="precio">Precio</option>
                        <option data-value="otra">otra</option>
                    </div>
                    <label>Orden</label>
                </div>
            </div>
        </div>
        <!-- INFO AL USUARIO -->
        <div class="ctm-flight__rst-info ctm-block">
            <img src="./assets/icons/icon-info.svg" alt="info">
            <p>El precio incluye los impuestos y comisiones correspondientes al total de pasajeros</p>
        </div>
        <!-- VUELOS -->
        <!--OPCIONES DE EQUIPAJE -->
        <div class="toggle ctm-flight__rst-agency recommended">
            <div class="toggle__show ctm-block">
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
                <div class="price">
                    <div>
                        <img src="./assets/icons/icon-baggage-store.svg" alt="equipaje">
                        <img src="./assets/icons/icon-baggage-cabin.svg" alt="equipaje">
                        <img src="./assets/icons/icon-baggage-personal.svg" alt="equipaje">
                    </div>
                    <p>$0.000.000</p>
                    <div class="info">
                        <img src="./assets/icons/icon-info.svg" alt="">
                    </div>
                </div>
            </div>
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
                                <button class="btn">Seleccionar</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <div class="ctm-flight__show-more">
            <button class="btn">Cargar más</button>
        </div>
    </article>
</section>

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