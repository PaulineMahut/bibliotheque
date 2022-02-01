<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une note</title>
</head>
<body>

<form action="/bibliotheque/note" method="POST">
    <label for="note">Note :</label>
    <input type="number" name="note">

    <label for="comments">Commentaire :</label>
    <input type="textarea" name="comments">

    <input type="submit" value="noter">
</form>

    
</body>
</html>