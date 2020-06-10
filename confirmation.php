<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
     <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" class="rel">
</head>
<body style="background-image: url('body.jpg'); background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;  background-size: 100% 100%;">
   <?php
   include('connexion.php');
   $idReservation=$_GET["idReservation"];
   $queryConfirmation="select * from reservation r,vol v,client c where v.idvol=r.idvol and idReservation=$idReservation and c.idClient=r.idClient ";
   $result=$conn->query($queryConfirmation);
   $data=$result->fetchAll();
   ?>
   

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                <a class="nav-link" href="afichage.php">confirmation</a>
              </li>
          </ul>
        </div>
      </nav>

    <table border= 2px solid black;  style="margin:0 auto;font-size:22px;;margin-top:170px;color:white">
    <tr>
    <th>nom : </th>
    <td><?php echo $data[0]['nom'] ?> </td>
  </tr>
  <tr>
    <th>prenom :</th>
    <td><?php echo $data[0]['prenom'] ?></td>
  </tr>
  <tr>
    <th>address :</th>
    <td><?php echo $data[0]['adress'] ?></td>
  </tr>
  <tr>
    <th>id de reservation : </th>
    <td><?php echo $data[0]['idReservation'] ?></td>
  </tr>
  <tr>
    <th>la data de reservation : </th>
    <td><?php echo $data[0]['dateResr'] ?></td>
  </tr>
  <tr>
    <th>nombre limite : </th>
    <td><?php echo $data[0]['nombrelimite'] ?></td>
  </tr>
  <tr>
    <th>lieu de depart : </th>
    <td><?php echo $data[0]['lieuDepart'] ?></td>
  </tr>
  <tr>
    <th>destination : </th>
    <td><?php echo $data[0]['destination'] ?></td>
  </tr>
  <tr>
    <th>date vole : </th>
    <td><?php echo $data[0]['dateVole'] ?></td>
  </tr>
  <tr>
    <th>prix : </th>
    <td><?php echo $data[0]['prix'] ?></td>
  </tr>
  <tr>
    <th>numero de telephone :</th>
    <td><?php echo $data[0]['numTelephone'] ?></td>
  </tr>
  <tr>
    <th>email :</th>
    <td><?php echo $data[0]['email'] ?></td>
  </tr>
  <tr>
    <th>passport :</th>
    <td><?php echo $data[0]['passport'] ?></td>
  </tr>
    </table>

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
