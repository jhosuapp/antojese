<?php include './template-part/header.php' ?>
<?php include './template-part/menu-lateral.php' ?>

<!-- SEARCH -->
<section class="ctn ctm-filters">
  <div class="ctm-filters__container">
    <div class="ctm-block filter-car">
      <p><b>Miami Intl, Miami, United States(MIA)</b></p>
      <div>
        <p class="ctm-filters__des filter-des-car">
          <img src="./assets/icons/icon-calendar-white.svg" alt="calendario" />
          12 Oct. (12:00 pm) - 27 Oct. (12:00 pm) <span>26 días</span>
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
<section class="cars-search-general ctn">
  <!-- CTN IZQUIERDO -->
  <div class="cars-left">
    <div class="cars-left__cont">
      <h2>Filtros activos</h2>

      <!-- FILTROS -->
      <div class="cars-left__cont--filter">
        <!-- filtro -->
        <span class="filter chip">
          <p>Convertibles</p>
          <button>
            <img src="./assets/icons/close-filter.svg" alt="" />
          </button>
        </span>

        <!-- filtro -->
        <span class="filter chip">
          <p>Convertibles</p>
          <button>
            <img src="./assets/icons/close-filter.svg" alt="" />
          </button>
        </span>
      </div>

      <hr />

      <h3>Categoria</h3>

      <!-- CHECKS -->
      <div class="cars-left__cont--checks">
        <!--check-->
        <div
          class="cars-left__cont--checks--item input-custom input-custom__checkbox--blue"
        >
          <input class="" type="checkbox" name="" id="premium" />
          <img src="./assets-temporal/car/car1-filter.png" alt="" />
          <label for="premium">Premium</label>
        </div>

        <!--check-->
        <div
          class="cars-left__cont--checks--item input-custom input-custom__checkbox--blue"
        >
          <input class="" type="checkbox" name="" id="premium" />
          <img src="./assets-temporal/car/car1-filter.png" alt="" />
          <label for="premium">Premium</label>
        </div>
      </div>
    </div>
  </div>

  <!-- CTN DERECHO -->
  <div class="cars-right">
    <!-- CONVENCIONES -->
    <section class="convenciones">
      <div class="convenciones-cont ctm-block">
        <h5>Convenciones</h5>
        <div class="convenciones-cont__data">
          <!--chip-->
          <span class="chip">
            <img src="./assets/icons/Pasajero.svg" alt="" /> Pasajeros</span
          >
          <!--chip-->
          <span class="chip">
            <img src="./assets/icons/Puertas_auto.svg" alt="" /> Puertas</span
          >
          <!--chip-->
          <span class="chip">
            <img src="./assets/icons/Equipaje_auto.svg" alt="" /> Equipaje</span
          >
          <!--chip-->
          <span class="chip">
            <img src="./assets/icons/Caja_cambios.svg" alt="" /> Caja de
            cambios</span
          >
          <!--chip-->
          <span class="chip">
            <img src="./assets/icons/Aire_auto.svg" alt="" /> Aire
            Acondicionado</span
          >
        </div>
      </div>
    </section>

    <!--CATEGORY-->
    <div class="cars-filter">

      <!-- ACORDEON -->
      <div class="toggle">
        <div class="toggle__show toggle__show--car">
          <div class="cars-filter__left ctm-block toggle__show--title">
            <img src="./assets/icons/car.svg" alt="" />
            <h5>Eco Friendly</h5>
          </div>
        </div>
        <div class="toggle__hidden">
          <div class="cars-filter__data">
            <!--swiper-->
            <div class="swiper mySwiper swiperCar ctm-block">
              <div class="swiper-wrapper swiperCar-wrapper">
                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-ctn">
                    <div class="card-car-mobile">
                      <div class="card-car-mobile__img">
                        <img src="./assets-temporal/car/car-marc.png" alt="" />
                      </div>
                      <div class="card-car-mobile__name">
                        <h6>Toyota Corolla or similar</h6>
                      </div>
                      <hr />
                      <span>COP</span>
                      <h5>$00`000.000</h5>
                      <span class="price-txt">Precio Total</span>
                      <div class="card-car-mobile__select">
                        <h5>Seleccionar</h5>
                      </div>
                    </div>

                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-ctn">
                    <div class="card-car-mobile">
                      <div class="card-car-mobile__img">
                        <img src="./assets-temporal/car/car-marc.png" alt="" />
                      </div>
                      <div class="card-car-mobile__name">
                        <h6>Toyota Corolla or similar</h6>
                      </div>
                      <hr />
                      <span>COP</span>
                      <h5>$00`000.000</h5>
                      <span class="price-txt">Precio Total</span>
                      <div class="card-car-mobile__select">
                        <h5>Seleccionar</h5>
                      </div>
                    </div>

                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-ctn">
                    <div class="card-car-mobile">
                      <div class="card-car-mobile__img">
                        <img src="./assets-temporal/car/car-marc.png" alt="" />
                      </div>
                      <div class="card-car-mobile__name">
                        <h6>Toyota Corolla or similar</h6>
                      </div>
                      <hr />
                      <span>COP</span>
                      <h5>$00`000.000</h5>
                      <span class="price-txt">Precio Total</span>
                      <div class="card-car-mobile__select">
                        <h5>Seleccionar</h5>
                      </div>
                    </div>

                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-ctn">
                    <div class="card-car-mobile">
                      <div class="card-car-mobile__img">
                        <img src="./assets-temporal/car/car-marc.png" alt="" />
                      </div>
                      <div class="card-car-mobile__name">
                        <h6>Toyota Corolla or similar</h6>
                      </div>
                      <hr />
                      <span>COP</span>
                      <h5>$00`000.000</h5>
                      <span class="price-txt">Precio Total</span>
                      <div class="card-car-mobile__select">
                        <h5>Seleccionar</h5>
                      </div>
                    </div>

                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-ctn">
                    <div class="card-car-mobile">
                      <div class="card-car-mobile__img">
                        <img src="./assets-temporal/car/car-marc.png" alt="" />
                      </div>
                      <div class="card-car-mobile__name">
                        <h6>Toyota Corolla or similar</h6>
                      </div>
                      <hr />
                      <span>COP</span>
                      <h5>$00`000.000</h5>
                      <span class="price-txt">Precio Total</span>
                      <div class="card-car-mobile__select">
                        <h5>Seleccionar</h5>
                      </div>
                    </div>

                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-ctn">
                    <div class="card-car-mobile">
                      <div class="card-car-mobile__img">
                        <img src="./assets-temporal/car/car-marc.png" alt="" />
                      </div>
                      <div class="card-car-mobile__name">
                        <h6>Toyota Corolla or similar</h6>
                      </div>
                      <hr />
                      <span>COP</span>
                      <h5>$00`000.000</h5>
                      <span class="price-txt">Precio Total</span>
                      <div class="card-car-mobile__select">
                        <h5>Seleccionar</h5>
                      </div>
                    </div>

                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-car-mobile">
                    <div class="card-car-mobile__img">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                    </div>
                    <div class="card-car-mobile__name">
                      <h6>Toyota Corolla or similar</h6>
                    </div>
                    <hr />
                    <span>COP</span>
                    <h5>$00`000.000</h5>
                    <span class="price-txt">Precio Total</span>
                    <div class="card-car-mobile__select">
                      <h5>Seleccionar</h5>
                    </div>
                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-car-mobile">
                    <div class="card-car-mobile__img">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                    </div>
                    <div class="card-car-mobile__name">
                      <h6>Toyota Corolla or similar</h6>
                    </div>
                    <hr />
                    <span>COP</span>
                    <h5>$00`000.000</h5>
                    <span class="price-txt">Precio Total</span>
                    <div class="card-car-mobile__select">
                      <h5>Seleccionar</h5>
                    </div>
                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-car-mobile">
                    <div class="card-car-mobile__img">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                    </div>
                    <div class="card-car-mobile__name">
                      <h6>Toyota Corolla or similar</h6>
                    </div>
                    <hr />
                    <span>COP</span>
                    <h5>$00`000.000</h5>
                    <span class="price-txt">Precio Total</span>
                    <div class="card-car-mobile__select">
                      <h5>Seleccionar</h5>
                    </div>
                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-car-mobile">
                    <div class="card-car-mobile__img">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                    </div>
                    <div class="card-car-mobile__name">
                      <h6>Toyota Corolla or similar</h6>
                    </div>
                    <hr />
                    <span>COP</span>
                    <h5>$00`000.000</h5>
                    <span class="price-txt">Precio Total</span>
                    <div class="card-car-mobile__select">
                      <h5>Seleccionar</h5>
                    </div>
                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="next swiper-button-next btn-next-car">
                <img src="./assets/icons/next-slider.svg" alt="" />
              </div>
              <div class="prev swiper-button-prev btn-prev-car">
                <img src="./assets/icons/prev-slider.svg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ACORDEON -->
      <div class="toggle">
        <div class="toggle__show toggle__show--car">
          <div class="cars-filter__left ctm-block toggle__show--title">
            <img src="./assets/icons/car.svg" alt="" />
            <h5>Eco Friendly</h5>
          </div>
        </div>
        <div class="toggle__hidden">
          <div class="cars-filter__data">
            <!--swiper-->
            <div class="swiper mySwiper swiperCar ctm-block">
              <div class="swiper-wrapper swiperCar-wrapper">
                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-ctn">
                    <div class="card-car-mobile">
                      <div class="card-car-mobile__img">
                        <img src="./assets-temporal/car/car-marc.png" alt="" />
                      </div>
                      <div class="card-car-mobile__name">
                        <h6>Toyota Corolla or similar</h6>
                      </div>
                      <hr />
                      <span>COP</span>
                      <h5>$00`000.000</h5>
                      <span class="price-txt">Precio Total</span>
                      <div class="card-car-mobile__select">
                        <h5>Seleccionar</h5>
                      </div>
                    </div>

                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-ctn">
                    <div class="card-car-mobile">
                      <div class="card-car-mobile__img">
                        <img src="./assets-temporal/car/car-marc.png" alt="" />
                      </div>
                      <div class="card-car-mobile__name">
                        <h6>Toyota Corolla or similar</h6>
                      </div>
                      <hr />
                      <span>COP</span>
                      <h5>$00`000.000</h5>
                      <span class="price-txt">Precio Total</span>
                      <div class="card-car-mobile__select">
                        <h5>Seleccionar</h5>
                      </div>
                    </div>

                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-ctn">
                    <div class="card-car-mobile">
                      <div class="card-car-mobile__img">
                        <img src="./assets-temporal/car/car-marc.png" alt="" />
                      </div>
                      <div class="card-car-mobile__name">
                        <h6>Toyota Corolla or similar</h6>
                      </div>
                      <hr />
                      <span>COP</span>
                      <h5>$00`000.000</h5>
                      <span class="price-txt">Precio Total</span>
                      <div class="card-car-mobile__select">
                        <h5>Seleccionar</h5>
                      </div>
                    </div>

                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-ctn">
                    <div class="card-car-mobile">
                      <div class="card-car-mobile__img">
                        <img src="./assets-temporal/car/car-marc.png" alt="" />
                      </div>
                      <div class="card-car-mobile__name">
                        <h6>Toyota Corolla or similar</h6>
                      </div>
                      <hr />
                      <span>COP</span>
                      <h5>$00`000.000</h5>
                      <span class="price-txt">Precio Total</span>
                      <div class="card-car-mobile__select">
                        <h5>Seleccionar</h5>
                      </div>
                    </div>

                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-ctn">
                    <div class="card-car-mobile">
                      <div class="card-car-mobile__img">
                        <img src="./assets-temporal/car/car-marc.png" alt="" />
                      </div>
                      <div class="card-car-mobile__name">
                        <h6>Toyota Corolla or similar</h6>
                      </div>
                      <hr />
                      <span>COP</span>
                      <h5>$00`000.000</h5>
                      <span class="price-txt">Precio Total</span>
                      <div class="card-car-mobile__select">
                        <h5>Seleccionar</h5>
                      </div>
                    </div>

                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-ctn">
                    <div class="card-car-mobile">
                      <div class="card-car-mobile__img">
                        <img src="./assets-temporal/car/car-marc.png" alt="" />
                      </div>
                      <div class="card-car-mobile__name">
                        <h6>Toyota Corolla or similar</h6>
                      </div>
                      <hr />
                      <span>COP</span>
                      <h5>$00`000.000</h5>
                      <span class="price-txt">Precio Total</span>
                      <div class="card-car-mobile__select">
                        <h5>Seleccionar</h5>
                      </div>
                    </div>

                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="next swiper-button-next btn-next-car">
                <img src="./assets/icons/next-slider.svg" alt="" />
              </div>
              <div class="prev swiper-button-prev btn-prev-car">
                <img src="./assets/icons/prev-slider.svg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ACORDEON -->
      <div class="toggle">
        <div class="toggle__show toggle__show--car">
          <div class="cars-filter__left ctm-block toggle__show--title">
            <img src="./assets/icons/car.svg" alt="" />
            <h5>Eco Friendly</h5>
          </div>
        </div>
        <div class="toggle__hidden">
          <div class="cars-filter__data">
            <!--swiper-->
            <div class="swiper mySwiper swiperCar ctm-block">
              <div class="swiper-wrapper swiperCar-wrapper">
                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-ctn">
                    <div class="card-car-mobile">
                      <div class="card-car-mobile__img">
                        <img src="./assets-temporal/car/car-marc.png" alt="" />
                      </div>
                      <div class="card-car-mobile__name">
                        <h6>Toyota Corolla or similar</h6>
                      </div>
                      <hr />
                      <span>COP</span>
                      <h5>$00`000.000</h5>
                      <span class="price-txt">Precio Total</span>
                      <div class="card-car-mobile__select">
                        <h5>Seleccionar</h5>
                      </div>
                    </div>

                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-ctn">
                    <div class="card-car-mobile">
                      <div class="card-car-mobile__img">
                        <img src="./assets-temporal/car/car-marc.png" alt="" />
                      </div>
                      <div class="card-car-mobile__name">
                        <h6>Toyota Corolla or similar</h6>
                      </div>
                      <hr />
                      <span>COP</span>
                      <h5>$00`000.000</h5>
                      <span class="price-txt">Precio Total</span>
                      <div class="card-car-mobile__select">
                        <h5>Seleccionar</h5>
                      </div>
                    </div>

                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-ctn">
                    <div class="card-car-mobile">
                      <div class="card-car-mobile__img">
                        <img src="./assets-temporal/car/car-marc.png" alt="" />
                      </div>
                      <div class="card-car-mobile__name">
                        <h6>Toyota Corolla or similar</h6>
                      </div>
                      <hr />
                      <span>COP</span>
                      <h5>$00`000.000</h5>
                      <span class="price-txt">Precio Total</span>
                      <div class="card-car-mobile__select">
                        <h5>Seleccionar</h5>
                      </div>
                    </div>

                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-ctn">
                    <div class="card-car-mobile">
                      <div class="card-car-mobile__img">
                        <img src="./assets-temporal/car/car-marc.png" alt="" />
                      </div>
                      <div class="card-car-mobile__name">
                        <h6>Toyota Corolla or similar</h6>
                      </div>
                      <hr />
                      <span>COP</span>
                      <h5>$00`000.000</h5>
                      <span class="price-txt">Precio Total</span>
                      <div class="card-car-mobile__select">
                        <h5>Seleccionar</h5>
                      </div>
                    </div>

                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-ctn">
                    <div class="card-car-mobile">
                      <div class="card-car-mobile__img">
                        <img src="./assets-temporal/car/car-marc.png" alt="" />
                      </div>
                      <div class="card-car-mobile__name">
                        <h6>Toyota Corolla or similar</h6>
                      </div>
                      <hr />
                      <span>COP</span>
                      <h5>$00`000.000</h5>
                      <span class="price-txt">Precio Total</span>
                      <div class="card-car-mobile__select">
                        <h5>Seleccionar</h5>
                      </div>
                    </div>

                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <!--card mobile-->
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span class="chip">
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Puertas_auto.svg"
                          alt=""
                        />4</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Equipaje_auto.svg"
                          alt=""
                        />3</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Caja_cambios.svg"
                          alt=""
                        />Auto.</span
                      >
                      <span class="chip">
                        <img
                          src="./assets/icons/Aire_auto.svg"
                          alt=""
                        />Sí</span
                      >
                    </div>
                    <div class="card-car__data">
                      <h6>Precio Total</h6>
                      <h2>$00`000.000 <span>COP</span></h2>
                      <div class="card-car__data--actions">
                        <button>
                          <h5>Seleccionar</h5>
                        </button>
                        <button>
                          <h5>Comprar</h5>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="card-ctn">
                    <div class="card-car-mobile">
                      <div class="card-car-mobile__img">
                        <img src="./assets-temporal/car/car-marc.png" alt="" />
                      </div>
                      <div class="card-car-mobile__name">
                        <h6>Toyota Corolla or similar</h6>
                      </div>
                      <hr />
                      <span>COP</span>
                      <h5>$00`000.000</h5>
                      <span class="price-txt">Precio Total</span>
                      <div class="card-car-mobile__select">
                        <h5>Seleccionar</h5>
                      </div>
                    </div>

                    <div class="card-car-mobile__hover">
                      <div class="card-car-mobile__hover--img">
                        <img src="./assets-temporal/car/car-card.png" alt="" />
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img
                            src="./assets/icons/Pasajero.svg"
                            alt=""
                          />5</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Puertas_auto.svg"
                            alt=""
                          />4</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Equipaje_auto.svg"
                            alt=""
                          />3</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Caja_cambios.svg"
                            alt=""
                          />Auto.</span
                        >
                        <span>
                          <img
                            src="./assets/icons/Aire_auto.svg"
                            alt=""
                          />Sí</span
                        >
                      </div>
                      <div class="card-car-mobile__hover--actions">
                        <button class="btn">Selecionar</button>
                        <button class="btn-s">Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="next swiper-button-next btn-next-car">
                <img src="./assets/icons/next-slider.svg" alt="" />
              </div>
              <div class="prev swiper-button-prev btn-prev-car">
                <img src="./assets/icons/prev-slider.svg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<?php include './template-part/footer.php' ?>
