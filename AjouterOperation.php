<?php include("head.php");?>
<?php
include("connexion.php");

// Récupérer le prochain numéro d'opération automatiquement
$result = mysqli_query($bdd, "SELECT MAX(Num_Ope) AS max_num FROM operation");
$row = mysqli_fetch_assoc($result);
$Num_Ope = $row['max_num'] + 1;

// Vérifier si le formulaire est soumis
if (isset($_POST['enregistrer'])) {

    // Récupérer les valeurs du formulaire
    $Num_Cpt = $_POST['Num_Cpt'];  
    $Type_Ope = $_POST['Type_Ope'];   
    $Date_Ope = $_POST['Date_Ope'];   
    $Validation = $_POST['Validation'];
    $Montant_Ope = $_POST['Montant_Ope'];    

    // Insertion dans la base
    $requete = mysqli_query($bdd, 
        "INSERT INTO operation (Num_Ope, Num_Cpt, Type_Ope, Date_Ope, Validation, Montant_Ope) 
         VALUES ('$Num_Ope', '$Num_Cpt', '$Type_Ope', '$Date_Ope', '$Validation', '$Montant_Ope')"
    );

    if ($requete === false) {
        echo 'Erreur d\'insertion dans la base : ' . mysqli_error($bdd);
    } else {
        echo 'Opération enregistrée avec succès - Merci !';
    }
}
?>
