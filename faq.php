<?php include 'header.php'; ?>
<main>
    <div class="section-faq">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Perguntas Frequentes – FAQ</h1>
                    <p>Encontre respostas para as principais dúvidas sobre o BuscaMEI, tanto para clientes que buscam serviços quanto para profissionais MEI que desejam se cadastrar na plataforma.</p>

                    <div class="accordion accodion-faq" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    O que é o BuscaMEI?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>O BuscaMEI é uma plataforma que conecta clientes a profissionais MEI (Microempreendedores Individuais) qualificados. Nosso objetivo é facilitar o acesso a serviços de qualidade e ajudar os MEIs a aumentarem sua visibilidade no mercado.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Como posso me cadastrar como profissional MEI?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Para se cadastrar como profissional MEI no BuscaMEI, você deve:</p>
                                    <ol>
                                        <li>Possuir CNPJ ativo como Microempreendedor Individual</li>
                                        <li>Acessar nossa página de cadastro</li>
                                        <li>Preencher o formulário com seus dados pessoais e profissionais</li>
                                        <li>Adicionar descrição detalhada dos serviços que oferece</li>
                                        <li>Incluir fotos de seus trabalhos (opcional, mas recomendado)</li>
                                        <li>Aguardar a validação do seu cadastro</li>
                                    </ol>
                                    <p>O cadastro é totalmente gratuito e leva menos de 10 minutos para ser concluído.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Preciso pagar alguma taxa para utilizar o BuscaMEI?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Não, o BuscaMEI não cobra nenhuma taxa ou comissão, tanto para clientes quanto para profissionais MEI. Nossa plataforma é totalmente gratuita.</p>
                                    <p>A negociação de valores pelos serviços é feita diretamente entre o cliente e o profissional, sem nossa intermediação financeira.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Como faço para encontrar um profissional MEI?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Para encontrar um profissional MEI no BuscaMEI, basta:</p>
                                    <ol>
                                        <li>Acessar a página inicial do BuscaMEI</li>
                                        <li>Utilizar a barra de pesquisa para buscar pelo serviço desejado</li>
                                        <li>Aplicar filtros como localização e categoria de serviço, se necessário</li>
                                        <li>Analisar os perfis dos profissionais nos resultados da busca</li>
                                        <li>Entrar em contato diretamente com o profissional escolhido através dos dados disponibilizados em seu perfil</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Como me formalizar como MEI?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Para se formalizar como Microempreendedor Individual (MEI), você deve:</p>
                                    <ol>
                                        <li>Acessar o Portal do Empreendedor (www.gov.br/empresas-e-negocios/pt-br/empreendedor)</li>
                                        <li>Clicar em "Quero ser MEI"</li>
                                        <li>Seguir o passo a passo solicitado no portal</li>
                                        <li>Preencher os dados solicitados</li>
                                        <li>Finalizar o cadastro</li>
                                    </ol>
                                    <p>A formalização como MEI é gratuita e traz diversos benefícios como CNPJ ativo, possibilidade de emitir nota fiscal, contribuição ao INSS e acesso a crédito facilitado.</p>
                                    <a href="#" class="btn-download"><img src="images/icon-download.png" alt=""> Guia Completo do MEI</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-filtra">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Busca de Profissionais</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="get" action="buscar-profissional.php">
                <div class="modal-body">
                    <div class="row-modal">
                        <h3 class="title">Localização</h3>
                        <ul class="group-form">
                            <li>
                                <label for="cidade">Cidade:</label>
                                <input type="text" id="cidade" name="cidade">
                            </li>
                            <li>
                                <label for="estado">Estado:</label>
                                <input type="text" id="estado" name="estado">
                            </li>
                        </ul>
                    </div>

                    <div class="row-modal">
                        <h3 class="title">Disponibilidade:</h3>
                        <input type="radio" class="btn-check" name="disponibilidade" id="option1" value="imediata" autocomplete="off" checked>
                        <label class="btn btn-filtra active" for="option1">Imediata</label>

                        <input type="radio" class="btn-check" name="disponibilidade" id="option2" value="7dias" autocomplete="off">
                        <label class="btn btn-filtra" for="option2">Próximos 7 dias</label>

                        <input type="radio" class="btn-check" name="disponibilidade" id="option3" value="30dias" autocomplete="off">
                        <label class="btn btn-filtra" for="option3">Próximos 30 dias</label>
                    </div>

                    <div class="row-modal">
                        <h3 class="title">Categoria de Serviço:</h3>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="categoria[]" value="construcao" checked>
                            <label class="form-check-label" for="inlineCheckbox1">Construção Civil</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="categoria[]" value="manutencao">
                            <label class="form-check-label" for="inlineCheckbox2">Manutenção Residencial</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="categoria[]" value="automotivo">
                            <label class="form-check-label" for="inlineCheckbox3">Serviços Automotivos</label>
                        </div>
                    </div>

                    <div class="row-modal">
                        <h3 class="title">Palavra-chave:</h3>
                        <input type="text" id="keyword" name="keyword" placeholder="Digite o serviço ou profissão que procura">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Buscar Profissionais</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
