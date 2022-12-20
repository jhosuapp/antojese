<?php include './template-part/header.php' ?>
<?php include './template-part/menu-lateral.php' ?>

<section class="vip-search ctm-block"></section>

<section class="vip-result ctm-block">
    <div class="ctn">
        <h5>2 salas encontradas</h5>
    </div>
</section>

<section class="vip-select">
    <div class="vip-select__cont"></div>
</section>

<section class="vip-salas ctm-block">
    <div class="vip-salas__cont ctn">
        <div class="vip-salas__cont--card">

            <!--slider-->
            <div class="swiper mySwiper vipSwiper">
                <div class="swiper-wrapper vipSwiper__wrapper">
                    <div class="swiper-slide vipSwiper__wrapper--slide">
                        <img src="./assets/vip/restaurant.png" alt="" />
                    </div>
                    <div class="swiper-slide vipSwiper__wrapper--slide">
                        <img src="./assets/vip/restaurant.png" alt="" />
                    </div>
                </div>
                <div class="swiper-button-next vipSwiper-next">
                    <img src="./assets/icons/next-arrow-blue.svg" alt="" />
                </div>
                <div class="swiper-button-prev vipSwiper-prev">
                    <img src="./assets/icons/prev-arrow-blue.svg" alt="" />
                </div>
            </div>

            <h5>The House</h5>
            <div class="vip-salas__cont--card_location">
                <img src="./assets/icons/location.svg" alt="" />
                <p>MELBOURNE - Melbourne International - Terminal 2</p>
            </div>
            <div class="vip-salas__cont--card_icons">
                <span>
                    <img src="./assets/icons/aircon.svg" alt="" />
                </span>
                <span>
                    <img src="./assets/icons/aircon.svg" alt="" />
                </span>
                <span>
                    <img src="./assets/icons/aircon.svg" alt="" />
                </span>
                <span>
                    <img src="./assets/icons/aircon.svg" alt="" />
                </span>
                <span>
                    <img src="./assets/icons/aircon.svg" alt="" />
                </span>
                <span>
                    <img src="./assets/icons/aircon.svg" alt="" />
                </span>
                <span>
                    <img src="./assets/icons/aircon.svg" alt="" />
                </span>
                <span>
                    <img src="./assets/icons/aircon.svg" alt="" />
                </span>
                <span>
                    <img src="./assets/icons/aircon.svg" alt="" />
                </span>
                <span>
                    <img src="./assets/icons/aircon.svg" alt="" />
                </span>
            </div>
            <div class="vip-salas__cont--card_acordeon"></div>
            <div class="vip-salas__cont--card_tarifas">
                <span>Tarifa</span>
                <div class="">
                    <div class="">
                        <h3>Adulto</h3>
                        <span>$000.000</span>
                    </div>
                </div>
                <button>Seleccionar</button>
            </div>
        </div>
    </div>
</section>

<?php include './template-part/footer.php' ?>