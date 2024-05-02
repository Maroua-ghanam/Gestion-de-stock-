<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remerciements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9; 
            color: #333; 
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            font-weight: bold;
            margin-top: 100px;
            color: black; 
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 50px;
        }

        
        form {
            display: inline-block;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

       
    </style>
</head>
<body>
    <h1>Remerciements</h1>
    <p>J'espère que vous avez apprécié notre service. Merci de nous avoir fourni vos notes sur le formulaire ci-dessous.</p>
    
    
    <form action="https://api.web3forms.com/submit" method="POST">
    <input type="hidden" name="access_key" value="ee584244-e90d-448d-a919-213b39eb2fcc">
    <label style="color: white;" for="email">Gmail :</label>
    <input type="text" name="email" id="email" placeholder="Entrez votre adresse Gmail" required/> 
    <br>
    <label style="color: white;" for="message">Message :</label>
    <textarea name="message" id="message" placeholder="Entrez votre message ici" rows="4" cols="50"></textarea>
    <button type="submit">Send</button>
</form>

</body>
</html>
