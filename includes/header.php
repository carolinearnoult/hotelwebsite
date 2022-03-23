  <?php
    require('admin/includes/db_config.php');
    require('admin/includes/essentials.php');

    $contact_q = "SELECT * FROM `contact_details` WHERE `id`=?";
    $values = [1];
    $contact_r = mysqli_fetch_assoc(select($contact_q, $values, 'i'));
  
  ?>
  
  
  <!------------ Navbar start --------------------->
  <nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
      <div class="container-fluid">
          <a class="navbar-brand me-5 fw-bold h-font" href="index.php">Hypnos Hotels</a>
          <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link me-2" href="index.php">Accueil</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link me-2" href="rooms.php">Chambres</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link me-2" href="services.php">Hôtels & Services</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link me-2" href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link me-2" href="about.php">À propos</a>
                  </li>
              </ul>
              <div class="d-flex">
                  <button type="button" class="btn btn-outline-dark shadow-none me-lg-3  me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                      Login
                  </button>
                  <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                      S'inscrire
                  </button>
              </div>
          </div>
      </div>
  </nav>
  <!---------------- Navbar end --------------------->
  <!----------------Login Modal --------------------->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <form>
                  <div class="modal-header">
                      <h5 class="modal-title d-flex align-items-center">
                          <i class="bi bi-person-circle fs-3 me-2"></i>
                          Demarrer la session
                      </h5>
                      <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="mb-3">
                          <label class="form-label">Adresse e-mail</label>
                          <input type="email" class="form-control shadow-none">
                      </div>
                      <div class="mb-4">
                          <label class="form-label">Mot de passe</label>
                          <input type="password" class="form-control shadow-none">
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-2">
                          <button type="submit" class="btn btn-dark shadow-none">Login</button>
                          <a href="javascript: void(0)" class="text-secondary text-decoration-none">Mode de passe oublié ?</a>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
  <!----------------Register Modal ----------------->
  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <form>
                  <div class="modal-header">
                      <h5 class="modal-title d-flex align-items-center">
                          <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                          Inscrivez-vous
                      </h5>
                      <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                          Note: Les données doivent correspondres à vos papiers d'identités qui vous seront demandés lors du check-in.
                      </span>
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-md-6 ps-0 mb-3">
                                  <label class="form-label">Nom</label>
                                  <input type="text" class="form-control shadow-none">
                              </div>
                              <div class="col-md-6 p-0 mb-3">
                                  <label class="form-label">Adresse e-mail</label>
                                  <input type="email" class="form-control shadow-none">
                              </div>
                              <div class="col-md-6 ps-0 mb-3">
                                  <label class="form-label">Numéro de téléphone</label>
                                  <input type="text" class="form-control shadow-none">
                              </div>
                              <div class="col-md-6 p-0 mb-3">
                                  <label class="form-label">Avatar</label>
                                  <input type="file" class="form-control shadow-none">
                              </div>
                              <div class="col-md-12 p-0 mb-3">
                                  <label class="form-label">Adresse</label>
                                  <textarea class="form-control shadow-none" rows="1"></textarea>
                              </div>
                              <div class="col-md-6 ps-0 mb-3">
                                  <label class="form-label">Code Postal</label>
                                  <input type="number" class="form-control shadow-none">
                              </div>
                              <div class="col-md-6 p-0 mb-3">
                                  <label class="form-label">Date de naissance</label>
                                  <input type="date" class="form-control shadow-none">
                              </div>
                              <div class="col-md-6 ps-0 mb-3">
                                  <label class="form-label">Mot de passe</label>
                                  <input type="password" class="form-control shadow-none">
                              </div>
                              <div class="col-md-6 p-0 mb-3">
                                  <label class="form-label">Confirmer le mot de passe</label>
                                  <input type="password" class="form-control shadow-none">
                              </div>
                          </div>
                      </div>
                      <div class="text-center my-1">
                          <button type="submit" class="btn btn-dark shadow-none">Je m'inscris</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>