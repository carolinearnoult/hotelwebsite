 <div class="container-fluid bg-white mt-5">
     <footer class="py-5">
         <div class="row">
             <div class="col-lg-4 p-4">
                 <h5 class="h-font fw-bold fs-3">Hypnos Resorts</h5>
                 <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio atque impedit,
                     ex deserunt sequi harum alias consequuntur.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio atque impedit,
                     ex deserunt sequi harum alias consequuntur.
                 </p>
             </div>
             <div class="col-lg-4 p-4">
                 <h5 class="h-font mb-3">Catégories</h5>
                 <ul class="nav flex-column">
                     <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-dark">Accueil</a></li>
                     <li class="nav-item mb-2"><a href="rooms.php" class="nav-link p-0 text-dark">Chambres</a></li>
                     <li class="nav-item mb-2"><a href="services.php" class="nav-link p-0 text-dark">Services</a></li>
                     <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-dark">Contact</a></li>
                     <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-dark">À propos</a></li>
                 </ul>
             </div>
             <div class="col-lg-4 p-4">
                 <h5 class="h-font mb-3">Nous suivre</h5>
                 <ul class="nav flex-column">
                     <li class="nav-item mb-2"><a href="<?php echo $contact_r['tw'] ?>" class="nav-link p-0 text-dark"><i class="bi bi-twitter"></i> Twitter</a></li>
                     <li class="nav-item mb-2"><a href="<?php echo $contact_r['fb'] ?>" class="nav-link p-0 text-dark"><i class="bi bi-facebook"></i> Facebook</a></li>
                     <li class="nav-item mb-2"><a href="<?php echo $contact_r['insta'] ?>" class="nav-link p-0 text-dark"><i class="bi bi-instagram"></i> Instagram</a></li>
                 </ul>
             </div>
         </div>
         <div class="d-flex justify-content-center py-4 my-4 border-top">
             <p>&copy; 2022 Hypnos Hotels Resorts, Inc. All rights reserved.</p>
         </div>
     </footer>
 </div>
 <!-- Boostrap -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 <script>
    function setActive()
    {
     let navbar = document.getElementById('nav-bar');
     let a_tags = navbar.getElementsByTagName('a');

     for(i=0;i<a_tags.length;i++)
     {
        let file = a_tags[i].href.split('/').pop();
        let file_name = file.split('.')[0];

        if(document.location.href.indexOf(file_name) >= 0){
            a_tags[i].classList.add('active');
        }
     }
    }
    setActive();
 </script>