<?php include 'header.php'; ?>
<main>
    <div class="section-funziona">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Como Funciona</h1>
                    <p>O BuscaMEI é uma plataforma que conecta clientes a profissionais MEI (Microempreendedores Individuais) qualificados. Nosso objetivo é facilitar o acesso a serviços de qualidade e ajudar os MEIs a aumentarem sua visibilidade no mercado.</p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Cliente</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profissional MEI</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <ul>
                                <li>
                                    <img class="box-img" src="images/encontre-rapidamente.svg" alt="Encontre Rapidamente">
                                    <div class="box-text">
                                        <h2>Encontre Rapidamente</h2>
                                        <p>Busque pelo profissional ideal utilizando nossos filtros avançados. Visualize fotos, descrições detalhadas e informações sobre os serviços oferecidos pelos MEIs cadastrados.</p>
                                    </div>
                                </li>
                                <li>
                                    <img class="box-img" src="images/entre-em-contato.svg" alt="Entre em Contato">
                                    <div class="box-text">
                                        <h2>Entre em Contato</h2>
                                        <p>Encontrou o profissional que procurava? Entre em contato diretamente com ele através dos dados disponibilizados no perfil para solicitar orçamentos ou tirar dúvidas sobre o serviço.</p>
                                    </div>
                                </li>
                                <li>
                                    <img class="box-img" src="images/contrate-servico.svg" alt="Contrate o Serviço">
                                    <div class="box-text">
                                        <h2>Contrate o Serviço</h2>
                                        <p>Negocie diretamente com o profissional MEI os detalhes do serviço, prazos e valores. Estabeleça um acordo que atenda às necessidades de ambas as partes.</p>
                                    </div>
                                </li>
                                <li>
                                    <img class="box-img" src="images/pagamento-seguro.svg" alt="Pagamento Seguro">
                                    <div class="box-text">
                                        <h2>Pagamento Seguro</h2>
                                        <p>Com o BuscaMEI você não paga nenhuma taxa ou comissão. A negociação financeira acontece diretamente entre você e o profissional contratado.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <ul>
                                <li>
                                    <img class="box-img" src="images/cadastro-gratuito.svg" alt="Cadastro Gratuito">
                                    <div class="box-text">
                                        <h2>Cadastro Gratuito</h2>
                                        <p>Insira gratuitamente seu perfil profissional em menos de 10 minutos. Preencha todas as informações sobre seus serviços, especialidades e inclua fotos que mostrem seu trabalho.</p>
                                    </div>
                                </li>
                                <li>
                                    <img class="box-img" src="images/receba-contatos.svg" alt="Receba Contatos">
                                    <div class="box-text">
                                        <h2>Receba Contatos</h2>
                                        <p>Clientes interessados em seus serviços entrarão em contato diretamente com você através dos dados disponibilizados em seu perfil. Você terá autonomia para negociar valores e prazos.</p>
                                    </div>
                                </li>
                                <li>
                                    <img class="box-img" src="images/emita-nota-fiscal.svg" alt="Emita Nota Fiscal">
                                    <div class="box-text">
                                        <h2>Emita Nota Fiscal</h2>
                                        <p>Como MEI, você pode formalizar seus serviços emitindo nota fiscal, garantindo segurança para você e seus clientes, além de contribuir com seus benefícios previdenciários.</p>
                                    </div>
                                </li>
                            </ul>
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
