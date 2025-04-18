<?php include 'header.php'; ?>
<main>
    <section class="buscar-profissional">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Profissionais MEI</h1>
                    <p class="text">Encontre profissionais MEI qualificados para o serviço que você precisa. Veja perfis, especialidades e entre em contato diretamente.</p>
                </div>
                <form method="get" action="buscar-profissional.php">
                    <div class="form-profissional">
                        <div class="form-profissional-input">
                            <input type="text" name="keyword" class="input-searchbar" placeholder="Digite a profissão ou serviço que procura">
                        </div>
                        <div class="form-profissional-button">
                            <button type="submit" class="btn-veddimappa">Buscar Profissionais</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="rent">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <ul class="add-filter">
                        <li>
                            <a type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Filtros Avançados
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-3 mt-auto">
                    <form method="get" action="buscar-profissional.php">
                        <select name="ordenacao" id="ordenacao" class="ordena-house" onchange="this.form.submit()">
                            <option value="recentes">Ordenar por mais recentes</option>
                            <option value="avaliacao">Ordenar por avaliação</option>
                            <option value="alfabetica">Ordenar por ordem alfabética</option>
                            <option value="relevancia">Ordenar por relevância</option>
                        </select>

                        <?php if (isset($_GET['keyword'])): ?>
                            <input type="hidden" name="keyword" value="<?php echo htmlspecialchars($_GET['keyword']); ?>">
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row bt-row">
                <div class="col-4">
                    <a href="interna-imovel.php" class="link-card">
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
                    </a>
                </div>

                <div class="col-4">
                    <a href="interna-imovel.php" class="link-card">
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
                    </a>
                </div>

                <div class="col-4">
                    <a href="interna-imovel.php" class="link-card">
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
                    </a>
                </div>
            </div>

            <div class="row bt-row">
                <div class="col-4">
                    <a href="interna-imovel.php" class="link-card">
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
                    </a>
                </div>
                <div class="col-4">
                    <a href="interna-imovel.php" class="link-card">
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
                    </a>
                </div>
                <div class="col-4">
                    <a href="interna-imovel.php" class="link-card">
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
                    </a>
                </div>
            </div>

            <div class="row bt-row">
                <div class="col-4">
                    <a href="interna-imovel.php" class="link-card">
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
                    </a>
                </div>

                <div class="col-4">
                    <a href="interna-imovel.php" class="link-card">
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
                    </a>
                </div>

                <div class="col-4">
                    <a href="interna-imovel.php" class="link-card">
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
                    </a>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Modal de Filtros Avançados -->
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

                    <div class="row-modal">
                        <h3 class="title">Ordenação:</h3>
                        <select name="ordenacao" class="form-select">
                            <option value="recentes">Mais recentes</option>
                            <option value="avaliacao">Melhor avaliação</option>
                            <option value="alfabetica">Ordem alfabética</option>
                            <option value="relevancia">Relevância</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-transparent" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="button-orange">Buscar Profissionais</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
