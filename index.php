<?php include 'header.php'; ?>
<main>
    <section class="hero">
        <div class="container max-width-">
            <div class="row">
                <div class="col-md-4">
                    <div class="box-hero">
                        <h2>Mais de 400 MEI,s</h2>
                        <p>profissionais de alto nível a sua disposição!</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <form method="get" action="buscar-profissional.php" class="form-hero">
                        <label for="keyword">Pesquise o profissional que você precisa!</label>
                        <input type="text" id="keyword" name="keyword" placeholder="Digite a profissão ou serviço que você está buscando">
                        <button type="submit" class="button-orange">Pesquisar</button>
                    </form>
                    <div class="termo-uso">
                        <span>Ao pesquisar um profissional, você concorda com o </span>
                        <a href="termos.php" class="link-termo">Termo de uso</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="profissoes">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Profissões Populares</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="profissoes-list">
                        <a href="buscar-profissional.php?keyword=Eletricista" class="profissao-item">Eletricista</a>
                        <a href="buscar-profissional.php?keyword=Pedreiro" class="profissao-item">Pedreiro</a>
                        <a href="buscar-profissional.php?keyword=Encanador" class="profissao-item">Encanador</a>
                        <a href="buscar-profissional.php?keyword=Jardineiro" class="profissao-item">Jardineiro</a>
                        <a href="buscar-profissional.php?keyword=Doméstico" class="profissao-item">Doméstico</a>
                        <a href="buscar-profissional.php?keyword=Azulejista" class="profissao-item">Azulejista</a>
                        <a href="buscar-profissional.php?keyword=Mecânico" class="profissao-item">Mecânico</a>
                        <a href="buscar-profissional.php?keyword=Chapeador" class="profissao-item">Chapeador</a>
                        <a href="buscar-profissional.php?keyword=Borracheiro" class="profissao-item">Borracheiro</a>
                        <a href="buscar-profissional.php?keyword=Vidraceiro" class="profissao-item">Vidraceiro</a>
                        <a href="buscar-profissional.php?keyword=Metalúrgico" class="profissao-item">Metalúrgico</a>
                        <a href="buscar-profissional.php?keyword=Músico" class="profissao-item">Músico</a>
                    </div>
                    <p class="text-center mt-4 mb-0">
                        <strong>
                            O BuscaMEI conecta você a profissionais MEI que oferecem os serviços que você precisa,
                            ajudando a encontrar o profissional ideal para o trabalho.
                        </strong>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="vantaggi">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Formalize-se como MEI</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="box-vantaggi">
                        <img src="images/icon-cnpj.svg" alt="CNPJ Ativo">
                        <p class="title">CNPJ Ativo</p>
                        <p class="text">Desfrute da cidadania empresarial e ganhe mais credibilidade no mercado, podendo emitir notas fiscais e ter acesso a diversos benefícios.</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="box-vantaggi">
                        <img src="images/icon-nota.svg" alt="Nota Fiscal">
                        <p class="title">Nota Fiscal</p>
                        <p class="text">Regularize suas operações e ofereça segurança aos seus clientes, aumentando a confiança em seus serviços e reduzindo a informalidade.</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="box-vantaggi">
                        <img src="images/icon-inss.svg" alt="INSS">
                        <p class="title">INSS Garantido</p>
                        <p class="text">Garanta sua contribuição previdenciária com todos os benefícios assegurados pela legislação: aposentadoria, auxílio-doença e licença-maternidade.</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="box-vantaggi">
                        <img src="images/icon-credito.svg" alt="Crédito">
                        <p class="title">Acesso a Crédito</p>
                        <p class="text">Amplie suas oportunidades de crescimento com acesso facilitado a linhas de crédito e serviços bancários específicos para Microempreendedores.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="https://www.gov.br/empresas-e-negocios/pt-br/empreendedor" target="_blank" class="button-orange">Formalize-se agora!</a>
                </div>
            </div>
        </div>
    </section>

    <section class="call-action">
        <div class="container">
            <div class="row align-center">
                <div class="col">
                    <img src="images/call-action.png" alt="Profissionais MEI">
                </div>
                <div class="col">
                    <div class="box-call-action">
                        <p class="title"><span>Conectando</span> clientes e profissionais</p>
                        <p class="text">Economize tempo e encontre hoje mesmo o profissional MEI ideal para o serviço que você precisa</p>
                        <a href="buscar-profissional.php" class="button-orange btn-cta">Encontrar profissional</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="rent">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2>Serviços Populares</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="status">Disponível</div>

                        <div class="card-body">
                            <h5 class="type">Construção Civil</h5>
                            <p class="title">Jose Jaime</p>
                            <p class="cnpj">CNPJ: 21.988/0001-00</p>
                            <p class="adress">Zona Norte, São Paulo - SP</p>
                            <p class="description"><strong>Descrição:</strong> Especialidade em construção, aplicação de azulejo, estrutural</p>
                            <div class="contato">
                                <p class="title-contato">Contato</p>
                                <ul class="contato-info">
                                    <li class="phone">45 99846-2423 <a href="https://wa.me/5545998462423" class="whatsapp-icon"><img src="images/whatsapp-icon.svg" alt="WhatsApp"></a></li>
                                    <li class="email">
                                        <a href="mailto:josejaime@email.com">josejaime@email.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="status">Disponível</div>

                        <div class="card-body">
                            <h5 class="type">Construção Civil</h5>
                            <p class="title">Jose Jaime</p>
                            <p class="cnpj">CNPJ: 21.988/0001-00</p>
                            <p class="adress">Zona Oeste, São Paulo - SP</p>
                            <p class="description"><strong>Descrição:</strong> Especialidade em construção, aplicação de azulejo, estrutural</p>
                            <div class="contato">
                                <p class="title-contato">Contato</p>
                                <ul class="contato-info">
                                    <li class="phone">45 99846-2423 <a href="https://wa.me/5545998462423" class="whatsapp-icon"><img src="images/whatsapp-icon.svg" alt="WhatsApp"></a></li>
                                    <li class="email">
                                        <a href="mailto:josejaime@email.com">josejaime@email.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="status">Disponível</div>

                        <div class="card-body">
                            <h5 class="type">Construção Civil</h5>
                            <p class="title">Jose Jaime</p>
                            <p class="cnpj">CNPJ: 21.988/0001-00</p>
                            <p class="adress">Zona Sul, São Paulo - SP</p>
                            <p class="description"><strong>Descrição:</strong> Especialidade em construção, aplicação de azulejo, estrutural</p>
                            <div class="contato">
                                <p class="title-contato">Contato</p>
                                <ul class="contato-info">
                                    <li class="phone">45 99846-2423 <a href="https://wa.me/5545998462423" class="whatsapp-icon"><img src="images/whatsapp-icon.svg" alt="WhatsApp"></a></li>
                                    <li class="email">
                                        <a href="mailto:josejaime@email.com">josejaime@email.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="depoimentos">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2>Depoimentos de clientes satisfeitos</h2>
                    <p class="depoimentos-slogan">Clientes satisfeitos contratam pelo BuscaMEI e recomendam! Experimente você também!</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="depoimento-video">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Depoimento de cliente sobre serviço de eletricista" allowfullscreen></iframe>
                        </div>
                        <div class="depoimento-info">
                            <h4>Ana Silva</h4>
                            <p>Contratou: Eletricista</p>
                            <div class="rating">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="depoimento-video">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/jNQXAC9IVRw" title="Depoimento de cliente sobre serviço de encanador" allowfullscreen></iframe>
                        </div>
                        <div class="depoimento-info">
                            <h4>Carlos Oliveira</h4>
                            <p>Contratou: Encanador</p>
                            <div class="rating">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="depoimento-video">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/zUyH3XhpLTo" title="Depoimento de cliente sobre serviço de pedreiro" allowfullscreen></iframe>
                        </div>
                        <div class="depoimento-info">
                            <h4>Fernanda Santos</h4>
                            <p>Contratou: Pedreiro</p>
                            <div class="rating">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>☆</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>
<?php include 'footer.php'; ?>
