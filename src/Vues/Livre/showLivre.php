<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les livres</title>
</head>
<body>
<?php foreach ($aLivres as $k => $livre) { //parcours un tableau
        $title = $livre->getTitle();
        $author = $livre->getAuthor();
        $id = $livre->getId();
        print("<p>" . $title . ' ' . "<span style='font-weight:bold'>" . $author . "</span>" . ' ' . "<p/>
        <a href='http://localhost/bibliotheque/modify/$id'>Modifier</a>
        <br/>");
    }
    ?>
</body>
</html>