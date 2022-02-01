<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un livre</title>
</head>
<body>

<?php include("./src/Vues/header.php") ?>

<form action="/bibliotheque/add" method="POST">
    <label for="title">Title :</label>
    <input type="text" name="title" required>

    <label for="resume">Resume :</label>
    <input type="textarea"  name="resume">

    <label for="author">Author :</label>
    <input type="text" name="author" required>

    <label for="editor">Editor</label>
    <input type="text" name="editor" required>

    <label for="isbn">ISBN :</label>
    <input type="number" name="isbn" required>

    <label for="exemplaires">Exemplaires :</label>
    <input type="number" name="exemplaires" required>

    <input type="submit" value="ajouter">
    <input type="button" formaction="./modifyLivre.php" value="Modifier">
    <span type="button"><a href=<?="/modify/".$id->getI()?></a>Modifier</span>
</form>

</body>
<?php  include("./src/Vues/footer.php");?>
</html>    
