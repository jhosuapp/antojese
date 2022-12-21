<?php include './template-part/header.php' ?>
<?php include './template-part/menu-lateral.php' ?>

<section class="cars-search ctm-block"></section>

<section class="cars-search-general ctn">
  <div class="cars-left">
    <div class="cars-left__cont">
      <h2>Filtros activos</h2>
      <div class="cars-left__cont--filter">
        <span class="filter">
          <p>Convertibles</p>
          <button>
            <img src="./assets/icons/close-filter.svg" alt="" />
          </button>
        </span>

        <span class="filter">
          <p>Convertibles</p>
          <button>
            <img src="./assets/icons/close-filter.svg" alt="" />
          </button>
        </span>
      </div>

      <hr />

      <h3>Categoria</h3>

      <div class="cars-left__cont--checks">
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

  <div class="cars-right">
    <section class="convenciones">
      <div class="convenciones-cont ctn ctm-block">
        <h5>Convenciones</h5>
        <div class="convenciones-cont__data">
          <span>
            <img src="./assets/icons/Pasajero.svg" alt="" /> Pasajeros</span
          >
          <span>
            <img src="./assets/icons/Puertas_auto.svg" alt="" /> Puertas</span
          >
          <span>
            <img src="./assets/icons/Equipaje_auto.svg" alt="" /> Equipaje</span
          >
          <span>
            <img src="./assets/icons/Caja_cambios.svg" alt="" /> Caja de
            cambios</span
          >
          <span>
            <img src="./assets/icons/Aire_auto.svg" alt="" /> Aire
            Acondicionado</span
          >
        </div>
      </div>
    </section>

    <section class="cars-filter ctm-block">
      <div class="acordeon">
        <div class="panel ctn">
          <div class="cars-filter__left">
            <img src="./assets/icons/car.svg" alt="" />
            <h5>Eco Friendly</h5>
          </div>
          <button>
            <img src="./assets/icons/arrowDown.svg" alt="" />
          </button>
        </div>
        <div class="data">
          <div class="cars-filter__data">
            <!--//swiper-->
            <div class="swiper mySwiper swiperCar">
              <div class="swiper-wrapper swiperCar-wrapper">
                
                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span>
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
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
                    <div class="card-car__data">
                      <h4>Precio Total</h4>
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
                      <h4>Toyota Corolla or similar</h4>
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
                        <img src="./assets-temporal/car/car-card.png" alt="">
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img src="./assets/icons/Pasajero.svg" alt="" />5</span
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
    </section>

    <section class="cars-filter ctm-block">
      <div class="acordeon">
        <div class="panel ctn">
          <div class="cars-filter__left">
            <img src="./assets/icons/car.svg" alt="" />
            <h5>Eco Friendly</h5>
          </div>
          <button>
            <img src="./assets/icons/arrowDown.svg" alt="" />
          </button>
        </div>
        <div class="data">
          <div class="cars-filter__data">
            <!--//swiper-->
            <div class="swiper mySwiper swiperCar">
              <div class="swiper-wrapper swiperCar-wrapper">
                
                <!--slide1-->
                <div class="swiper-slide swiperCar-wrapper__slide">
                  <div class="card-car">
                    <div class="card-car__img">
                      <img src="./assets-temporal/car/car-card.png" alt="" />
                    </div>
                    <div class="card-car__name">
                      <img src="./assets-temporal/car/car-marc.png" alt="" />
                      <h5>Toyota Corolla or similar</h5>
                    </div>
                    <div class="card-car__items">
                      <span>
                        <img src="./assets/icons/Pasajero.svg" alt="" />5</span
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
                    <div class="card-car__data">
                      <h4>Precio Total</h4>
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
                      <h4>Toyota Corolla or similar</h4>
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
                        <img src="./assets-temporal/car/car-card.png" alt="">
                      </div>
                      <div class="card-car-mobile__hover--icons">
                        <span>
                          <img src="./assets/icons/Pasajero.svg" alt="" />5</span
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
    </section>
  </div>
</section>
<?php include './template-part/footer.php' ?>
