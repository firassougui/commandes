<?PHP
include "../entities/CreditCard.php";
include "../core/CreditCardC.php";

if (isset($_POST["id"]) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['numcc']) and isset($_POST['cvv']) and isset($_POST['date'])){
	$CC=new CreditCardC();
$c1=new CreditCard($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['numcc'],$_POST['cvv'],$_POST['date']);
	$CC->modifierCC($c1,$_POST['id']);

	header('Location: passerCommande.php');

	
}else{
	echo "vérifier les champs";
}


?>

