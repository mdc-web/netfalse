<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>netfalse</title>
</head>
<body>
    <form method="POST">

    <label>Titre:</label><br>
    <input type="text" name="titre"><br>

    <label>Déscription:</label><br>
    <textarea name="description">
            It was a dark and stormy night...
    </textarea><br>

    <label>Duration:</label><br>
    <input type="text" name="duration"><br>

    <label for="file">Fichier</label>
    <input type="file" name="file"><br>

    <input type="checkbox" id="categorie1" name="categorie1" value="Action">
    <label for="categorie1">Action</label><br>
    <input type="checkbox" id="categorie2" name="categorie2" value="Histoire">
    <label for="categorie2">Histoire</label><br>
    <input type="checkbox" id="categorie3" name="categorie3" value="Animé">
    <label for="categorie3">Animé</label><br>
    <input type="checkbox" id="categorie4" name="categorie4" value="Syfy">
    <label for="categorie4">Syfy</label>
    </form>
</body>
</html>