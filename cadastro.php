<?php include 'header.php'; ?>
<main>
    <div class="section-login">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cadastro">
                        <h2>Cadastro de Profissional MEI</h2>
                        <p>Já possui uma conta? <a href="login.php">Entrar</a></p>

                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nome" class="form-label">Nome completo:</label>
                                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome completo" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="usuario" class="form-label">Usuário:</label>
                                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Digite seu usuário" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-mail:</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="telefone" class="form-label">Telefone/WhatsApp:</label>
                                        <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="(00) 00000-0000" required>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <h3>Dados Profissionais</h3>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="cnpj" class="form-label">CNPJ:</label>
                                        <input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="00.000.000/0000-00" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="categoria" class="form-label">Categoria de Serviço:</label>
                                        <select class="form-select" name="categoria" id="categoria" required>
                                            <option value="">Selecione uma categoria</option>
                                            <option value="construcao">Construção Civil</option>
                                            <option value="manutencao">Manutenção Residencial</option>
                                            <option value="automotivo">Serviços Automotivos</option>
                                            <option value="eletricista">Eletricista</option>
                                            <option value="pedreiro">Pedreiro</option>
                                            <option value="encanador">Encanador</option>
                                            <option value="jardineiro">Jardineiro</option>
                                            <option value="domestico">Doméstico</option>
                                            <option value="azulejista">Azulejista</option>
                                            <option value="mecanico">Mecânico</option>
                                            <option value="chapeador">Chapeador</option>
                                            <option value="borracheiro">Borracheiro</option>
                                            <option value="vidraceiro">Vidraceiro</option>
                                            <option value="metalurgico">Metalúrgico</option>
                                            <option value="musico">Músico</option>
                                            <option value="instrutor">Instrutor</option>
                                            <option value="professor">Professor</option>
                                            <option value="esteticista">Esteticista</option>
                                            <option value="cabelereira">Cabeleireira</option>
                                            <option value="manicure">Manicure</option>
                                            <option value="barbeiro">Barbeiro</option>
                                            <option value="outros">Outros</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição dos Serviços:</label>
                                <textarea class="form-control" name="descricao" id="descricao" rows="3" placeholder="Descreva suas especialidades e serviços oferecidos" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="endereco" class="form-label">Endereço:</label>
                                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua, número" required>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="bairro" class="form-label">Bairro/Zona:</label>
                                        <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Ex: Zona Norte" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="cidade" class="form-label">Cidade:</label>
                                        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Sua cidade" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="estado" class="form-label">Estado:</label>
                                        <input type="text" class="form-control" name="estado" id="estado" placeholder="UF" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Disponibilidade:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="disponibilidade" id="disponibilidade1" value="imediata" checked>
                                    <label class="form-check-label" for="disponibilidade1">
                                        Imediata
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="disponibilidade" id="disponibilidade2" value="7dias">
                                    <label class="form-check-label" for="disponibilidade2">
                                        Próximos 7 dias
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="disponibilidade" id="disponibilidade3" value="30dias">
                                    <label class="form-check-label" for="disponibilidade3">
                                        Próximos 30 dias
                                    </label>
                                </div>
                            </div>

                            <hr>
                            <h3>Acesso à Conta</h3>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="senha" class="form-label">Senha:</label>
                                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="confirmar_senha" class="form-label">Confirmar senha:</label>
                                        <input type="password" class="form-control" name="confirmar_senha" id="confirmar_senha" placeholder="Confirme sua senha" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5 form-check">
                                <input type="checkbox" class="form-check-input" id="termos" name="termos" required>
                                <label class="form-check-label" for="termos">Concordo com os <a href="termos.php" target="_blank">termos de uso</a> e <a href="privacidade.php" target="_blank  ">política de privacidade</a></label>
                            </div>

                            <button type="submit" class="button-orange submit">Cadastrar Profissional</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
