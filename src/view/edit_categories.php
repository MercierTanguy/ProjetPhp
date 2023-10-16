<!DOCTYPE html>
<html>
<head>
    <title>Modifier la catégorie</title>
</head>
<body>
    <h1>Modifier la catégorie</h1>
    <form method="post" action="localhost:8000/?p=update_category&id=<?php echo $category['id_categories']; ?>">
        <label for="name">Nouveau nom de catégorie:</label>
        <input type="text" name="name" id="name" value="<?php echo $category['nom']; ?>">
        <input type="submit" value="Mettre à jour">
    </form>
</body>
</html>
