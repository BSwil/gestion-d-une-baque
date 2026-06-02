<?php include 'head.php'; ?>
<?php include 'connexion.php'; 
$cpt=mysqli_query($bdd,"select max(Num_Cpt)+1 as next_cpt from compte");
$dernier_cpt=mysqli_fetch_assoc($cpt);
$Num_Cpt=$dernier_cpt['next_cpt'];

$clt=mysqli_query($bdd,"select max(Num_Clt)+1 as next_clt from compte");
$dernier_clt=mysqli_fetch_assoc($clt);
$Num_Clt=$dernier_clt['next_clt'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Inscription</title>
<meta charset="utf-8 iso-8859-1" />
</head>
<body>

<form action="AjouterCompte.php" method="POST">
<pre>
<h2>Ajouter Compte :  </h2>
     
        Numéro Compte   : <input type="text" name="Num_Cpt" value ="<?php echo $Num_Cpt ?>" readonly>
        Numéro Client   : <input type="text" name="Num_Clt" value="<?php echo $Num_Clt ?>" readonly>
        Nom Client      : <input type="text" name="Nom_Clt">
        Solde Bancaire  : <input type="number" name="Solde_Bancaire" value =0>
        Solde Réel      : <input type="number" name="Solde_Reel" value =0>

        Type De Compte  
                          <input type="radio" name="Type_Cpt" Value="Epargne" checked> Epargne <BR>
                          <input type="radio" name="Type_Cpt" value="Cheque"> Cheque
        
                         <input type="submit" name="Enregistrer" value="Envoyer" > <input type="reset"  value="Supprimer" >
</pre>

</form>
</body>
</html>
