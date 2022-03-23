<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypnos Hotels Resorts Page d'accueil</title>
    <!----------- Links Bootstrap - Fonts - CSS -------->
    <?php require('includes/links.php'); ?>
    <!----------- Header Swiper Carousel Images -------->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
</head>
<body class="bg-light">
    <!---------------- Navbar ------------>
    <?php require('includes/header.php'); ?>

    <!---------------- Swiper Carousel start------------>
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="images/carousel/1.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/3.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.png" class="w-100 d-block" />
                </div>
            </div>
        </div>
    </div>
    <!---------------- Swiper Carousel end-------------->
    <!---------------- Check availability Form---------->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow-sm p-4 rounded">
                <h5 class="mb-4">Rechercher une réservation</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Départ</label>
                            <input type="date" class="form-control" shadow-none>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Retour</label>
                            <input type="date" class="form-control" shadow-none>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Adultes</label>
                            <select class="form-select shadow-none">
                                <option selected>Sélectionnez</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                                <option value="3">5</option>
                                <option value="3">6</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500">Enfants</label>
                            <select class="form-select shadow-none">
                                <option selected>Sélectionnez</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                                <option value="3">5</option>
                                <option value="3">6</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!---------------- Section Suites---------->
    <h2 class="mt-5 pt-4 mb-5 text-center fw-bold h-font">Nos Suites</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <!--- Card 1 -->
                <div class="card border-0 shadow-sm" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/room-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Suite Lagon</h5>
                        <h6 class="mb-4">150€ par nuit</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Détails</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                lit double
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Salle d'eau
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Cuisine
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Terrasse
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Services</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Télévision
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room Service
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Spa
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Avis</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Réserver</a>
                        <a href="#" class="btn btn-sm btn-outline-dark">Découvrir</a>
                    </div>
                </div>
            </div>
            <!--- Card 2 -->
            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow-sm" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/room-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Suite Sunset</h5>
                        <h6 class="mb-4">250€ par nuit</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Détails</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 lits double
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Salle d'eau
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Cuisine
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Terrasse
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Services</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Télévision
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room Service
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Spa
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Avis</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Réserver</a>
                        <a href="#" class="btn btn-sm btn-outline-dark">Découvrir</a>
                    </div>
                </div>
            </div>
            <!--- Card 3 -->
            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow-sm" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/room-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Suite Jade</h5>
                        <h6 class="mb-4">300€ par nuit</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Détails</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 chambres
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Salle d'eau
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Cuisine
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Terrasse
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Services</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Télévision
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room Service
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Spa
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Avis</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Réserver</a>
                        <a href="#" class="btn btn-sm btn-outline-dark">Découvrir</a>
                    </div>
                </div>
            </div>
            <!--- Cards end -->

            <div class="col-lg-12 text-center mt-5">
                <a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Voir toutes les chambres</a>
            </div>
        </div>
    </div>
    <!---------------- Section Services---------->
    <h2 class="mt-5 pt-4 mb-5 text-center fw-bold h-font">Nos Services</h2>
    <div class="continer">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow-sm py-4 my-3">
                <img src="images/features/Icon awesome-wifi.svg" width="60px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow-sm py-4 my-3">
                <img src="images/features/Icon awesome-spa.svg" width="60px">
                <h5 class="mt-4">Spa</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow-sm py-4 my-3">
                <img src="images/features/Icon material-room-service.svg" width="40px">
                <h5 class="mt-3">Salle de sport</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow-sm py-4 my-3">
                <img src="images/features/Icon awesome-camera.svg" width="40px">
                <h5 class="mt-3">Visites Guidées</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="services.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Voir toutes les services</a>
            </div>
        </div>
    </div>
    <!---------------- Section Avis Clients---------->
    <h2 class="mt-5 pt-4 mb-5 text-center fw-bold h-font">Avis</h2>

    <!-- Swiper Avis client start -->
    <div class="container mt-5">
        <div class="swiper swiper-testimonial">
            <div class="swiper-wrapper mb-5">
                <!-- Avis user 1 -->
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center  mb-3">
                        <img src="images/features/person.svg" width="20px">
                        <h6 class="m-0 ms-2">Johanna Hills</h6>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel ipsam sint voluptate.
                        Suscipit non laborum placeat sint alias! Temporibus, fuga!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <!-- Avis user 2 -->
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/person.svg" width="20px">
                        <h6 class="m-0 ms-2">Zaria Helmut</h6>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel ipsam sint voluptate.
                        Suscipit non laborum placeat sint alias! Temporibus, fuga!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <!-- Avis user 3 -->
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center  mb-3">
                        <img src="images/features/person.svg" width="20px">
                        <h6 class="m-0 ms-2">Johnny Fall</h6>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel ipsam sint voluptate.
                        Suscipit non laborum placeat sint alias! Temporibus, fuga!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <!-- Avis user 4 -->
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/person.svg" width="20px">
                        <h6 class="m-0 ms-2">Amanda Rolins</h6>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel ipsam sint voluptate.
                        Suscipit non laborum placeat sint alias! Temporibus, fuga!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <!-- Avis user 5 -->
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/person.svg" width="20px">
                        <h6 class="m-0 ms-2">Pedro Alma</h6>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel ipsam sint voluptate.
                        Suscipit non laborum placeat sint alias! Temporibus, fuga!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- Swiper Avis client end -->

    <!---------------- Section Nous contacter---------->
    <h2 class="mt-5 pt-4 mb-5 text-center fw-bold h-font">Nous Contacter</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="<?php echo $contact_r['iframe'] ?>" loading="lazy">
                </iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Nous contacter</h5>
                    <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> <?php echo $contact_r['pn1'] ?>
                    </a>
                    <br>
                    <?php
                    if ($contact_r['pn2'] != '') {
                        echo <<<data
                            <a href="tel: +$contact_r[pn2]" class="d-inline-block mb-2 text-decoration-none text-dark">
                                 <i class="bi bi-telephone-fill"></i> +$contact_r[pn2]
                            </a>
                        data;
                    }
                    ?>
                    <br>
                    <a href="mailto: hypnos-hotels@resorts.com" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> <?php echo $contact_r['email'] ?>
                    </a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Nos Réseaux Sociaux</h5>
                    <a href="<?php echo $contact_r['tw'] ?>" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter me-1"></i> Twitter
                        </span>
                    </a>
                    <br>
                    <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook"></i> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram"></i> Instagam
                        </span>
                    </a>

                </div>
            </div>

        </div>
    </div>
    <!---------------- Footer ---------->
    <?php require('includes/footer.php'); ?>

    <!-- Header swiper Carousel Images -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        /* Swiper carousel*/
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
        });
        /* Swiper avis clients */
        var swiper = new Swiper(".swiper-testimonial", {
            slidesPerView: 3,
            spaceBetween: 30,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            keyboard: {
                enabled: true,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>