<!--FILTROS PARA CELULAR-->
<section class="filters-fixed ctm-block">
    <button class="btn btn--row" id="btn-filter">
        <img src="./assets/icons/icon-row-white.svg" alt="flecha">
    </button>
    <article id="open-filter">
        <img src="./assets/icons/filter.svg" alt="Filtros">
        <p>Filtros</p>
        <span>2</span>
    </article>
</section>
<!-- MODAL CON INPUTS -->
<div class="input-custom input-modal" id="modal">
    <div class="input-modal__block">
        <div class="defect-close">
            <img src="./assets/icons/icon-arrow-left.svg" alt="icon">
        </div>
        <div class="input-modal__dinamic" id="contentDinamic"></div>
        <div class="defect-close input-modal__flex">
            <a href="#ancla" class="btn">Aplicar</a>
        </div>
    </div>
</div>
<!-- MODAL CON DETALLE DEL VUELO -->
<div class="flight-modal__detail" id="modal-detail">
    <div class="background"></div>
    <div class="container ctm-block">
        <figure>
            <div id="close-modal-detail"></div>
            <h4>Detalles del vuelo</h4>
        </figure>
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
        <div class="separator">
            <p>Conexión en medellín con 01h: 32m de espera</p>
        </div>
        <div class="restrictions toggle-mobile">
            <div class="item toggle-mobile__show">
                <h5>Restricciones de tarifas</h5>
            </div>
            <div class="item toggle-mobile__hidden">
                <p>A continuación presentamos un resumen de las penalidades presentadas por las aerolíneas para este itinerario, si desea mayor información por favor comuníquese con uno de nuestros asesores.</p>
                <div class="item-line">
                    <p><b>Tipo de tarfifa: adulto</b></p>
                    <ol>
                        <li>Realizar CAMBIOS antes de la fecha de su viaje SI es permitido , tiene una penalidad de : 963.700 COP</li>
                        <li>Realizar CAMBIOS después de la fecha de su viaje SI es permitido , tiene una penalidad de : 963.700 COP</li>
                        <li>Solicitar REEMBOLSO antes de la fecha de su viaje NO es permitido</li>
                        <li>Solicitar REEMBOLSO después de la fecha de su viaje NO es permitido</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="restrictions toggle-mobile">
            <div class="item toggle-mobile__show">
                <h5>Equipaje</h5>
            </div>
            <div class="item toggle-mobile__hidden">
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
            </div>
        </div>
    </div>
</div>
<!-- MODAL CON INFO DE VUELOS PERSONALIZADOS -->
<div class="flight-modal__detail flight-modal__personality" id="modal-personality">
    <div class="background"></div>
    <div class="container ctm-block"> 
        <figure>
            <div id="close-modal-personality"></div>
            <h4>Viajes recomendados</h4>
        </figure>
        <div class="items">
            <img src="./assets/icons/icon-check-blue.svg" alt="items">
            <p>Agrupamos los mejores viajes de acuerdo a su precio final.</p>
        </div>
        <div class="items">
            <img src="./assets/icons/icon-check-blue.svg" alt="items">
            <p>Agrupamos los mejores viajes de acuerdo a su precio final.</p>
        </div>
        <div class="items">
            <img src="./assets/icons/icon-check-blue.svg" alt="items">
            <p>Agrupamos los mejores viajes de acuerdo a su precio final.</p>
        </div>
    </div>
</div>