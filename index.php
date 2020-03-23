<?php
    $films = [
        [ 
            'title' => 'En avant',
            'age' => 16
        ],
        [ 
            'title' => 'Sonic',
            'age' => 12
        ],
        [ 
            'title' => 'Frozen 2',
            'age' => 8
        ],
        [ 
            'title' => 'Le Roi Lion',
            'age' => 18
        ],
        [ 
            'title' => 'Incognitos',
            'age' => 12
        ],
    ];
?>


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

    <h2>Liste des films:</h2>
    <ul>
        <?php foreach($films as $film): ?>
            <?php if ($film['age'] <= $_GET['age']): ?>
                <li>
                    <?php echo $film['title'] ?>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

</body>
</html>
