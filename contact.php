<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypnos Hotels Resorts Contact</title>
    <!----------- Links Bootstrap - Fonts - CSS -------->
    <?php require('includes/links.php'); ?>

    <style>
        .custom-alert {
            position: fixed;
            top: 80px;
            right: 25px;
        }
    </style>
</head>

<body class="bg-light">
    <!---------------- Navbar ------------>
    <?php require('includes/header.php'); ?>
    <!---------------- Section Contact ------------>
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Nous Contacter</h2>
        <hr>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non mollitia<br>quis quibusdam fuga nisi a nulla
            natus rerum optio illo Lorem ipsum dolor sit amet.
        </p>
    </div>
    <div class="container">
        <div class="row">
            <!---------------- Section Contact Map------------>
            <div class="col-lg-6 mb-5 px-4">
                <div class="bg-white rounded shadow-sm p-4">
                    <iframe class="w-100 rounded mb-4" height="300px" src="<?php echo $contact_r['iframe'] ?>" loading="lazy"></iframe>
                    <h5>Adresse</h5>
                    <a href="<?php echo $contact_r['gmap'] ?>" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i> <?php echo $contact_r['address'] ?>
                    </a>
                    <h5 class="mt-4">Contact</h5>
                    <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1'] ?>
                    </a>
                    <br>
                    <a href="tel: +<?php echo $contact_r['pn2'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn2'] ?>
                    </a>
                    <br>
                    <a href="mailto: <?php echo $contact_r['email'] ?>" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> <?php echo $contact_r['email'] ?>
                    </a>
                    <h5 class="mt-4">Réseaux Sociaux</h5>
                    <a href="<?php echo $contact_r['tw'] ?>" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter me-1"></i>
                    </a>
                    <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram"></i>
                    </a>

                </div>
            </div>

            <!---------------- Section Contact Form------------>
            <div class="col-lg-6 mb-6 px-4">
                <div class="bg-white rounded shadow-sm p-4">
                    <form method="POST">
                        <h5>Formulaire de réservation</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 400;">Votre Nom</label>
                            <input name="name" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 400;">Votre Adresse Email</label>
                            <input name="email" required type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 400;">Titre du Message</label>
                            <input name="subject" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 400;">Votre Message</label>
                            <textarea name="message" required class="form-control shadow-none" rows="7" styles="resize: none;"></textarea>
                        </div>
                        <button type="submit" name="send" class="btn text-white custom-bg mt-3">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!---------------- Php Form ---------->
    <?php
    if (isset($_POST['send'])) {
        $frm_data = filteration($_POST);

        $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
        $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['message']];

        $res = insert($q, $values, 'ssss');
        if ($res == 1) {
            alert('success', 'Message envoyé');
        } else {
            alert('error', 'Problème serveur, réessayer!');
        }
    }
    ?>

    <!---------------- Section Hôtels ---------->
    <h2 class="mt-5 pt-4 mb-5 text-center fw-bold h-font">Sélection de nos Hôtels</h2>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <!--- Card 1 -->
                <div class="card border-0 shadow-sm" style="max-width: 350px; margin: auto;">
                    <img src="images/about/hotel-1.jpg" class="card-img-top" alt="hôtel au bord de mer">
                    <div class="card-body">
                        <h5>Hypnos Hôtel Antilles</h5>
                        <div class="features mb-4">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, ad itaque quia
                                aliquam qui odio corrupti.</p>
                            <a href="https://www.booking.com/region/mf/frenchwestindies.fr.html?aid=318615;label=New_French_FR_FR_21427170025-jk*X_uacqSf7DrW3Y7i2FgS84604461865:pl:ta:p1:p2:ac:ap:neg;ws=&gclid=Cj0KCQjw5-WRBhCKARIsAAId9FnBXUjyCQ17kdGLkT2IsQ5SrOYVobJnjocnAHSUbJKOiTs7P0TocGsaAiJCEALw_wcB " target="_blank">
                                Lien Booking.com</a>
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
                        <a href="contact.php" class="btn btn-sm text-white custom-bg shadow-none">Réserver</a>
                        <a href="services.php" class="btn btn-sm btn-outline-dark">Découvrir</a>
                    </div>
                </div>
            </div>
            <!--- Card 2 -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow-sm" style="max-width: 350px; margin: auto;">
                    <img src="images/about/hotel-2.jpg" class="card-img-top" alt="hôtel au bord de mer">
                    <div class="card-body">
                        <h5>Hypnos Hôtel Martinique</h5>
                        <div class="features mb-4">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, ad itaque quia
                                aliquam qui odio corrupti.</p>
                            <a href="https://www.booking.com/country/mq.fr.html?aid=1610680;label=mq-YRwVB6aKoSXe5kdtVeqElQS496741580564:pl:ta:p1:p2:ac:ap:neg:fi:tikwd-5690687608:lp9055895:li:dec:dm:ppccp=UmFuZG9tSVYkc2RlIyh9YURcq_26dhSxO_kD28P4Rwg;ws=&gclid=Cj0KCQjw5-WRBhCKARIsAAId9FlGo3aTwLFS5Lc3R761nfHPQAI9P0IgnEKjSCQB11u60foCTit3UqkaAgttEALw_wcB" target="_blank">
                                Lien Booking.com</a>
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
                        <a href="contact.php" class="btn btn-sm text-white custom-bg shadow-none">Réserver</a>
                        <a href="services.php" class="btn btn-sm btn-outline-dark">Découvrir</a>
                    </div>
                </div>
            </div>
            <!--- Card 3 -->
            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow-sm" style="max-width: 350px; margin: auto;">
                    <img src="images/about/hotel-3.jpg" class="card-img-top" alt="hôtel au bord de mer">
                    <div class="card-body">
                        <h5>Hypnose Hôtel Saint Martin</h5>
                        <div class="features mb-4">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, ad itaque quia
                                aliquam qui odio corrupti.</p>
                            <a href="https://www.booking.com/region/mf/frenchwestindies.fr.html?aid=318615;label=New_French_FR_FR_21427170025-jk*X_uacqSf7DrW3Y7i2FgS217273543382:pl:ta:p1:p2:ac:ap:neg:fi2644295747:tidsa-302758137116:lp9055895:li:dec:dm;ws=&gclid=Cj0KCQjw5-WRBhCKARIsAAId9Fl_-nqqBXBebMe3akBosmLuPSW9xS_OyBnfgy9-UYR9BLlHKjaBjOoaAqjaEALw_wcB" target="_blank">
                                Lien Booking.com</a>
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
                        <a href="contact.php" class="btn btn-sm text-white custom-bg shadow-none">Réserver</a>
                        <a href="services.php" class="btn btn-sm btn-outline-dark">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="services.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Voir tous les Hôtels</a>
            </div>
        </div>
    </div>

    <!---------------- Php Footer ---------->
    <?php require('includes/footer.php'); ?>

</body>

</html>