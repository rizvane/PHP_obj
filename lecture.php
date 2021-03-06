<?php

$lectures = require 'lectures-collection.php';

$lectureKey = filter_input(INPUT_GET, 'title');
if (!isset($lecture[$lectureKey]))
    throw new RuntimeException('Unable to find the given lecture');

$lecture = $lectures[$lectureKey];
$pageTitle = "Lecture {$lectureKey}";

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle ?></title>
</head>
<body>
<h1><?= $pageTitle ?></h1>
<div><?= $lecture['description'] ?></div>
</body>
</html>
