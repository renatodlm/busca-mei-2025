<footer>
    <div class="section-footer">
        <div class="container">
            <div class="row">
                <div class="navigation-footer">
                    <a href="index.php"><img src="images/logotipo-footer.svg" alt="buscamei"></a>
                    <div class="navbar-footer">
                        <h3 class="title-footer">Institucional</h3>
                        <ul class="menu-footer">
                            <li><a href="como-funciona.php">Como Funciona</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                            <li><a href="politica-privacidade.php">Política de Privacidade</a></li>
                            <li><a href="termos-de-uso.php">Termos de Uso</a></li>
                        </ul>
                    </div>
                    <div class="navbar-footer">
                        <h3 class="title-footer">Central de Ajuda</h3>
                        <p>
                            BuscaMEI</span> é mantida pela <a href="https://aeifi.com.br/" target="_blank">AEIFI</a>
                        </p>
                        <p>
                            Horário de atendimento: <br>Segunda a sexta: 09h às 17h
                        </p>
                    </div>
                    <div class="navigation-contact">
                        <h3 class="title-footer">
                            Pelo whatsApp ou Ligue!
                        </h3>
                        <ul class="menu-footer">
                            <li><a href="mailto:mailaeififoz@gmail.com" class="mailto">mailaeififoz@gmail.com</a></li>
                            <li><a href="https://wa.me/5545998462423" class="btn-social"> <img src="images/messenger.svg" alt=""> (45) 99846-2423</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-copyright">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <ul class="list-copy">
                        <li>© 2025 AEIFI. Todos Direitos Reservados.</li>
                        <li>|</li>
                        <li>CNPJ 17.318.179/0001-22</li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul class="social-media">
                        <li><img src="images/icon-facebook.svg" alt=""></li>
                        <li><img src="images/icon-instagram.svg" alt=""></li>
                        <li><img src="images/icon-linkedin.svg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</footer>

<script>
    $(document).ready(function() {
        $('.owl-first').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false,
                    margin: 20
                }
            }
        })

        $('.owl-schedule-pop').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false,
                    margin: 20
                }
            }
        })
    })
</script>

<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), options)
</script>
</body>

</html>
