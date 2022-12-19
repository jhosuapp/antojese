<?php include './template-part/header.php' ?>
<?php include './template-part/menu-lateral.php' ?>

<section class="cars-search ctm-block">

</section>

<section class="convenciones">
    <div class="convenciones-cont ctn ctm-block">
        <h5>Convenciones</h5>
        <div class="convenciones-cont__data">
            <span> <img src="./assets/icons/Pasajero.svg" alt=""> Pasajeros</span>
            <span> <img src="./assets/icons/Puertas_auto.svg" alt=""> Puertas</span>
            <span> <img src="./assets/icons/Equipaje_auto.svg" alt=""> Equipaje</span>
            <span> <img src="./assets/icons/Caja_cambios.svg" alt=""> Caja de cambios</span>
            <span> <img src="./assets/icons/Aire_auto.svg" alt=""> Aire Acondicionado</span>
        </div>
    </div>
</section>


<section class="cars-filter ctm-block">
    <div class="acordeon">
        <div class="panel ctn">
            <div class="cars-filter__left">
                <img src="./assets/icons/car.svg" alt="">
                <h5>Eco Friendly</h5>
            </div>
            <button>
                <img src="./assets/icons/arrowDown.svg" alt="">
            </button>
        </div>
        <div class="data hideData">
            <div class="cars-filter__data ctn">

                <!--//swiper-->
                <div class="swiper mySwiper swiperCar">
                    <div class="swiper-wrapper swiperCar-wrapper">
                        <!--slide1-->
                        <div class="swiper-slide swiperCar-wrapper__slide">
                            <div class="card-car">
                                <div class="card-car__img">
                                    <img src="./assets/car/car-card.png" alt="">
                                </div>
                                <div class="card-car__name">
                                    <img src="./assets/car/car-marc.png" alt="">
                                    <h5>Toyota Corolla or similar</h5>
                                </div>
                                <div class="card-car__items">
                                    <span> <img src="./assets/icons/Pasajero.svg" alt="">5</span>
                                    <span> <img src="./assets/icons/Puertas_auto.svg" alt="">4</span>
                                    <span> <img src="./assets/icons/Equipaje_auto.svg" alt="">3</span>
                                    <span> <img src="./assets/icons/Caja_cambios.svg" alt="">Auto.</span>
                                    <span> <img src="./assets/icons/Aire_auto.svg" alt="">Sí</span>
                                </div>
                                <div class="card-car__data">
                                    <h4>Precio Total</h4>
                                    <h2>$00`000.000 <span>COP</span></h2>
                                    <div class="card-car__data--actions">
                                        <button><h5>Seleccionar</h5></button>
                                        <button><h5>Comprar</h5></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--slide2-->
                        <div class="swiper-slide swiperCar-wrapper__slide">
                            <div class="card-car">
                                <div class="card-car__img">
                                    <img src="./assets/car/car-card.png" alt="">
                                </div>
                                <div class="card-car__name">
                                    <img src="./assets/car/car-marc.png" alt="">
                                    <h5>Toyota Corolla or similar</h5>
                                </div>
                                <div class="card-car__items">
                                    <span> <img src="./assets/icons/Pasajero.svg" alt="">5</span>
                                    <span> <img src="./assets/icons/Puertas_auto.svg" alt="">4</span>
                                    <span> <img src="./assets/icons/Equipaje_auto.svg" alt="">3</span>
                                    <span> <img src="./assets/icons/Caja_cambios.svg" alt="">Auto.</span>
                                    <span> <img src="./assets/icons/Aire_auto.svg" alt="">Sí</span>
                                </div>
                                <div class="card-car__data">
                                    <h4>Precio Total</h4>
                                    <h2>$00`000.000 <span>COP</span></h2>
                                    <div class="card-car__data--actions">
                                        <button><h5>Seleccionar</h5></button>
                                        <button><h5>Comprar</h5></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--slide3-->
                        <div class="swiper-slide swiperCar-wrapper__slide">
                            <div class="card-car">
                                <div class="card-car__img">
                                    <img src="./assets/car/car-card.png" alt="">
                                </div>
                                <div class="card-car__name">
                                    <img src="./assets/car/car-marc.png" alt="">
                                    <h5>Toyota Corolla or similar</h5>
                                </div>
                                <div class="card-car__items">
                                    <span> <img src="./assets/icons/Pasajero.svg" alt="">5</span>
                                    <span> <img src="./assets/icons/Puertas_auto.svg" alt="">4</span>
                                    <span> <img src="./assets/icons/Equipaje_auto.svg" alt="">3</span>
                                    <span> <img src="./assets/icons/Caja_cambios.svg" alt="">Auto.</span>
                                    <span> <img src="./assets/icons/Aire_auto.svg" alt="">Sí</span>
                                </div>
                                <div class="card-car__data">
                                    <h4>Precio Total</h4>
                                    <h2>$00`000.000 <span>COP</span></h2>
                                    <div class="card-car__data--actions">
                                        <button><h5>Seleccionar</h5></button>
                                        <button><h5>Comprar</h5></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="next swiper-button-next btn-next"></div>
                    <div class="prev swiper-button-prev btn-prev"></div>
                </div>

            </div>

        </div>
    </div>
</section>





<?php include './template-part/footer.php' ?>