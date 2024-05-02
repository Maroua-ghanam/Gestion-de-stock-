<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher</title>
    <style>
        body{
            background-color: #f9f9f9;
        }
        
    </style>
</head>
<body>
<form method="POST" action="details.php">
    <h3>Recherche de Produits</h3>
    <label for="Id_Produit">Id_Produit:</label>
    <input type="text" id="Id_Produit" name="Id_Produit" autocomplete="off"><br>
    
    <label for="Prod_Designation">Prod_Designation:</label>
    <input type="text" id="Prod_Designation" name="Prod_Designation" autocomplete="off"><br>
    
    <label for="Id_Fournisseur">Id_Fournisseur:</label>
    <input type="text" id="Id_Fournisseur" name="Id_Fournisseur" autocomplete="off"><br>
    <input type="submit" class="button" name="submit_btn">
    <input type="reset" class="button" name="reset_btn">
</form>

<?php
include("connexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $Id_Produit = $_POST["Id_Produit"];
    $Prod_Designation = $_POST['Prod_Designation'];
    $Id_Fournisseur = $_POST['Id_Fournisseur'];
    
    $sql = "SELECT * FROM table_produits WHERE 1=1";
    if (!empty($Id_Produit)) {
        $sql .= " AND Id_Produit = '$Id_Produit'";
    }
    if (!empty($Prod_Designation)) {
        $sql .= " AND Prod_Designation LIKE '%$Prod_Designation%'";
    }
    if (!empty($Id_Fournisseur)) {
        $sql .= " AND Id_Fournisseur = '$Id_Fournisseur'";
    }
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Résultats de la recherche :</h2>";
        while ($row = $result->fetch_assoc()) {
            echo "Produit trouvé: ";
            echo "Prix du produit: " . $row["Prod_Prix_A"] . ", Marge: " . $row["Prod_Marge"] . ", Quantité: " . $row["Prod_Quantité_St"] . ", Seuil: " . $row["Prod_Seuil"] . "<br>";
        }
    } else {
        echo "Aucun produit trouvé.";
    }
}

$conn->close();
?>


</body>
</html>