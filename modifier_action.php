<?php
// Inclure le fichier de connexion à la base de données
include("connexion.php");

// Vérifier si des données ont été soumises via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $Id_Produit = $_POST["Id_Produit"];
    $Prod_Code = $_POST["Prod_Code"];
    $Prod_Designation = $_POST["Prod_Designation"];
    $Prod_Prix_A = $_POST["Prod_Prix_A"];
    $Prod_Marge = $_POST["Prod_Marge"];
    $Prod_Quantite_S1 = $_POST["Prod_Quantite_S1"];
    $Prod_Seuil = $_POST["Prod_Seuil"];
    $Id_Fournisseur = $_POST["Id_Fournisseur"];

    // Préparer la requête SQL pour la mise à jour
    $sql = "UPDATE stock SET 
            Prod_Code='$Prod_Code', 
            Prod_Designation='$Prod_Designation', 
            Prod_Prix_A='$Prod_Prix_A', 
            Prod_Marge='$Prod_Marge', 
            Prod_Quantite_S1='$Prod_Quantite_S1', 
            Prod_Seuil='$Prod_Seuil', 
            Id_Fournisseur='$Id_Fournisseur' 
            WHERE Id_Produit='$Id_Produit'";

    // Exécuter la requête SQL
    if (mysqli_query($conn, $sql)) {
        echo "Modification effectuée avec succès.";
    } else {
        echo "Erreur lors de la modification : " . mysqli_error($conn);
    }
} else {
    echo "Erreur : Le formulaire n'a pas été soumis.";
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>
