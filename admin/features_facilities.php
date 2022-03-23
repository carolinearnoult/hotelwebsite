<?php
require('includes/essentials.php');
require('includes/db_config.php');
adminLogin();
/*--------- Boutons Marqué comme Lu ------*/
if (isset($_GET['seen'])) {
    $frm_data = filteration($_GET);

    if ($frm_data['seen'] == 'all') {
        $q = "UPDATE `user_queries` SET `seen`=?";
        $values = [1];
        if (update($q, $values, 'i')) {
            alert('success', 'Tous les messages sont Lu!');
        } else {
            alert('error', 'Erreur Chargement!');
        }
    } else {
        $q = "UPDATE `user_queries` SET `seen`=? WHERE `id`=?";
        $values = [1, $frm_data['seen']];
        if (update($q, $values, 'ii')) {
            alert('success', 'Message Lu!');
        } else {
            alert('error', 'Erreur Chargement!');
        }
    }
}
/*----------- Boutons Effacer --------*/
if (isset($_GET['del'])) {
    $frm_data = filteration($_GET);

    if ($frm_data['del'] == 'all') {
        $q = "DELETE FROM `user_queries`";
        if (mysqli_query($con, $q)) {
            alert('success', 'Toute les données sont effacées!');
        } else {
            alert('error', 'Erreur opération!');
        }
    } else {
        $q = "DELETE FROM `user_queries` WHERE `id`=?";
        $values = [$frm_data['del']];
        if (delete($q, $values, 'i')) {
            alert('success', 'Données effacées!');
        } else {
            alert('error', 'Erreur opération!');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration données réservtaion Hypnose Hotels</title>
    <!----------- Links Bootstrap - Fonts - CSS -------->
    <?php require('includes/links.php'); ?>

</head>

<body class="bg-light">
    <!----------- Admin Sidebar -------->
    <?php require('includes/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Données Réservations</h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Chambres</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#feature-s">
                                <i class="bi bi-plus-square"></i> Ajouter
                            </button>
                        </div>
                        <div class="table-responsive-md" style="height: 350px; overflow-y: scroll;">

                            <table class="table table-hover border">
                                <thead>
                                    <tr class="bg-white text-dark">
                                        <th scope="col">#</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="features-data">
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div><!-- container end-->

    <!----------- Feature Modal-------->
    <div class="modal fade" id="feature-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="feature_s_form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajouter des données</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nom</label>
                            <input type="text" name="feature_name" class="form-control shadow-none" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn custom-bg text-white shadow-none">Enregistrer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <?php require('includes/scripts.php'); ?>

    <script>
        let feature_s_form = document.getElementById('feature_s_form');
        let facility_s_form = document.getElementById('facility_s_form');

        feature_s_form.addEventListener('submit', function(e) {
            e.preventDefault();
            add_feature();
        });

        function add_feature() {
            let data = new FormData();
            data.append('name', feature_s_form.elements['feature_name'].value);
            data.append('add_feature', '');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/features_facilities.php", true);

            xhr.onload = function() {
                var myModal = document.getElementById('feature-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == 1) {
                    alert('success', 'Données ajoutées');
                    feature_s_form.elements['feature_name'].value = '';
                    get_features();
                } else {
                    alert('error', 'Erreur Serveur');
                }
            }
            xhr.send(data);
        }

        function get_features() {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/features_facilities.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                document.getElementById('features-data').innerHTML = this.responseText;
            }
            xhr.send('get_features');
        }

        function rem_feature(val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/features_facilities.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                if (this.responseText == 1) {
                    alert('success', 'Données effacées');
                    get_features();
                } else if (this.responseText == 'room_added') {
                    alert('success', 'Données ajoutées');
                } else {
                    alert('error', 'Erreur Serveur');
                }

            }
            xhr.send('rem_feature=' + val);
        }

   
        window.onload = function() {
            get_features();
           
        }
    </script>
</body>

</html>