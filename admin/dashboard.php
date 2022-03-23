<?php
require('includes/essentials.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page administrateur Hypnose Hotels</title>
    <!----------- Links Bootstrap - Fonts - CSS -------->
    <?php require('includes/links.php'); ?>


</head>

<body class="bg-light">
    <!----------- Admin Sidebar -------->
    <?php require('includes/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Tableau de Bord</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>
        </div>

        <!----------- Gérants -------->
        <div class="container">
            <div class="row">
                <h2>Gérants</h2>
                <div class="col-lg-4 col-md-6 my-3">
                    <!--- Card 1 -->
                    <div class="card border-0 shadow-sm" style="max-width: 350px; margin: auto;">
                        <img src="../images/about/hotel-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Hypnos Hôtel Antilles</h5>
                            <div class="features mb-4">
                                <p>Gérante Jane Loris</p>
                                <a href="#" target="_blank">
                                    <i class="bi bi-envelope"></i> jane-loris@hypnos.com</a>
                            </div>
                            <a href="contact.php" class="btn btn-sm text-white custom-bg shadow-none">Contact</a>
                        </div>
                    </div>
                </div>
                <!--- Card 2 -->
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow-sm" style="max-width: 350px; margin: auto;">
                        <img src="../images/about/hotel-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Hypnos Hôtel Martinique</h5>
                            <div class="features mb-4">
                                <p>Gérant Liu Tong</p>
                                <a href="#" target="_blank">
                                    <i class="bi bi-envelope"></i> liu-tong@hypnos.com</a>
                            </div>
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Contact</a>
                        </div>
                    </div>
                </div>
                <!--- Card 3 -->
                <div class="col-lg-4 col-md-6 my-3">

                    <div class="card border-0 shadow-sm" style="max-width: 350px; margin: auto;">
                        <img src="../images/about/hotel-3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Hypnose Hôtel Saint Martin</h5>
                            <div class="features mb-4">
                                <p>Gérant Eric Martin</p>
                                <a href="#" target="_blank">
                                    <i class="bi bi-envelope"></i> eric-martin@hypnos.com</a>
                            </div>
                            <a href="contact.php" class="btn btn-sm text-white custom-bg shadow-none">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!---------------- Section Hôtels Part2---------->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3 ">
                <!--- Card 1 -->
                <div class="card border-0 shadow-sm" style="max-width: 350px; margin: auto;">
                    <img src="../images/about/hotel-4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Hypnos Hôtel Bahamas</h5>
                        <div class="features mb-4">
                            <p>Gérant Albert dupond</p>
                            <a href="#" target="_blank">
                                <i class="bi bi-envelope"></i> albert-dupond@hypnos.com
                            </a>
                        </div>
                        <div class="rating mb-4">
                        </div class="d-flex justify-content-evenly mb-2">
                        <a href="contact.php" class="btn btn-sm text-white custom-bg shadow-none">Contact</a>
                    </div>
                </div>
            </div>
            <!--- Card 2 -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow-sm" style="max-width: 350px; margin: auto;">
                    <img src="../images/about/hotel-5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Hypnos Hôtel Maldives</h5>
                        <div class="features mb-4">
                            <p>Gérante Elisa Favre</p>
                            <a href="#" target="_blank">
                                <i class="bi bi-envelope"></i> elisa-favre@hypnos.com
                            </a>
                        </div>
                        <div class="rating mb-4">
                        </div class="d-flex justify-content-evenly mb-2">
                        <a href="contact.php" class="btn btn-sm text-white custom-bg shadow-none">Contact</a>
                    </div>
                </div>
            </div>
            <!--- Card 3 -->
            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow-sm" style="max-width: 350px; margin: auto;">
                    <img src="../images/about/hotel-6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Hypnos Hôtel Sri Lanka</h5>
                        <div class="features mb-4">
                            <p>Gérant Harry Louad</p>
                            <a href="#" target="_blank">
                                <i class="bi bi-envelope"></i> harry-louad@hypnos.com
                            </a>
                        </div>
                        <div class="rating mb-4">
                        </div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Contact</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Voir toutes les chambres</a>
            </div>
        </div>
    </div>


    <?php require('includes/scripts.php'); ?>
</body>

</html>