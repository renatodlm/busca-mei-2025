<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BuscaMEI - Conectando clientes a profissionais MEI</title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon    /favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link rel="preload" href="assets/fonts/DMSerifDisplay-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="assets/fonts/Roboto-Regular.woff2" as="font" type="font/woff2" crossorigin>


    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <a href="index.php"><img src="images/logotipo.svg" class="logo" alt="buscamei"></a>
                </div>
                <div class="col-md-10">

                    <div class="navbar">
                        <ul class="nav menu">
                            <a href="buscar-profissional.php">Buscar Profissional</a>
                            <a href="como-funciona.php">Como Funciona</a>
                            <a href="faq.php">Dúvidas frequentes</a>
                            <a href="contato.php">Contato</a>
                        </ul>

                        <!-- Botão de Busca -->
                        <a href="#" class="button-search" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Buscar
                        </a>

                        <a href="#" class="button-orange">Seja um profissional</a>
                        <a href="login.php" class="button-transparent">Entrar</a>

                        <?php /* ?>
                        <div class="language">
                            <div class="arrow"></div>
                            <div class="flag"></div>
                        </div>
                        <?php */ ?>
                    </div>

                </div>

            </div>
        </div>
    </header>
