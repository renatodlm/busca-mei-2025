<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BuscaMEI - Conectando clientes a profissionais MEI</title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
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

    <style>
        @media (max-width: 991px) {
            .desktop-menu {
                display: none;
            }

            .mobile-menu-toggler {
                display: block;
            }

            .navbar-collapse {
                margin-top: 15px;
            }

            .navbar-nav a {
                padding: 10px 0;
                display: block;
                border-bottom: 1px solid #f1f1f1;
            }

            .mobile-buttons {
                margin-top: 15px;
                display: flex;
                flex-direction: column;
                gap: 10px;
            }

            .mobile-buttons a {
                width: 100%;
                text-align: center;
            }
        }

        @media (min-width: 992px) {
            .desktop-menu {
                display: flex;
            }

            .mobile-menu-toggler {
                display: none;
            }

            .navbar-collapse.collapse {
                display: none !important;
            }
        }

        .navbar {
            padding: 15px 0;
        }

        .mobile-menu-toggler {
            border: none;
            background: transparent;
            font-size: 24px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
            transition: all 0.3s ease;
        }

        .mobile-menu-toggler:focus {
            outline: none;
        }

        .mobile-menu-toggler.active {
            transform: rotate(90deg);
        }

        .navbar-collapse a {
            color: #245ba7;
            text-decoration: none;
            font-weight: 500;
        }

        .navbar-collapse a.button-orange {
            color: white;
        }

        .navbar-collapse {
            max-height: 0;
            overflow: hidden;
        }

        .navbar-collapse.show {
            max-height: 500px;
        }

        .navbar-collapse.collapsing {
            max-height: 0;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6 col-md-2">
                    <a href="index.php"><img src="images/logotipo.svg" class="logo" alt="buscamei"></a>
                </div>
                <div class="col-6 col-md-10 d-flex justify-content-end">

                    <div class="navbar desktop-menu">
                        <ul class="nav menu">
                            <a href="index.php">Home</a>
                            <a href="buscar-profissional.php">Buscar Profissional</a>
                            <a href="como-funciona.php">Como Funciona</a>
                            <a href="faq.php">Dúvidas frequentes</a>
                        </ul>

                        <a href="cadastro.php" class="button-orange">Seja um profissional</a>
                        <a href="login.php" class="button-transparent">Entrar</a>
                    </div>

                    <button class="mobile-menu-toggler" type="button" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 12H21" stroke="#245ba7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3 6H21" stroke="#245ba7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3 18H21" stroke="#245ba7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="navbarMobile">
                <ul class="navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="buscar-profissional.php">Buscar Profissional</a></li>
                    <li><a href="como-funciona.php">Como Funciona</a></li>
                    <li><a href="faq.php">Dúvidas frequentes</a></li>
                </ul>
                <div class="mobile-buttons">
                    <a href="cadastro.php" class="button-orange">Seja um profissional</a>
                    <a href="login.php" class="button-transparent">Entrar</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu Mobile Script -->
    <script src="assets/js/menu.js"></script>
</body>

</html>
