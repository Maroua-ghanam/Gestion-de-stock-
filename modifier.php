<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Produit</title>
</head>
<body>
<?php
include("connexion.php");


if(isset($_POST['edit']) && isset($_POST['idProduit'])) {
    $idProduit = $_POST['idProduit'];

    
    $sql = "SELECT * FROM stock WHERE Id_Produit = '$idProduit'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        ?>
        <h2>Modifier Produit</h2>
        <form method="post" action="modifier_action.php">
            <input type="hidden" name="Id_Produit" value="<?php echo $row['Id_Produit']; ?>">
            Prod_Code: <input type="text" name="Prod_Code" value="<?php echo $row['Prod_Code']; ?>"><br>
            Prod_Designation: <input type="text" name="Prod_Designation" value="<?php echo $row['Prod_Designation']; ?>"><br>
            Prod_Prix_A: <input type="text" name="Prod_Prix_A" value="<?php echo $row['Prod_Prix_A']; ?>"><br>
            Prod_Marge: <input type="text" name="Prod_Marge" value="<?php echo $row['Prod_Marge']; ?>"><br>
            Prod_Quantite_S1: <input type="text" name="Prod_Quantite_S1" value="<?php echo $row['Prod_Quantite_S1']; ?>"><br>
            Prod_Seuil: <input type="text" name="Prod_Seuil" value="<?php echo $row['Prod_Seuil']; ?>"><br>
            Id_Fournisseur: <input type="text" name="Id_Fournisseur" value="<?php echo $row['Id_Fournisseur']; ?>"><br>
            <input type="submit" value="Modifier">
        </form>
        <?php
    } else {
        echo "Produit non trouvé.";
    }
} else {
    echo "Aucun produit sélectionné pour la modification.";
}

?>
</body>
</html>
