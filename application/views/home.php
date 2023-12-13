<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<ul>
<ul>
    <?php if (!empty($produitlist)): ?>
        <?php foreach ($produitlist as $p): ?>
            <li> <?= $p['type'] ?></li>
        <?php endforeach ?>
    <?php else: ?>
        <li>No products found</li>
    <?php endif ?>
</ul>

</ul>
</body>
</html>