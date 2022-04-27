<?php include_once('helpers/url.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <!-- css -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css?v=<? echo time(); ?>">
    <title>Cartas Para Julieta</title>
    <link rel="icon" href="<?= $BASE_URL ?>img/logo/favicon.ico" />
    <!-- fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,500;0,600;0,700;1,500;1,700&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top nav-custom">
            <div class="container">
                <a href="<?= $BASE_URL ?>index.php" class="navbar-brand">
                    <img src="<?= $BASE_URL ?>img/logo/logotipo.svg" alt="Cartas para Julieta" width="120">
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#barra">
                    <span class="navbar-toggler-icon"></span>

                </button>


                <div class="collapse navbar-collapse" id="barra">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="<?= $BASE_URL ?>index.php" class="nav-link">Início</a>
                        </li>

                        <li class="navbar-item">
                            <a href="<?= $BASE_URL ?>servicos.php" class="nav-link">Serviços</a>
                
                    </ul>
                </div>
            </div>

        </nav>
    </header>