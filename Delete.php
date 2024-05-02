<?php
include("connexion.php");

if(isset($_POST['idProduit'])) {
    $idProduit = $_POST['idProduit'];
    $sql = "DELETE FROM stock WHERE Id_Produit = '$idProduit'";
    
    if(mysqli_query($conn, $sql)) {
        echo "Enregistrement supprimé avec succès";
    } else {
        echo "Erreur lors de la suppression de l'enregistrement: " . mysqli_error($conn);
    }
} else {
    echo "ID de produit non fourni";
}
?>
