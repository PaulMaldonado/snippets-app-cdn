<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snippets</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="blue">
            <div class="nav-wrapper" v-if="menu === true">
                <a href="index.php" class="brand-logo">Snippets App</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php"><i class="material-icons">home</i></a></li>
                    <li><a href="alta.php"><i class="material-icons">add</i></a></li>
                    <li><a href="index.php?categories=php">PHP</a></li>
                    <li><a href="index.php?categories=css">CSS</a></li>
                    <li><a href="index.php?categories=html5">HTML5</a></li>
                    <li><a href="index.php?categories=vuejs">VUEJS</a></li>
                    <li><a href="index.php?categories=mysql">MYSQL</a></li>
                    <li><a href="../login/logout.php">Cerrar sesión</a></li>
                </ul>
            </div>
        </nav>