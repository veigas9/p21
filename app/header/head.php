<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<script src="assets/js/jquery.js" type="text/javascript"></script>
		<script src="assets/js/index.js" type="text/javascript"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css" media="screen" />
		<title>Controle de Torcedores</title>
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <!--Fonte Lato-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <!--bootstrap-icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous">
        </script>
	</head>
	<body>
        <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg fixed-top bg-primary-color" id="navbar">
        <div class="container py-3">
            <p class="navbar-brand">
                <i class="bi bi-globe"></i>
                <span>CONTROLE DE TORCEDORES</span>
            </p>
            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link primary-color active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="./listaTorcedores.php" class="nav-link primary-color">Lista Torcedores</a>
                    </li>
                </ul>
            </div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a id="envia_email" class="btn btn-primary" role="button">DISPARAR EMAILS</a>
                    </li>
                </ul>
                <div id="resposta_email" class="alert alert-success" style="display: none;"></div>
        </div>
    </nav>
