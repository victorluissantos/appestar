<?php
// Configurações da página
$page_title = isset($page_title) ? $page_title : 'appEstar - Estacionamento Digital Inteligente';
$page_description = isset($page_description) ? $page_description : 'App oficial da Prefeitura de Curitiba para estacionamento rotativo digital';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    
    <!-- Bootstrap CSS local -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons local -->
    <link href="public/css/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS customizado -->
    <link href="public/css/style.css" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="public/icon/app_icon_512x512.png">
    <link rel="apple-touch-icon" href="public/icon/app_icon_512x512.png">
</head>
<body>
    <!-- Header/Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">
                <img src="public/icon/app_icon.png" alt="appEstar Logo" height="40" class="me-2">
                appEstar
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#inicio">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#vantagens">Vantagens</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#download">Download</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light ms-2" href="index.php#download">Baixar App</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 