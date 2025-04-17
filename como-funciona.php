<?php include 'header.php'; ?>
<main>
    <div class="section-funziona">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Como funziona</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper turpis sit amet eros euismod tincidunt. Aliquam risus sem, suscipit non turpis id, auctor tempor felis. In hac habitasse platea dictumst. Quisque maximus facilisis scelerisque. Aenean lobortis convallis mi, vel aliquet arcu rhoncus sit amet. Vivamus maximus metus quis quam egestas consectetur.</p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Inquilino</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Proprietário</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <ul>
                                <li>
                                    <img src="images/trova.png" alt="Trova Subito">
                                    <div class="box-text">
                                        <h2>Trova Subito</h2>
                                        <p>Cerca la casa ideale utilizzando i nostri filtri avanzati, le foto e le descrizioni dettagliate degli immobili piú interessanti per te.
                                            Fai attenzione alle regole delle case.</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/visita.png" alt="Visita">
                                    <div class="box-text">
                                        <h2>Visita</h2>
                                        <p>Hai trovato quello che ti piace?
                                            prenota online una visita per conoscere di persona o virtualmente il tuo futuro immobile.</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/affita.png" alt="Affita">
                                    <div class="box-text">
                                        <h2>Affita</h2>
                                        <p>Fai una proposta al proprietario e dopo l'accetazione, il contratto sarà firmato online delle entrambi parte.
                                            Adesso rilassati e prendi le chiavi del tuo nuovo immobile con il proprietario.</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/pagamento.png" alt="Pagamento">
                                    <div class="box-text">
                                        <h2>Pagamento</h2>
                                        <p>Con l'buscamei non pagherai nessuna tassa o comissione.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <ul>
                                <li>
                                    <img src="images/annunci-gratis.png" alt="Trova Subito">
                                    <div class="box-text">
                                        <h2>Annunci Gratis</h2>
                                        <p>Inserisci gratis l'annuncio del tuo immobile, ci vogliano meno di 10 minuti.
                                            Metti a disposizione tutte le informazione su immobile come i dettagli, regole e foto attraenti.</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/proposte.png" alt="Visita">
                                    <div class="box-text">
                                        <h2>Monitra Visite e Proposte</h2>
                                        <p>inserisci tutte le tue disponibilità su calendario online nella piattaforma. Ma stai sereno che ti ricordiamo ogni appuntamento.
                                            Può ricevere le visite in loco oppure offrire la possibilità di una visita virtule attraverso il tuo smartphone. Poi ricevi le proposte e scegli tu chi entrerà nel tuo immobile.</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/contrato.png" alt="Affita">
                                    <div class="box-text">
                                        <h2>Contrato</h2>
                                        <p>ci pensiamo noi sulle pratiche legali. Il contratto sarà firmato delle entrambi parte e registrato tutto online.</p>
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
                <h5 class="modal-title" id="exampleModalLabel">Filtra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row-modal">
                    <h3 class="title">Prezzo</h3>
                    <ul class="group-form">
                        <li>
                            <label for="">Prezzo min:</label>
                            <input type="text">
                        </li>
                        <li>
                            <label for="">Prezzo min:</label>
                            <input type="text">
                        </li>
                    </ul>



                </div>


                <div class="row-modal">
                    <h3 class="title">Disponibilitá:</h3>
                    <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                    <label class="btn btn-filtra active" for="option1">Within 30 days</label>

                    <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                    <label class="btn btn-filtra" for="option2">Within 60 days</label>

                    <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off">
                    <label class="btn btn-filtra" for="option3">Within 60 days</label>
                </div>

                <div class="row-modal">
                    <h3 class="title">Tipologia:</h3>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Loft</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Bilocale</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                        <label class="form-check-label" for="inlineCheckbox3">Triclocale</label>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
