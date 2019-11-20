<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> Votre panier </h1>
	<table width="100%">
		<tr> <th>produit</th>
			<th>quantite</th>
			<th>prix</th>
		</tr>
		<tr>
			<th> Fauteuil roulant</th>
			<th>5</th>
			<th>1000 dt</th>
		</tr>
		<tr>
			<th> boulle anti-stress</th>
			<th>1</th>
			<th>20 dt</th>
		</tr>
	</table>
	<h3>total commande</h3>
	<br>
	<form method="POST" action="ajoutCommande.php">
	 <input type="submit" name="confirmer" value="Confirm Order">
			
			<?PHP $d = date('Y-m-d H:i:s'); 
					session_start();
			?>
			<br>
		<input type="radio" name="methode" value="1">livraisons
    	<input type="radio" name="methode" value="0">Carte credit
    	<input type="hidden" value="<?PHP echo $d ?>" name="date_com" >
    	<input type="hidden" value="1" name="id_panier" >
    	<input type="hidden" value="0" name="etat" >
    	<input type="hidden" value="<?PHP echo $_SESSION['id']; ?>" name="id_client" >

			 		
	</form>

</body>
</html>