<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypnos Hotels Resorts À propos</title>
    <!----------- Links Bootstrap - Fonts - CSS -------->
    <?php require('includes/links.php'); ?>
    <!----------- Header Swiper Carousel Images -------->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <style>
        .box {
            border-top-color: var(--teal) !important;
        }
    </style>
</head>

<body class="bg-light">
    <!---------------- Navbar ------------>
    <?php require('includes/header.php'); ?>
    <!---------------- Section À propos ------------>
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Notre Histoire</h2>
        <hr>
    </div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Une Histoire de famille</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus
                    debitis reprehenderit aut quas, et quasi neque.Lorem ipsum, dolor
                    sit amet consectetur adipisicing elit. Doloribusdebitis reprehenderit
                    aut quas.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus
                    debitis reprehenderit aut quas, et quasi neque.Lorem ipsum, dolor
                    sit amet consectetur adipisicing elit. Doloribusdebitis reprehenderit
                    aut quas.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/about.jpg" class="w-100">
            </div>
        </div>
    </div>
    <!---------------- Section Cards ------------>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow-sm p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.svg" width="40px">
                    <h4 class="mt-3">3 hôtels</h4>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow-sm p-4 border-top border-4 text-center box">
                    <img src="images/about/staff.svg" width="55px">
                    <h4 class="mt-3">200 employés</h4>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow-sm p-4 border-top border-4 text-center box">
                    <img src="images/about/flag.svg" width="36px">
                    <h4 class="mt-3">Accueil 7/7j</h4>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow-sm p-4 border-top border-4 text-center box">
                    <img src="images/about/euro-sign.svg" width="27px">
                    <h4 class="mt-3">Meilleurs Prix</h4>
                </div>
            </div>
        </div>
    </div>
    <!---------------- Swiper Teams ------------>
    <h3 class="my-5 fw-bold h-font text-center">Nos Équipes</h3>
    <div class="container px-4">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center  overflow-hidden rounded">
                    <img src="images/about/team.jpg" class="w-100">
                    <h5 class="mt-2">Chef Imar Laro</h5>
                </div>
                <div class="swiper-slide bg-white text-center  overflow-hidden rounded">
                    <img src="images/about/team-2.jpg" class="w-100">
                    <h5 class="mt-2">Chef Pablo Nalli</h5>
                </div>
                <div class="swiper-slide bg-white text-center  overflow-hidden rounded">
                    <img src="images/about/team-3.jpg" class="w-100">
                    <h5 class="mt-2">Chef Jane Leroi</h5>
                </div>
                <div class="swiper-slide bg-white text-center  overflow-hidden rounded">
                    <img src="images/about/team-4.jpg" class="w-100">
                    <h5 class="mt-2">Coach Mark Segur</h5>
                </div>
                <div class="swiper-slide bg-white text-center  overflow-hidden rounded">
                    <img src="images/about/team-5.jpg" class="w-100">
                    <h5 class="mt-2">Coach Marie Li</h5>
                </div>
                <div class="swiper-slide bg-white text-center  overflow-hidden rounded">
                    <img src="images/about/team-6.jpg" class="w-100">
                    <h5 class="mt-2">Coach Jonathan Bird</h5>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!---------------- Footer ---------->
    <?php require('includes/footer.php'); ?>
    <!---------------Swiper JS ---------->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!---------- Initialize Swiper ----->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
            },
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
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