<footer>
    <div class="section-footer">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <div class="navigation-footer">
                        <a href="index.php"><img src="images/logotipo-footer.png" alt="buscamei"></a>
                        <div class="navbar-footer">
                            <h3 class="title-footer">Trova</h3>
                            <ul class="menu-footer">
                                <li><a href="#">Chi siamo</a></li>
                                <li><a href="#">Domande frequenti – FAQ</a></li>
                            </ul>
                        </div>
                        <div class="navbar-footer">
                            <h3 class="title-footer">Transparenza</h3>
                            <ul class="menu-footer">
                                <li><a href="#">Termini & Condizioni</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="navigation-contact">
                        <h3 class="title-footer">Non trovi quello che stai cercando?</h3>
                        <ul class="menu-footer">
                            <li><a href="#" class="mailto">scrivi@buscamei.it</a></li>
                            <li><a href="" class="btn-social menssenger"> <img src="images/messenger.svg" alt=""> messenger</a></li>
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
                        <li>@ 2021 buscamei</li>
                        <li>|</li>
                        <li>DSZHLS90E56Z602Q</li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul class="social-media">
                        <li><img src="images/icon-facebook.png" alt=""></li>
                        <li><img src="images/icon-instagram.png" alt=""></li>
                        <li><img src="images/icon-twitter.png" alt=""></li>
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
