<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypnos Hotels Resorts Chambres et Suites</title>
    <!----------- Links Bootstrap - Fonts - CSS -------->
    <?php require('includes/links.php'); ?>

</head>

<body class="bg-light">
    <!---------------- Navbar ------------>
    <?php require('includes/header.php'); ?>
    <!---------------- Section Chambres ------------>
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Hypnos Hôtel Bahamas</h2>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow-sm">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTRES</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <!---------------- disponibilités ------------>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Disponibilités</h5>
                                <label class="form-label">Arrivée</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">Départ</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <!---------------- services ------------>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Services</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Cuisine équipée</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">spa</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Salle de sport</label>
                                </div>
                            </div>
                            <!---------------- Nombre ------------>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Nombre</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Adultes</label>
                                        <input type="number" id="f2" class="form-control shadow-none me-1">
                                    </div>
                                    <div>
                                        <label class="form-label">Enfants</label>
                                        <input type="number" id="f2" class="form-control shadow-none me-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!---------------- Cards 1 Chambres ------------>
            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/room-10.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Suite Aurore</h5>
                            <div class="features mb-3">
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
                            <div class="facilities">
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
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-4">250€/nuit</h6>
                            <a href="contact.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Réserver</a>
                            <a href="services.php" class="btn btn-sm w-100 btn-outline-dark">Découvrir</a>
                        </div>
                    </div>
                </div>
                <!---------------- Cards 2 Chambres ------------>
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/room-11.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Suite Soleil</h5>
                            <div class="features mb-3">
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
                            <div class="facilities">
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
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-4">250€/nuit</h6>
                            <a href="contact.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Réserver</a>
                            <a href="services.php" class="btn btn-sm w-100 btn-outline-dark">Découvrir</a>
                        </div>
                    </div>
                </div>
                <!---------------- Cards 3 Chambres ------------>
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/room-12.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Suite Ciel</h5>
                            <div class="features mb-3">
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
                            <div class="facilities">
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
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-4">250€/nuit</h6>
                            <a href="contact.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Réserver</a>
                            <a href="services.php" class="btn btn-sm w-100 btn-outline-dark">Découvrir</a>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- row end -->
    </div><!-- container end --->

    <!---------------- Footer ---------->
    <?php require('includes/footer.php'); ?>

</body>

</html>