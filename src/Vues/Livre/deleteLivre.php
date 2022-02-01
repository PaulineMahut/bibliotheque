<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un livre</title>
</head>
<body>

<form action='<?= "/bibliotheque/delete/$id" ?>' method="POST">
    <label for="title">Title :</label>
    <input type="text" name="title" value="<?= $livre->getTitle() ?>">

    <label for="resume">Resume :</label>
    <input type="textarea"  name="resume" value="<?= $livre->getResume() ?>">

    <label for="author">Author :</label>
    <input type="text" name="author" value="<?= $livre->getAuthor() ?>">

    <label for="editor">Editor :</label>
    <input type="text" name="editor" value="<?= $livre->getEditor() ?>">

    <label for="isbn">ISBN :</label>
    <input type="number" name="isbn" value="<?= $livre->getIsbn() ?>">

    <label for="exemplaires">Exemplaires :</label>
    <input type="number" name="exemplaires" value="<?= $livre->getExemplaires() ?>">

    <input type="submit" value="ajouter">
</form>
    
</body>
</html>