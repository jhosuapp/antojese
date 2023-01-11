<?php include './template-part/header.php' ?>
<?php include './template-part/menu-lateral.php' ?>

<!--FILTROS PARA CELULAR-->
<section class="filters-fixed ctm-block turiInternalReserve">
    <!-- <button class="btn btn--row" id="btn-filter">
        <img src="./assets/icons/icon-row-white.svg" alt="flecha">
    </button> -->
    <article class="contentTIR" id="open-filter">
        <div class="contentTIR__info">
            <div class="contentTIR__btnDescription">
                <p>Total</p>
                <div class="arrow"></div>
            </div>
            <p class="contentTIR__price">$0'000.000</p>
        </div>
    </article>
    <div class="turiInternalReserveBtn">
        <div class="turiInternalReserveShopping">
            <a href="#">
                <img src="./assets/icons/shopping.svg" alt="">
            </a>
        </div>
        <a href="/page-turisemana-reserva.php" class="btn">Comprar</a>
    </div>
</section>
<!-- MODAL CON INPUTS -->
<div class="input-custom input-modal turiInternalModal" id="modal">
    <div class="input-modal__block">
        <div class="defect-close">
            <img src="./assets/icons/icon-arrow-left.svg" alt="icon">
        </div>
        <div class="input-modal__dinamic" id="contentDinamic"></div>
        <div class="defect-close input-modal__flex">
            <a href="/page-turisemana-reserva.php" class="btn btn-s">Agregar</a>
            <a href="/page-turisemana-reserva.php" class="btn">Comprar</a>
        </div>
    </div>
</div>

<section class="ctn turisemanaBuy">
    <div class="turisemanaBuy__body">
        <form class="turisemanaBuy__form form">
            <fieldset>
                <legend>Información del Húesped Principal</legend>
                <div class="form__container input-custom">
                    <div class="input-custom__item">
                        <input id="name" type="text" name="name" value="">
                        <label for="name">Nombre (s)*</label>
                    </div>
                </div>
                <div class="form__container input-custom">
                    <div class="input-custom__item">
                        <input id="lastname" type="text" name="lastname" value="">
                        <label for="lastname">Apellido (s)*</label>
                    </div>
                </div>
                <div class="form__container input-custom form__container--divideBlock">
                    <p>Tipo y número de documeto</p>
                    <div class="input-custom__select input-custom__select--filter input-custom__no-write minBlock">
                        <input type="text" name="selectClase" value="" data-value="genero">
                        <div class="options">
                            <option data-value="economica">Mini</option>
                            <option data-value="premiumEconomy">Parcial</option>
                            <option data-value="ejecutivaBusiness">Completa</option>
                            <option data-value="primeraClase">No tiene</option>
                        </div>
                        <label for="">ID</label>
                    </div>
                    <div class="input-custom__item maxBlock">
                        <input id="dni" type="text" name="dni" value="">
                        <label for="dni">Número de identidad</label>
                    </div>
                </div>
                <div class="form__container input-custom">
                    <div class="input-custom__select input-custom__select--filter input-custom__no-write">
                        <input type="text" name="selectClase" value="" data-value="genero">
                        <div class="options">
                            <option data-value="economica">Mini</option>
                            <option data-value="premiumEconomy">Parcial</option>
                            <option data-value="ejecutivaBusiness">Completa</option>
                            <option data-value="primeraClase">No tiene</option>
                        </div>
                        <label for="">Genero*</label>
                    </div>
                </div>
                <div class="form__container input-custom form__container--divideBlock">
                    <p>Teléfono*</p>
                    <div class="input-custom__select input-custom__select--filter input-custom__no-write minBlock">
                        <input type="text" name="selectClase" value="" data-value="genero">
                        <div class="options">
                            <option data-value="economica">+58</option>
                            <option data-value="premiumEconomy">+59</option>
                            <option data-value="ejecutivaBusiness">+01</option>
                            <option data-value="primeraClase">+02</option>
                        </div>
                        <label for="">+57</label>
                    </div>
                    <div class="input-custom__item maxBlock">
                        <input id="dni" type="text" name="dni" value="">
                        <label for="dni">Número de teléfono</label>
                    </div>
                </div>
                <div class="form__container input-custom">
                    <div class="input-custom__item">
                        <input id="email" type="email" name="email" value="">
                        <label for="email">Email*</label>
                    </div>
                </div>
                <div class="form__container input-custom">
                    <div class="input-custom__item">
                        <input id="confirEmail" type="email" name="confirEmail" value="">
                        <label for="confirEmail">Confirmar Email*</label>
                    </div>
                </div>
                <div class="form__container input-custom">
                    <div class="input-custom__select input-custom__select--filter input-custom__no-write">
                        <input type="text" name="selectClase" value="" data-value="genero">
                        <div class="options">
                            <option data-value="1">1</option>
                            <option data-value="2">2</option>
                            <option data-value="3">3</option>
                            <option data-value="4">4</option>
                        </div>
                        <label for="">Edad*</label>
                    </div>
                </div>
                <div class="form__container input-custom">
                    <div class="input-custom__select input-custom__select--filter input-custom__no-write">
                        <input type="text" name="selectClase" value="" data-value="genero">
                        <div class="options">
                            <option data-value="1">1</option>
                            <option data-value="2">2</option>
                            <option data-value="3">3</option>
                            <option data-value="4">4</option>
                        </div>
                        <label for="">País de residenci*</label>
                    </div>
                </div>
                <div class="form__container input-custom">
                    <div class="input-custom__select input-custom__select--filter input-custom__no-write">
                        <input type="text" name="selectClase" value="" data-value="genero">
                        <div class="options">
                            <option data-value="1">1</option>
                            <option data-value="2">2</option>
                            <option data-value="3">3</option>
                            <option data-value="4">4</option>
                        </div>
                        <label for="">Ciudad*</label>
                    </div>
                </div>
            </fieldset>
        </form>
        <div class="turisemanaBuy__descriptionBuy"></div>
    </div>
</section>



<?php include './template-part/footer.php' ?>