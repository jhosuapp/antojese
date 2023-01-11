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
                <p>Precio</p>
                <div class="arrow"></div>
            </div>
            <p class="contentTIR__price">$0'000.000</p>
        </div>
    </article>
    <div class="contentTIR__btn">
        <a href="/page-turisemana-reserva.php" class="btn">Reserar</a>
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
            <a href="/page-turisemana-reserva.php" class="btn">Reservar</a>
        </div>
    </div>
</div>

<!-- CTN PRINCIPAL -->
<section class="ctn turiInternal">
    <div class="turiInternal__body">
        <div class="turiInternalInfo">
            <article class="turiInternalContent">
                <!-- CONTENEDORES LUGARES -->
                <div class="turiInternalContent__body">
                    <div class="turiInternalContent__house">
                        <div class="description">
                            <div class="description__info">
                                <h2 class="infoTitle">Havasu Dunes Resort</h2>
                                <div class="valoration">
                                    <img src="./assets/icons/thumbs-up.svg" alt="buscar" />
                                    <img src="./assets/icons/thumbs-up.svg" alt="buscar" />
                                    <img src="./assets/icons/thumbs-up.svg" alt="buscar" />
                                    <img src="./assets/icons/thumbs-up.svg" alt="buscar" />
                                </div>
                                <p class="infoIdentification">
                                    Número de identificación del complejo: <span>2478</span>
                                </p>
                                <div class="infoUbication">
                                    <div class="infoUbication__location">
                                        <div class="image"></div>
                                        <p>USA - Lake Havasu City - AZ</p>
                                    </div>
                                    <div class="infoUbication__number">
                                        <div class="image"></div>
                                        <p>928/855-6626</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="ctm-block turiInternalFilters">
                <!-- VISTA GENERAL -->
                <div class="toggleTurisemana ctm-flight__filters turiInternalFilters__view active">
                    <div class="toggleTurisemana__show active">
                        <h5>Vista general</h5>
                    </div>
                    <div class="toggleTurisemana__hidden input-custom">
                        <div class="turiInternalFV">
                            <p class="turiInternalFV__parag">
                                Havasu Dunes tiene muchos servicios para ayudarlo a disfrutar de su estancia.
                            </p>
                            <div class="turiInternalFV__swiper galleryIsland">
                                <!-- <div class="swiper swiperTurisemana">
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
                                </div> -->
                                <div class="galleryIsland__body">
                                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper galleryIsland-top">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="./assets-temporal/turisemana/g1.png" alt="" title="" loading="lazy">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets-temporal/turisemana/g2.png" alt="" title="" loading="lazy">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets-temporal/turisemana/g3.png" alt="" title="" loading="lazy">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets-temporal/turisemana/g4.png" alt="" title="" loading="lazy">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets-temporal/turisemana/g5.png" alt="" title="" loading="lazy">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets-temporal/turisemana/g6.png" alt="" title="" loading="lazy">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets-temporal/turisemana/turisemana.png" alt="" title="" loading="lazy">
                                            </div>
                                            <!-- <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div> -->
                                        </div>
                                    </div>
                                    <div thumbsSlider="" class="swiper galleryIsland-thumbs">
                                        <div class="btnGallery_prev"></div>
                                        <div class="handscroll handscroll-left hide" class="bannerIsland__btns">
                                            <div class="handscroll-mouse"></div>
                                            <div class="handscroll-down"></div>
                                        </div>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="./assets-temporal/turisemana/g1.png" alt="" title="" loading="lazy">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets-temporal/turisemana/g2.png" alt="" title="" loading="lazy">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets-temporal/turisemana/g3.png" alt="" title="" loading="lazy">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets-temporal/turisemana/g4.png" alt="" title="" loading="lazy">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets-temporal/turisemana/g5.png" alt="" title="" loading="lazy">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets-temporal/turisemana/g6.png" alt="" title="" loading="lazy">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets-temporal/turisemana/turisemana.png" alt="" title="" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="btnGallery_next"></div>
                                        <div class="handscroll handscroll-bottom" class="bannerIsland__btns">
                                            <div class="handscroll-mouse"></div>
                                            <div class="handscroll-down"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CARACTRÍSTICAS DE COMPLEJO -->
                <div class="toggleTurisemana ctm-flight__filters turiInternalFilters__features">
                    <div class="toggleTurisemana__show">
                        <h5>Características del complejo</h5>
                    </div>
                    <div class="toggleTurisemana__hidden input-custom">
                        <!-- MIGA DE PAN -->
                        <div class="ctm-flight__rst-breadcrumb">
                            <ul class="tab-general">
                                <li class="tab-general-btn active">Amenidades</li>
                                <li class="tab-general-btn">Actividades</li>
                                <li class="tab-general-btn">Restaurantes</li>
                                <li class="tab-general-btn">Accesibilidad</li>
                            </ul>
                        </div>
                        <!--TAB GENERAL-->
                        <div class="tab-general breadcrumbContent">
                            <div class="tab-general-ctn active">
                                <p>Amenidades del complejo</p>
                                <ul>
                                    <li>Fitness Center (Fuera del sitio)</li>
                                    <li>Business center (Si)</li>
                                    <li>Laundry facilities (En el sitio)</li>
                                    <li>Jacuzzi/Hot tub (En el sitio)</li>
                                    <li>Car Rental (Fuera del sitio)</li>
                                    <li>Movie Rental (En el sitio)</li>
                                    <li>Salon (Fuera del sitio)</li>
                                    <li>Swimming pool (En el sitio)</li>
                                    <li>Sauna (Si)</li>
                                    <li>Medical facility (Fuera del sitio)</li>
                                </ul>
                            </div>
                            <div class="tab-general-ctn">
                                <p>segundo btn</p>
                            </div>
                            <div class="tab-general-ctn">
                                <p>tercer btn</p>
                            </div>
                            <div class="tab-general-ctn">
                                <p>cuarto btn</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- INFORMACIÓN DE LA HABITACIÓN -->
                <div class="toggleTurisemana ctm-flight__filters turiInternalFilters__information">
                    <div class="toggleTurisemana__show">
                        <h5>Informción de la habitación</h5>
                    </div>
                    <div class="toggleTurisemana__hidden input-custom">
                        <div class="turiInternalFI">
                            <p class="turiInternalFV__parag">
                                Todas las unidades están alfombradas, con aire acondicionado y cocinas con microondas. Las unidades Estudio tienen 1 estufa de 2 hornilla con un mini refrigerador (no congelador). Las unidades 1HAB y 2HAB tienen cocinas completas con lavavajillas. Las unidades están abastecidas con lo necesario para su aseo, como secadores de pelo y tablas de planchar, cocina pequeña o completa, incluyendo lo básico como cafeteras, tostadoras y abrelatas. Todas la unidades ofrecen Wi-Fi gratuito.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- TRANSPORTE -->
                <div class="toggleTurisemana ctm-flight__filters turiInternalFilters__transportation">
                    <div class="toggleTurisemana__show">
                        <h5>Transporte</h5>
                    </div>
                    <div class="toggleTurisemana__hidden input-custom">
                        <!-- MIGA DE PAN -->
                        <div class="ctm-flight__rst-breadcrumb">
                            <ul class="tab-general">
                                <li class="tab-general-btn active">Info. Aeropuerto</li>
                                <li class="tab-general-btn">Ubicación</li>
                                <li class="tab-general-btn">Estacionamiento</li>
                            </ul>
                        </div>
                        <!--TAB GENERAL-->
                        <div class="tab-general breadcrumbContent">
                            <div class="tab-general-ctn active">
                                <h3>Información del aeropuerto</h3>
                                <p>
                                    Mc Carran Intl - LAS (248 Kilometros)
                                    El aeropuerto más cercano se encuentra a 154 millas de distancia, en Las Vegas, Nevada. Desde el aeropuerto, tomar Boulder (EE.UU. 93-95) a California Hwy 95 sur. Tome I40 al este. Continuar Needles últimos 25 kilómetros. Gire en la salida 9 hacia Ariz 95 sur y siga las indicaciones anteriores.
                                </p>
                            </div>
                            <div class="tab-general-ctn">
                                <p>
                                    segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn segundo btn 
                                </p>
                            </div>
                            <div class="tab-general-ctn">
                                <p>tercer btn</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MAPA -->
                <div class="toggleTurisemana ctm-flight__filters">
                    <div class="toggleTurisemana__show">
                        <h5>Mapa</h5>
                    </div>
                    <div class="toggleTurisemana__hidden input-custom">
                        <div class="input-custom__select input-custom__no-write" id="selectToggle">
                            <input type="text" name="selectClase" value="Selecione una opción" data-value="economica">
                            <div class="options">
                                <option data-value="economica">Contabilidad</option>
                                <option data-value="premiumEconomy">Aeropuerto</option>
                                <option data-value="ejecutivaBusiness">Parque de atracciones</option>
                                <option data-value="primeraClase">Acuario</option>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="descriptionAvailbility" id="content-modal">
                <div class="descriptionAvailbility__info">
                    <div class="contentDAI">
                        <h2>Semaana seleccionada</h2>
                        <p>Disponibilidad para: Junio-2023</p>
                        <div class="calenderDAI">
                            <div class="calenderDAI__img"></div>
                            <p>2 Jun. 2023 - 9 Jun. 2023</p>
                        </div>
                    </div>
                    <div class="availability">
                        <div class="availability__containerTitles">
                            <div class="availabilityTitles">
                                <h3>Tipo</h3>
                            </div>
                            <div class="availabilityTitles">
                                <h3>Disponibilidad</h3>
                            </div>
                            <div class="availabilityTitles">
                                <h3>Cocina</h3>
                            </div>
                        </div>
                        <div class="availability__typeContent">
                            <div class="typeUnit">
                                <div class="typeUnit__info typeOption input-custom">
                                    <div class="typeUnit__description">
                                        <h3>Estudio</h3>
                                    </div>
                                </div>
                                <div class="typeUnit__info availabilityOption">
                                    <p>
                                        4 personas
                                    </p>
                                </div>
                                <div class="typeUnit__info priceOption">
                                    <p>
                                        Mini
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="alertDAI">
                        Estimado Cliente agradecemos antes de confirmar, revise las fechas, detalles y condiciones del complejo. Turisemana una vez emitida no es reembolsable, no permite ningún tipo de cambio de nombre o fechas, ni cancelación. Si no le es posible viajar o no usada tal como fue emitida automáticamente se pierde.
                    </p>
                </div>
                <div class="descriptionAvailbility__price">
                    <div class="contentDAP">
                        <p class="contentDAP__text">Precio <span>(Impuestos incluidos)</span></p>
                        <p class="contentDAP__price">$0'000.000</p>
                    </div>
                    <div   div class="btnHouse">
                        <a class="btn" href="/page-turisemana-reserva.php">Seleccionar</a>
                    </div>
                </div>
            </article>
        </div>
        <div class="turiInternalDescription">
            <article>
                <h3>Registro</h3>
                <p>
                    Registro: 16:00
                    Salida: 11:00
                    Ubicación para el registro: Front Desk
                </p>
                <h3>Noticias actuales del complejo</h3>
                <p>
                    Información importante:
                    Solamente debe comunicarse con el complejo 2 semanas antes de la fecha de check-in.
                    Este resort se compromete a cumplir con “Timeshare Safe Welcome”, la guía recomendada por la ARDA para promover la salud y la seguridad en el sector del tiempo compartido. Para mayores detalles visite www.ARDA.org
                    Se requiere confirmación al realizar el check-in en el complejo.
                    Se deben respetar los límites de ocupación sin excepción. El no hacerlo podría resultar en la confiscación del departamento u otras penalizaciones.
                    Solo hay estacionamiento disponible fuera del sitio para botes, remolques y RV.
                    Se requiere impresión de tarjeta de crédito a su llegada al complejo.
                    No se permite fumar en los apartamentos.
                    Se solicita depósito de seguridad a su llegada al complejo.
                    Previo al inicio del viaje, RCI te recomienda contactar al Desarrollo donde se confirmó el hospedaje, así como consultar los sitios web del destino, de las autoridades estatales y federales, para obtener avisos actualizados que pudieran modificar tu experiencia vacacional.
                    Se abonarán cuotas o depósitos por el uso de algunas instalaciones.
                    Los servicios e instalaciones del complejo y las atracciones turísticas son de temporada.
                    El complejo no puede otorgarle mejoras para los apartamentos o mudarlos de apartamento.
                    Los huéspedes con dificultad para usar las escaleras deben contactar con la propiedad y "solicitar" una unidad de planta baja.
                    Al hacer los preparativos para su viaje verifique qué requisitos hay en cuanto a exámenes, restricciones de viaje o leyes locales de COVID-19, hacia y desde su destino. Los recursos en línea disponibles incluyen, pero no están limitados al gobierno, aerolínea y la página del resort anfitrión.
                    Otra información:
                    Prohibido el ingreso de mascotas. Su ingreso podría resultar en la cancelación de la reservación u otras penalizaciones.
                    Restricciones al fumar: Prohibido fumar en los apartamentos. El hacerlo podría resultar en la confiscación del apartamento u
                    La edad mínima permitida para el registro de ingre
                </p>
            </article>
        </div>
    </div>
</section>
<?php include './template-part/footer.php' ?>