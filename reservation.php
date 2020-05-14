<?php ob_start();?>
<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
 <!-- link local CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
  
    </style>
 </head>
 <body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="logo3.png" width="120" height="80" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reservation.php">reservation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="confirmation.php">confirmation</a>
              </li>
          </ul>
        </div>
      </nav>
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="avion.jpg"  class="d-block w-100" height="400" alt="...">
                <div class="carousel-caption d-none d-md-block">
                
                </div>
              </div>
              <div class="carousel-item">
                <img src="avion2.jpg"  class="d-block w-100" height="400" alt="...">
                <div class="carousel-caption d-none d-md-block">
                 
                </div>
              </div>
              <div class="carousel-item">
                <img src="avion3.jpg"  class="d-block w-100" height="400" alt="...">
                <div class="carousel-caption d-none d-md-block">
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
<?php
                include('connexion.php');
                
                if(isset($_GET["idvol"]))
                {
                    $idvol=$_GET["idvol"];
                    $query="select * from vol where idvol='$idvol'";
                    $result=$conn->query($query);
                    $data=$result->fetchAll();

?>
<div class="row detail">
          <div class="col-12 col-sm-12 col-md-12 col-lg-4 p-0">
            <div class="ribbon"><span> Offre Genius </span></div>
            <img src="../imag/avion.jpg" alt="">
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-8 p-0">
            <span class="discount-holder"><span>Reservation</span></span>
            <div class="detail-box">
              <h4>Réservez votre voyage pas cher</h4>
              <p>
                <div class="offer">
                    <span class="offer-text">Réservez avec:</span>
                    <span class="offer-text-2">flexibilité</span>
                </div>
              </p>
            
              <ul>
                <li name="lienDepart"><strong> <i class="fas fa-plane-departure"></i>lienDepart : </strong>  <?php echo $data[0]["lieuDepart"]?></li>
                <li name="destination"><strong > <i class="fas fa-plane-arrival"></i>Destination : </strong> <?php echo $data[0]["destination"]?></li>
                <li name="prix"><strong> Prix Prime par passager : </strong><?php echo $data[0]["prix"]?></li>
              </ul>
              <p name="nombreplace"><strong><i class="fas fa-user-check"></i> Nombre Place : </strong><?php echo $data[0]["nombreplace"]?> </p>
              <h6 name=" dateVol "><strong><i class="fa fa-clock"></i> Date vol :</strong> <?php echo $data[0]["dateVole"]?></h6>
            </div>
           
          </div>
      
        </div>
        <?php }  ?>
         <!-- formulaire -->
       
 <div class="container register-form" id="formreserv">
            <div class="form">
                <div class="note">
                    <p>Coordonnées des passagers.</p>
                </div>

                <div class="form-content" >
<?php 
   if(isset($_POST["reserver"]))
   {
          $nom=$_POST["nom"];
          $prenom=$_POST["prenom"];
          $adress=$_POST["adresse"];
          $telephone=$_POST["telephone"];
          $passport=$_POST["passeport"];
          $email=$_POST["email"];
          
        $query="select nombreplace from vol where idvol='$idvol'";
            $result=$conn->query($query);
            $data=$result->fetchAll();
        $nombreplace=$data[0]['nombreplace'];
            $query4="update vol set nombreplace=$nombreplace-1 where idvol='$idvol'";
        $conn->exec($query4);
        
        $query2="insert into client values(NULL,'".$nom."','".$prenom."','".$adress."','$telephone','".$email."','".$passport."')";
            $conn->exec($query2);

        $queryR="select idClient from client ORDER BY idClient DESC";
              $result=$conn->query($queryR);
              $data2=$result->fetchAll();
              $idClient=$data2[0]['idClient'];

        $query3="insert into reservation values(NULL,$idClient,'$idvol','".date("Y/m/d")."',$nombreplace)";
           $conn->exec($query3);
        $query5="update reservation set nombrelimite=$nombreplace-1 where idvol='$idvol'";
           $conn->exec($query5);

        $queryR="select idReservation from reservation where idvol='$idvol' ORDER BY idReservation DESC";
            $result=$conn->query($queryR);
            $data2=$result->fetchAll();
           header("location:confirmation.php?idReservation=".$data2[0]['idReservation']."");   
           ob_end_flush(); 
       }
 ?>
                    <div class="row" >
                        <div class="col-md-6">
                            <form  method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nom" placeholder="Nom *" value="" required/>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="passeport" placeholder="Passeport *" value="" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="prenom" placeholder=" Prenom *" value="" required/>
                             </div>
                             <div class="form-group">
                                <input type="text" class="form-control" name="adresse" placeholder="Adresse *" value="" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="telephone" placeholder="Telephone *" value="" required/>
                            </div>
                           
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="email *" value="" required/>
                             </div>
                        </div>
                    </div>
                    <button type="submit" class="btnSubmit" name="reserver">réservez maintenant</button>
                 
                </div>
            </div>
        </div>
      </form>
      
     <!-- Footer -->
<footer  style="background-color: #000000;margin-top: 20px;">

<div style="background-color: #6351ce;">
  <div class="container">

    <!-- Grid row-->
    <div class="row py-4 d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
        <h6 class="mb-0">connecter vous dans les  médias sociaux</h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-6 col-lg-7 text-center text-md-right">

        <!-- Facebook -->
        <a class="fb-ic">
          <i class="fab fa-facebook-f white-text mr-4"> </i>
        </a>
        <!-- Twitter -->
        <a class="tw-ic">
          <i class="fab fa-twitter white-text mr-4"> </i>
        </a>
        <!-- Google +-->
        <a class="gplus-ic">
          <i class="fab fa-google-plus-g white-text mr-4"> </i>
        </a>
        <!--Linkedin -->
        <a class="li-ic">
          <i class="fab fa-linkedin-in white-text mr-4"> </i>
        </a>
        <!--Instagram-->
        <a class="ins-ic">
          <i class="fab fa-instagram white-text"> </i>
        </a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
</div>

<!-- Footer Links -->
<div class="container text-center text-md-left mt-5">

  <!-- Grid row -->
  <div class="row mt-3">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

      <!-- Content -->
      <h6 class="text-uppercase font-weight-bold">gestion reservation vole</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;background-color: #6351ce;">
      <p>soyer le bienvenue dans notre applicaion web pour la gestion des vole</p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">page</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;background-color: #6351ce;">
      <p>
        <a href="index.php">home</a>
      </p>
      <p>
        <a href="reservation.php">reservation</a>
      </p>
      <p>
        <a href="confirmation.php">recupuration</a>
      </p>
    </div>
 
   
    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Contact</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;background-color: #6351ce;">
      <p>
        <i class="fas fa-home mr-3"></i> youcode safi</p>
      <p>
        <i class="fas fa-envelope mr-3"></i> vol@appweb.com</p>
      <p>
        <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
      <p>
        <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3 bg-dark">© 2020 Copyright:
  <a href="https://mdbootstrap.com/"> appvol.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  
  

  <!-- http://localhost/brief%20vol/reservationvol.php -->

</body>
</html>