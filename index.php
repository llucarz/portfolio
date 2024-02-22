<?php 
##-- YAML  --##
$data = yaml_parse_file("./yaml/data.yaml");
$head = $data['head']
?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUCARZ Léo</title>
    <meta name="description" content="Portefolio de LUCARZ Léo - Alternant - Technicien chez EasyW3">
    <link rel="shortcut icon" href="./img/favicon.ico?v=1" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/global.css">
    <script src="./js/script.js" defer></script>
</head>

<body>

<?php
##-- INCLUDE  --##
include 'php/1-header.php';
include 'php/2-hero.php';
include 'php/3-about.php';
include 'php/4-formation.php';
include 'php/5-skills.php';
include 'php/6-formation.php';
include 'php/7-contact.php';
include 'php/8-footer.php';
?>

</body>
</html>