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
        if (update($q,$values,'i')) {
            alert('success', 'Tous les messages sont Lu!');
        } else {
            alert('error', 'Erreur Chargement!');
        }
    } else {
        $q = "UPDATE `user_queries` SET `seen`=? WHERE `id`=?";
        $values = [1,$frm_data['seen']];
        if (update($q,$values,'ii')) {
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
        if (mysqli_query($con,$q)){
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
    <title>Messagerie Formulaire de contact Hypnose Hotels</title>
    <!----------- Links Bootstrap - Fonts - CSS -------->
    <?php require('includes/links.php'); ?>

</head>

<body class="bg-light">
    <!----------- Admin Sidebar -------->
    <?php require('includes/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Formulaire de contact</h3>
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="text-end mb-4">
                            <a href="?seen=all" class="btn btn-dark  shadow-none btn-sm"><i class="bi bi-check-square"></i> Marquer tout Lu</a>
                            <a href="?del=all" class="btn btn-danger shadow-none btn-sm"><i class="bi bi-trash3"></i> Effacer tout</a>
                        </div>
                        <div class="table-responsive-md" style="height: 300px; overflow-y: scroll;">

                            <table class="table table-hover border">
                                <thead class="sticky-top">
                                    <tr class="bg-white text-dark">
                                        <th scope="col">#</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Email</th>
                                        <th scope="col" width="20%">Titre</th>
                                        <th scope="col" width="30%">Message</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $q = "SELECT * FROM `user_queries` ORDER BY `id` DESC";
                                    $data = mysqli_query($con, $q);
                                    $i = 1;

                                    while ($row = mysqli_fetch_assoc($data)) {
                                        $seen = '';
                                        if ($row['seen'] != 1) {
                                            $seen = "<a href='?seen=$row[id]' class='btn btn-sm rounded-pill btn-light'>Message Lu</a>";
                                        }
                                        $seen .= "<a href='?del=$row[id]' class='btn btn-sm rounded-pill btn-danger text-white'>Effacer</a>";

                                        echo <<<query
                                        <tr>
                                            <td>$i</td>
                                            <td>$row[name]</td>
                                            <td>$row[email]</td>
                                            <td>$row[subject]</td>
                                            <td>$row[message]</td>
                                            <td>$row[date]</td>
                                            <td>$seen</td>
                                        </tr>
                                      query;
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>


            </div>
        </div><!-- row end -->
    </div><!-- container end-->



    <?php require('includes/scripts.php'); ?>

</body>

</html>