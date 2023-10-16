<html>
<head>
    <title>Liste des articles</title>
</head>
<body>
    <h1>Liste des articles</h1>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li><?php echo $post['titre']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

