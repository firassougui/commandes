<?php 
include_once "includes/header1.php";
include_once "../core/CreditCardC.php";
include_once "../entities/CreditCard.php";
include_once "../core/CommandeC.php";
$cc2C=new CreditCardC();
$idd=$_SESSION['id'];
$listeCC1=$cc2C->afficherListCC($idd); ?>

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
	
	<a style=" text-decoration: none; color: red;" href="ajout.php">ajouter une carte credit</a><br>
	<h3> Liste Des Cartes Credit : </h3>
        <?PHP
        $x=0;
         foreach($listeCC1 as $row){
      //if($_GET["id"] == $row['id']){
          $x=1;
      ?>

        <hr>
      Carte n°: <?PHP echo $row['numcc'] ?> <br> <span class="date_ex"> (Expire le <?PHP echo $row['date'] ?> )</span>
      <br>
    
     
      
      

      <a href="supprimerCC.php?numCc=<?PHP echo $row['numcc'] ?>"> Supprimer</a> |
      <a href="modifierCC.php?id=<?PHP echo $row['id'].'&numcc='.$row['numcc']; ?>">
    Modifier</a> <br>

    
       <?PHP } if ($x==0) { echo "Pas de Cartes";} ?>
 <form method="POST" action="ajoutCommande.php">
	 <input type="submit" name="confirmer" value="Confirm Order">
			
			<?PHP $d = date('Y-m-d H:i:s'); 
					$ok="disabled";

					$carte="Il faut ajouter Carte Credit";
					if ($x==1)
					{
					$a=$row['numcc'];
					$b=$row['date'];
						$ok="";
						$carte="Carte n°: $a (Expire le  $b";
					}
					
						


			?>
			<br>

		
    	<input type="radio" name="methode" value="0" <?PHP echo $ok; ?>><?PHP 	echo $carte;?><br>
    	<input type="radio" name="methode" value="1">Ou Especes $$
    	<input type="hidden" value="<?PHP echo $d ?>" name="date_com" >
    	<input type="hidden" value="1" name="id_panier" >
    	<input type="hidden" value="0" name="etat" >
    	<input type="hidden" value="<?PHP echo $_SESSION['id']; ?>" name="id_client" >

			 		
	</form>
</div>
</section>
<?php 
include_once "includes/header.php"; ?>
</body>
</html>