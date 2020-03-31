<?php require 'headezr.php';
?>

       <!--------------------------            CARROUSEL               ------------------------->

    <content>
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

          <div class="carousel-item active"> 
            <img src="/images/13.png" height ="400px" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
              <h5>Recherche par filtre et besoin</h5>
              <p>Ne perdez plus de temps à parcourir des milliers de profils</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/images/3.jpg" height ="400px" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Des outils sur mesures</h5>
              <p>Nous pouvons apporter des réponses à vos besoins !</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/images/7.jpg" height="400px" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" >
              <h5>Des profils vérifiés</h5>
              <p>Tous nos profils sont conformes et vérfiés</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!-- CONTENU BLEU -->

      <div class="container-fluid contenu container2 row" >
        <div class="row m-2 ">
             <div class="col-lg-12 col-md-12 col-sm-12 col-12" >
                <p class="deux text-center" >Profils vérifés <div class="counter deux text-center"  data-target= "160000">0</div></p>
                <p class="text-center text-wrap">Reunir les developpeurs et les recruteurs autour d'une table est un challenge aujourd'hui autour d'une table.</br>Simple d'utilisation par son ergonomie, consulté la base de donnée des développeurs de la métropole.</p>   
              </div>

              <div class="col-lg-8 col-md-6 col-sm-6 col-12  ">
                <img id="imagecentre"class="img-fluid  "src="images/Group 1vec.svg" alt="Logo">
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6 col 12">
                <iframe class="embed-responsive"  src="https://www.youtube.com/embed/_KIVo5mVY-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
        </div>
      </div>

      
    
    
      <?php require 'footer.php';?>
    