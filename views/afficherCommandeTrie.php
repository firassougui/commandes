<?PHP
session_start();
include_once "header1.php";
include_once "../core/CommandeC.php";
$cc1C=new CommandeC();
$idd=$_SESSION['id'];
$listeCC=$cc1C->afficherListCCTrie($idd);
$info=$cc1C->GetInfo($idd);
?>

	<h3>Liste des commandes :</h3>
	<a script="color : red;" href="afficherCommande.php"><B><STRONG>Retour</STRONG></B></a>
	<div class="container form-containers">

<table class="table">
<tr>
<th>ID Commande</th>
<th>Etat</th>
<th>Date de commande</th>

</tr>

<?PHP
foreach($listeCC as $row){
	//if($_GET["id"] == $row['id']){
	?>
	<tr>

	<td><?PHP echo $row['id_com']; ?></td>
	<td><?PHP if ($row['etat']==0) {echo "Non Traitée";} else {echo "Traitée";} ?></td>
	<td><?PHP echo $row['date_com']; ?></td>
	<td><form method="POST" action="AnnulerCommande.php">
	<input type="hidden" value="<?PHP echo $row['etat']; ?>" name="etat">
	<input type="hidden" value="<?PHP echo $row['id_panier']; ?>" name="id_panier">
	<input type="hidden" value="<?PHP echo $row['id_com']; ?>" name="id_com">
	<input type="submit" name="annuler" value="annuler">
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
</div>
</div>
</section>
<<?php 
include_once "includes/header.php"; ?>
</body>
</html>