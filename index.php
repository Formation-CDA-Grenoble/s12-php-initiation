<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Bonjour <?php echo $_GET['name'] ?>
    </h1>

    <?php if ($_GET['age'] >= 18): ?>
        <h2>Sous-titre</h2>
        <ul>
            <li>Pouet</li>
            <li>Truc</li>
            <li>Bidule</li>
        </ul>
    <?php else: ?>
        <div>
            Vous n'avez pas accès à ce contenu
        </div>
    <?php endif; ?>

</body>
</html>
