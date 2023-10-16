<!DOCTYPE html>
<html>
<head>
    <title>Liste des catégories</title>
</head>
<body>
    <h1>Liste des catégories</h1>
    <ul>
        <?php foreach ($categories as $category): ?>
            <li><?php echo $category['nom']; ?></li>
            <li><?php echo $category['id_categories']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
