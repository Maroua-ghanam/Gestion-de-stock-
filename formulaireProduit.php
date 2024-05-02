<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Stock</title>
    <style>
        body{
            background-color:#f9f9f9;
        }
    </style>
</head>
<body>
    <h1 style="font-style:italic; color: rgb(30, 20, 22); margin-left: 300px;">Formulaire de Stock :</h1>
    <form method="POST" style="font-size: large; margin-top: 100px; margin-left: 300px;" action="Ajout.php"> 
       <label for="Id_Produit">Id_Produit:</label>
       <input type="text" name="Id_Produit" id="Id_Produit" ><br>
       <label for="Prod_Code">Prod_Code:</label>
       <input type="text" name="Prod_Code" id="Prod_Code" required><br>
       <label for="Prod_Designation">Prod_Designation:</label>
       <input type="text" name="Prod_Designation" id="Prod_Designation" required><br>
       <label for="Prod_Prix_A">Prod_Prix_A:</label>
       <input type="text" name="Prod_Prix_A" id="Prod_Prix_A" required><br>
       <label for="Prod_Marge">Prod_Marge:</label>
       <input type="text" name="Prod_Marge" id="Prod_Marge" required><br>
       <label for="Prod_Quantite_S1">Prod_Quantite:</label>
       <input type="number" name="Prod_Quantite_S1" id="Prod_Quantite_S1" required><br>
       <label for="Prod_Seuil">Prod_Seuil:</label>
       <input type="text" name="Prod_Seuil" id="Prod_Seuil" required><br>
       <label for="Id_Fournisseur">Id_Fournisseur:</label>
       <select name="Id_Fournisseur" id="Id_Fournisseur" required>
            <option value="">Choisir un fournisseur</option>
            <?php
            include("connexion.php");
            $sql = "SELECT * FROM fournisseurs";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='".$row["Id_Four"]."'>".$row["Reason_Soc"]."</option>";
            }
            ?>
        </select><br>
       <input type="submit" >
    </form>


</body>
</html>