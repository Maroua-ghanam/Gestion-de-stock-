<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recuperer</title>
    <style>
        table,tr,td,th{
            border: 1px solid black;
            border-collapse: collapse;
            background-color: white;
        }
        th:hover,
        td:hover {
            background-color: lightgray; 
        }
        body{
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
<form method="post" action="">
        <label for="tri">Trier par:</label>
        <select name="tri" id="tri">
            <option value="" disabled selected>Sélectionner</option>
            <option value="Prod_Code">Code Produit</option>
            <option value="Prod_Prix_A">Prod Prix </option>
            <option value="Prod_Marge">Prod Marge</option>
            <option value="Prod_Quantite_S1	">Prod_Quantite</option>
            <option value="Prod_Seuil">Prod_Seuil</option>
            <option value="Id_Fournisseur">Id_Fournisseur</option>
        </select>
        <input type="submit" value="Trier">
</form>
<?php
include("connexion.php");

$tri = isset($_POST['tri']) ? $_POST['tri'] : 'Id_Fournisseur'; 

$sql = "SELECT * FROM stock ORDER BY $tri"; 

$result = mysqli_query($conn, $sql);




if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th hidden>Id_Produit</th><th>Prod_Code</th><th>Prod_Designation</th><th>Prod_Prix_A</th><th>Prod_Marge</th><th>Prod_Quantite_S1</th><th>Prod_Seuil</th><th>Id_Fournisseur</th><th>supprimer</th><th>modifier</th><th>Détails</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td hidden>".$row["Id_Produit"]."</td><td>".$row["Prod_Code"]."</td><td>".$row["Prod_Designation"]."</td><td>".$row["Prod_Prix_A"]."</td><td>".$row["Prod_Marge"]."</td><td>".$row["Prod_Quantite_S1"]."</td><td>".$row["Prod_Seuil"]."</td><td>".$row["Id_Fournisseur"]."</td>";
       
        echo "<td><form method='post'><input type='hidden' name='Id_Produit' value='".$row["Id_Produit"]."'><button type='submit' name='delete'><img src='pic/supprimerpic.png' alt='supprimer' width='20' height='20'></button></form></td>";
        
        echo "<td><form method='post' action='modifier.php'><input type='hidden' name='idProduit' value='".$row["Id_Produit"]."'><button type='submit' name='edit'><img src='pic/modifierpic.png' alt='modifier' width='20' height='20'></button></form></td>";
        
        echo "<td><form method='post' action='details.php'><input type='hidden' name='Id_Produit' value='".$row["Id_Produit"]."'><button type='submit' name='details'><img src='pic/details1.png' alt='details' width='20' height='20'></button></form></td></tr>";


    }
    echo "</table>";
} else {
    echo "0 résultats";
}


if(isset($_POST['delete'])) {
    $idProduit = $_POST['Id_Produit'];
    $sql = "DELETE FROM stock WHERE Id_Produit = '$idProduit'";
    mysqli_query($conn, $sql);
    echo "<meta http-equiv='refresh' content='0'>";
}


?>



   
</body>
</html>