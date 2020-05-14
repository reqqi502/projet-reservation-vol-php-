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
        <a class="navbar-brand" href="connexion.php"><img src="footlogo.png" width="230" height="100" alt=""></a>
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

<footer>
 	<div class="container-fluide">
 		<div class="row">
 			<div class="col-md-3 esp" >
 				<img src="footlogo.png" style="margin: 1px 0px 0Px 50px;; height: 39%;width: 75%;">
 				<p style="color: white;text-align: center">
 				Si bien développer son entreprise est votre enjeu
 				 pour les prochains mois, posez vous les questions 
				 sur votre stratégie de développement !</p>
				 <br>
				 <div class="row-xl-6" id="iconeaws">	 
				 <b href="#"><i class="fa fa-cc-visa" aria-hidden="true"style="color:#00828C;font-size: 40px"></i></b>
				 <b href="#"><i class="fa fa-paypal" aria-hidden="true"style="color:#00828C;font-size: 40px"></i></b>
				<b href="#"><i class="fa fa-cc-stripe" aria-hidden="true"style="color:#00828C;font-size: 40px"></i></b>
				<b href="#"><i class="fa fa-cc-mastercard" aria-hidden="true"style="color:#00828C;font-size: 40px"></i></b>
				</div>
 			</div>
 			<div class="col-md-3 last">
				 <h1>Follow US</h1>
				 	<div class="icos">
						<i class="fa fa-instagram" aria-hidden="true"style="color:#00828C;font-size: 40px"></i>
						<b href="">Instagram</b>
					 </div>
					  <div class="icos">
						<i class="fa fa-facebook-square" aria-hidden="true"style="color:#00828C;font-size: 40px"></i>
						<b href="">Facebook</b>
					  </div>
					<div class="icos">
					<i class="fa fa-twitter-square" aria-hidden="true"style="color:#00828C;font-size: 40px"></i>
					<b href="">Twitter</b>
					</div>
                    
					<div class="icos">
					<i class="fa fa-youtube-play" aria-hidden="true"style="color:#00828C;font-size: 40px"></i>
                    <b href="#">Youtube</b>
					</div> 
              	</div>
 	               <div class="col-md-3 last">
					<h1>Contact</h1>
 			   <ul style="list-style-type: none;">

					<li class="fa fa-address-book" aria-hidden="true"style="color:#00828C;font-size: 40px;margin-left: -20px">&nbsp;&nbsp;</li>Addresse :</span><br>
					  &nbsp;&nbsp;&nbsp; Mrroco Safi Code-Pin 20160
 			   	<hr color="gray" style="width:86%;height:3px;margin-top: 19px;"><br>
 			<i class="fa fa-phone-square" aria-hidden="true"style="color:#00828C;font-size: 40px;margin-left: -20px">&nbsp;&nbsp;</i>Phone :  +91 12345665.</li><br><br>
 			   	<li><i class="fa fa-envelope-o" aria-hidden="true"style="color:#00828C;font-size: 40px;margin-left: -20px">&nbsp;&nbsp;</i>Email :  contact@gmail.com</li>
 			   </ul>
 			</div>
	 </div>
 	<div class="last_foo">
            <abbr class="last">Copyrights © 2020. Developed with ❤️ by AGN & team</abbr> 
        </div>
</body>
</html>