<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Produit</title>
    <style>
        body{
            background-color:#f9f9f9 ;
        }
        
        .container {
            margin: 50px;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            background-color: white;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th:hover,
        td:hover {
            background-color: lightgray; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Détails du Produit</h2>
        <?php
        include("connexion.php");
        
        
        if(isset($_POST['Id_Produit'])) {
            $Id_Produit = $_POST['Id_Produit'];

            
            $sql = "SELECT * FROM stock WHERE Id_Produit = '$Id_Produit'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                
                echo "<table>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><th>Id_Produit</th><td>".$row["Id_Produit"]."</td></tr>";
                    echo "<tr><th>Produit</th><td>".$row["Prod_Code"]."</td></tr>";
                    echo "<tr><th>Désignation</th><td>".$row["Prod_Designation"]."</td></tr>";
                    echo "<tr><th>Prix</th><td>".$row["Prod_Prix_A"]."</td></tr>";
                    echo "<tr><th>Marge</th><td>".$row["Prod_Marge"]."</td></tr>";
                    echo "<tr><th>Quantité</th><td>".$row["Prod_Quantite_S1"]."</td></tr>";
                    echo "<tr><th>Seuil</th><td>".$row["Prod_Seuil"]."</td></tr>";
                    echo "<tr><th>Fournisseur</th><td>".$row["Id_Fournisseur"]."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "Aucun résultat trouvé pour cet ID de produit.";
            }
        } else {
            echo "ID du produit non spécifié.";
        }
        ?>
    </div>
</body>
</html>
