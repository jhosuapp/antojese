
<!-- FILTROS VUELOS -->
<form class="filters-block input-custom" id="datosDinamicos">
    <!--OPCIONES RADIO BUTTONS -->
    <div class="input-custom__ctn" id="ctnRadio">
        <div class="input-custom__radio">
            <input type="radio" name="destino" id="idaVuelta" value="idaVuelta" checked>
            <label for="idaVuelta">Ida y vuelta</label>
        </div>
        <div class="input-custom__radio">
            <input type="radio" name="destino" id="soloIda" value="soloIda">
            <label for="soloIda">Solo ida</label>
        </div>
        <div class="input-custom__radio">
            <input type="radio" name="destino" id="multiDestino" value="multiDestino">
            <label for="multiDestino">Multidestino</label>
        </div>
    </div>
    <div class="input-custom__options">
        <!-- OPCIONES ORIGEN -->
        <div class="input-modalMobile" id="input-modalMobile-origen"></div>
        <div class="input-custom__block input-modal__container" data-input="origen">
            <div class="input-custom__item open-modal">
                <label for="origen">Origen</label>
                <input type="text" id="origen" name="origen" placeholder="Ciudad o aeropouerto">
                <img src="./assets/icons/position.svg" alt="icon">
            </div>
            <p class="error-message">Texto de ayuda</p>
            <!-- OPCIONES AUTOFILL ORIGEN -->
            <div class="input-custom__modal input-custom__modal--place">
                <p><i>Ciudad</i></p>
                <h5>Medellin, Antioquía, Colombia</h5>
                <p><i>Aeropuerto</i></p>
                <h5>Medellin, Antioquía, Colombia Medellin, Antioquía, Colombia</h5>
            </div>
        </div>
        <!-- OPCIONES DESTINO -->
        <div class="input-modalMobile" id="input-modalMobile-destino"></div>
        <div class="input-custom__block input-modal__container" data-input="destino">
            <div class="input-custom__item open-modal">
                <label for="destino">Destino</label>
                <input type="text" id="destino" name="destino" placeholder="Ciudad o aeropouerto">
                <img src="./assets/icons/position.svg" alt="icon">
            </div>
            <p class="error-message">Texto de ayuda</p>
            <!-- OPCIONES AUTOFILL DESTINO -->
            <div class="input-custom__modal input-custom__modal--place">
                <p><i>Ciudad</i></p>
                <h5>Medellin, Antioquía, Colombia</h5>
                <p><i>Aeropuerto</i></p>
                <h5>Medellin, Antioquía, Colombia Medellin, Antioquía, Colombia</h5>
            </div>
        </div>
        <!-- OPCIONES SALIDA -->
        <div class="input-custom__block input-custom__calendar" id="opcionesSalida">
            <div class="input-custom__item input-custom__no-write">
                <label for="salida">Salida</label>
                <input type="text" id="salida" name="salida" placeholder="Fecha de ida">
                <img src="./assets/icons/icon-calendar.svg" alt="icon">
            </div>
            <p class="error-message">Texto de ayuda</p>
        </div>
        <!-- OPCIONES REGRESO -->
        <div class="input-custom__block input-custom__calendar" id="opcionesRegreso">
            <div class="input-custom__item input-custom__no-write">
                <label for="regreso">Regreso</label>
                <input type="text" id="regreso" name="regreso" placeholder="Fecha de regreso">
                <img src="./assets/icons/icon-calendar.svg" alt="icon">
            </div>
            <p class="error-message">Texto de ayuda</p>
        </div>
        <!-- OPCIONES PASAJEROS -->
        <div class="input-modalMobile" id="input-modalMobile-pasajeros"></div>
        <div class="input-custom__block input-modal__container" data-input="pasajeros">
            <div class="input-custom__item input-custom__no-write open-modal">
                <label for="pasajeros">Pasajeros y clase</label>
                <input id="inputPasajeros" type="text" value="1 adulto, economica" name="pasajeros" placeholder="Fecha de regreso">
                <img src="./assets/icons/icon-user.svg" alt="icon">
            </div>
            <!-- MODAL PASAJEROS CON TODAS LAS OPCIONES -->
            <div class="input-custom__modal input-custom__modal--pasajeros">
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
                        <span class="minus" id="niñosMenos"></span>
                        <input name="niños" type="number" id="niños" value="0">
                        <span class="plus" id="niñosMas"></span>
                    </div>
                </div>
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
                    <input type="text" id="selectClase" name="selectClase" value="Economica" data-value="economica">
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
        <a href="./page-vuelo-filter.php" class="btn" id="buscar">Buscar</a>
    </div>
</form>

<!-- FILTROS HOTELES -->

<form class="filters-block input-custom">
    
</form>

<form class="filters-block input-custom">
    
</form>

<form class="filters-block input-custom">
    
</form>

<form class="filters-block input-custom">
    
</form>

<form class="filters-block input-custom">
    
</form>

<form class="filters-block input-custom">
    
</form>

<form class="filters-block input-custom">
    
</form>

<form class="filters-block input-custom">
    
</form>