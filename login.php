<?php include 'header.php'; ?>
<main>
    <div class="section-login">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="login">
                        <h2>Entrar</h2>
                        <p>Novo por aqui? <a href="cadastro.php">Registre-se</a></p>
                        <?php /*
                        <a href="#" class="btn-google"><img src="images/icon-google.png" alt="Google Login"> Entrar com Google</a>
                        */ ?>

                        <form action="">
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuário:</label>
                                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Digite seu usuário">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail">
                            </div>
                            <a href="#" class="button-orange submit">Entrar</a>
                            <a href="#" class="btn-forget">Esqueceu sua <strong>senha</strong>?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
