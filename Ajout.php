<?php
include("connexion.php");

$Id_Produit = $_POST["Id_Produit"];
$Prod_Code = $_POST["Prod_Code"];
$Prod_Designation = $_POST["Prod_Designation"];
$Prod_Prix_A = $_POST["Prod_Prix_A"];
$Prod_Marge = $_POST["Prod_Marge"];
$Prod_Quantite_S1 = $_POST["Prod_Quantite_S1"];
$Prod_Seuil = $_POST["Prod_Seuil"];
$Id_Fournisseur = $_POST["Id_Fournisseur"];

$sql = "INSERT INTO `stock` (`Id_Produit`, `Prod_Code`, `Prod_Designation`, `Prod_Prix_A`, `Prod_Marge`, `Prod_Quantite_S1`, `Prod_Seuil`, `Id_Fournisseur`) 
VALUES ('$Id_Produit', '$Prod_Code', '$Prod_Designation', '$Prod_Prix_A', '$Prod_Marge','$Prod_Quantite_S1', '$Prod_Seuil', '$Id_Fournisseur')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Nouvel enregistrement créé avec succès";
} else {
    echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
