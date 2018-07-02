<?php
$title = 'Lectures';
$lectures = require 'lectures-collection.php'
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>
<h1><?= $title ?></h1>

<ul>
    <?php foreach ($lectures as $lectureName => $lectureDetails): ?>
        <li>
            <a href="lecture.php?title="<?= $lectureName ?>">
            <?= $lectureDetails['title'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
