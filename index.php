<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
    <style>
    body{
      overflow-x:hidden;
    }
       footer div{
            color: white;
        }
       p>a{
            text-decoration: none;
            color:white
        }
        li > span{
          font-weight:bold;
        }
    </style>
</head>

    <body>
    <?php
  
    ?>
     <!-- Navigation -->
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
  <!-- Page Content -->
  <div class="container-fluid px-0">

    <h1 class="col-12 my-4 d-flex justify-content-center">Reserver maintenant</h1>

    <div class="container-fluid ">
<div class="row "> 
    <div class="jumbotron jumbotron w-100" >
        <div class="container">
        <form method="POST" class="col-12">
            <div class="row d-flex justify-content-center">

           
          <div class="col-5" class="display-6">Lieu depart <input type="text" class="form-control" name="lieu"></div>
          <div class="col-5"> Destination <input type="text" class="form-control" name="destination"></div>
         <div class="col-12 d-flex justify-content-center my-3">
             <input type="submit" class="btn btn-primary" value="rechercher" name="recherche">
            </div>
        </div>
        </div>
      </div>
      </div>
      </form>
</div>
</div>
<div class="container">
    <div class="row">
    <?php
      include('connexion.php');

      if(isset($_POST["lieu"]) && $_POST["destination"] )
      {
  $lieuDepart=$_POST["lieu"];
  $destination=$_POST["destination"];
      $query="select * from vol where lieuDepart='".$lieuDepart."' and destination='".$destination."' and nombreplace>0";
      $result=$conn->query($query);
      $data=$result->fetchAll();
      }
      
     if(isset($_POST["recherche"])){
       if( !empty($_POST["lieu"]) && !empty($_POST["destination"])){
    for( $i=0;$i<count($data);$i++){
    ?>
      <div class="col-lg-4 col-sm-6 ">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="img2.jpg" alt="" id="image"></a>
                 <div class="card-body">
                 <h5 class="card-title offset-2" ><?php echo $data[$i]['lieuDepart']; ?>-<?php echo $data[$i]['destination']; ?></h5>
                 <p class="card-text"></p>
                  </div>
                  <ul class="list-group list-group-flush">
                  <li class="list-group-item"><span >date</span>:<?php echo $data[$i]['dateVole']; ?></li>
                    <li class="list-group-item"><span>nombre place</span>:<?php echo $data[$i]['nombreplace'];?></li>
             <li class="list-group-item"><span>prix</span>: <?php echo $data[$i]['prix']; ?></li>
                  </ul>
              <div class="card-body">
               <a href="reservation.php?idvol=<?php echo $data[$i]['idvol']; ?>" class="btn btn-primary btn-md offset-4" name="reserver">reserver</a> 
                </div>    
        </div>
      </div>
    <?php }
     } else{
      echo "<div class=' col-6 d-flex justify-content-center offset-3 alert alert-danger' role='alert' style=''>les champs sont vide</div>";
    }
   } 
   ?>
     
    
    </div>
    </div>
    <!-- /.row -->
    <!-- Features Section -->
   </div>
  <!-- /.container -->



 
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
            <a href="#">home</a>
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
   <script>


   </script>
</body>
</html>