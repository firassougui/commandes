<?PHP
session_start();
include "../core/CommandeC.php";
$cc1C=new CommandeC();
$idd=$_SESSION['id'];
$listeCC=$cc1C->afficherListCC($idd);
$info=$cc1C->GetInfo($idd);
?>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="includes/img/solution.png" type="image/png">
	<title>La Solution Medicale</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="includes/css/bootstrap.css">
	<link rel="stylesheet" href="includes/vendors/linericon/style.css">
	<link rel="stylesheet" href="includes/css/font-awesome.min.css">
	<link rel="stylesheet" href="includes/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="includes/vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="includes/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="includes/vendors/animate-css/animate.css">
	<link rel="stylesheet" href="includes/vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="includes/css/style.css">
	<link rel="stylesheet" href="includes/css/responsive.css">
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container-fluid">
				<div class="float-left">
					<p>Call Us: 012 44 5698 7456 896</p>
				</div>
				<div class="float-right">
					<ul class="right_side">
						<?PHP
							foreach($info as $row){
								?>
						<li>
							<a href="login.html">
								Bonjour <?PHP echo $row['login'];?> !
							</a>
						</li>
						<li>
							<a href="#">
								Role : <?PHP echo $row['role'];}?>
							</a>
						</li>
						<li>
							<a href="contact.html">
								Contact Us
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html">
						<img src="includes/img/solution.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row w-100">
							<div class="col-lg-7 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item active">
										<a class="nav-link" href="index.html">Home</a>
									</li>
									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="category.html">Shop Category</a>
												<li class="nav-item">
													<a class="nav-link" href="single-product.html">Product Details</a>
													<li class="nav-item">
														<a class="nav-link" href="checkout.html">Product Checkout</a>
														<li class="nav-item">
															<a class="nav-link" href="cart.html">Shopping Cart</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="confirmation.html">Confirmation</a>
														</li>
										</ul>
									</li>
									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="login.html">Login</a>
												<li class="nav-item">
													<a class="nav-link" href="tracking.html">Tracking</a>
													<li class="nav-item">
														<a class="nav-link" href="elements.html">Elements</a>
													</li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="contact.html">Contact</a>
									</li>
								</ul>
							</div>

							<div class="col-lg-5">
								<ul class="nav navbar-nav navbar-right right_nav pull-right">
									<hr>
									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-search" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-user" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-heart-o" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="#" class="icons">
											<i class="lnr lnr lnr-cart"></i>
										</a>
									</li>

									<hr>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>

</head>





	

<div class="lastback">	
<h3>Liste des commandes :</h3> 
<br>

			 
<a script="color:red;" href="passerCommande.php" ><h4>passer une commande</a>
	<br>
	<a script="color : red; " href="afficherCommandeTrie.php"><B><STRONG>Trier par Date</STRONG></B></a>
	<br>
	<form method="POST" action="afficherCommandeID.php">
	Rechercher par Réference : 
	<input type="text" name="id" id="id">
	<input type="submit" name="recherche" value="Rechercher">
    </form>
	<div class="container form-containers">

<table class="table">
<tr>
<th>Ref Commande</th>
<th>Etat</th>
<th>Date de commande</th>

</tr>

<?PHP
foreach($listeCC as $row){
	//if($_GET["id"] == $row['id']){
	?>
	<tr>

	<td><?PHP echo $row['id_com']; ?></td>
	<td><?PHP if ($row['etat']==0) {echo "Non Traitée";} elseif($row['etat']==1){echo "Confirmée";} else {echo "Annulée";} ?></td>
	<td><?PHP echo $row['date_com']; ?></td>
	<td>
<!--<form method="POST" action="imprimerFacture.php">
	<input type="hidden" value="<?PHP// echo $row['etat']; ?>" name="etat">
	<input type="hidden" value="<?PHP //echo $row['id_panier']; ?>" name="id_panier">
	<input type="hidden" value="<?PHP //echo $row['id_com']; ?>" name="id_com">
	<input type="hidden" value="<?PHP //echo $row['methode']; ?>" name="methode">
	<input type="hidden" value="<?PHP //echo $row['date_com']; ?>" name="date_com">

	<input type="submit" name="imprimer" value="Imprimer">
	</form>-->

		<form method="POST" action="AnnulerCommande.php">
	
	<input type="hidden" value="<?PHP echo $row['etat']; ?>" name="etat">
	<input type="hidden" value="<?PHP echo $row['id_panier']; ?>" name="id_panier">
	<input type="hidden" value="<?PHP echo $row['id_com']; ?>" name="id_com">
	<input type="submit" name="annuler" value="Annuler">
	</form>
	
	</td>
	</tr>
	<?PHP
//}
}
?>
</table>
</div>
</div>
<?php

if(isset($_GET["trait"]))
{
	if ($_GET["trait"] == 0) {
		echo '<script>alert("Commande deja traitée");</script>';
	}
}
?>
	<link rel="stylesheet" href="style/css/style.css">
	<link rel="stylesheet" href="style/css/style1.css">