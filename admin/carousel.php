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
    <title>Carrousel Hypnose Hotels</title>
    <!----------- Links Bootstrap - Fonts - CSS -------->
    <?php require('includes/links.php'); ?>

</head>

<body class="bg-light">
    <!----------- Admin Sidebar -------->
    <?php require('includes/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">CARROUSEL</h3>
                <!----------- Carrousel Section-------->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Images</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm data-bs-toggle="modal" data-bs-target="#carousel-s">
                                <i class="bi bi-plus-square"></i> Ajouter
                            </button>
                        </div>
                        <div class="row" id="carousel-data">
                            <div class="col-md-8 mb-3">
                                <div class="card bg-white text-black">
                                    <img src="../images/carousel/1.png" class="card-img">
                                    <div class="card-img-overlay text-end">
                                        <button type="button" class="btn btn-danger btn-sm shadow-none">
                                            <i class="bi bi-trash3"></i>Annuler
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!----------- Carousel Modal-------->
                <div class="modal fade" id="carousel-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="carousel_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Ajouter une image</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Image</label>
                                        <input type="file" name="carousel_picture" id="carousel_picture_inp" accept="[.jpg, .png, .webp, .jpeg]" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="carousel_picture_value=''" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div><!-- row end -->
    </div><!-- container end-->



    <?php require('includes/scripts.php'); ?>
    <scrip src="scripts/carousel.js"></scrip>
</body>

</html>