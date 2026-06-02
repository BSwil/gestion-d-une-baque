<?php include 'head.php'; ?>
<?php include 'connexion.php';
$cpt=mysqli_query($bdd,"select max(Num_Cpt)+1 as next_cpt from compte");
$dernier_cpt=mysqli_fetch_assoc($cpt);
$Num_Cpt=$dernier_cpt['next_cpt'];
$clt=mysqli_query($bdd,"select max(Num_Clt)+1 as next_clt from compte");
$dernier_clt=mysqli_fetch_assoc($clt);
$Num_Clt=$dernier_clt['next_clt'];


if (isset($_POST['Enregistrer'])) {
    $Num_Cpt=$_POST['Num_Cpt'];
    $Num_Clt=$_POST['Num_Clt'];
    $Nom_Clt=$_POST['Nom_Clt'];
    $Solde_Bancaire=$_POST['Solde_Bancaire'];
    $Solde_Reel=$_POST['Solde_Reel'];
    $Type_Cpt=$_POST['Type_Cpt'];

    $requete=mysqli_query($bdd,"insert into compte (Num_Cpt,Num_Clt,Nom_Clt,Solde_Bancaire,Solde_Reel,Type_Cpt) values ('$Num_Cpt','$Num_Clt','$Nom_Clt','$Solde_Bancaire','$Solde_Reel','$Type_Cpt')");

    if ($requete==false) {
        echo 'Erreur d\'insertion dans la base : '.mysqli_error($bdd);
    } else {
        echo 'Compte enregistré avec succès - Merci !';
    }
}
?>