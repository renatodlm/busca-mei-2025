
<?php include 'header.php';?>
<main>
  <div class="section-faq">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Domande Frequenti – FAQ</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper turpis sit amet eros euismod tincidunt. Aliquam risus sem, suscipit non turpis id, auctor tempor felis. In hac habitasse platea dictumst. Quisque maximus facilisis scelerisque. Aenean lobortis convallis mi, vel aliquet arcu rhoncus sit amet. Vivamus maximus metus quis quam egestas consectetur.</p>

          <div class="accordion accodion-faq" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  Devo portare qualche documento nel giorno della visita?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Nel giorno della visita, chiediamo di portare un documento originale con foto. Se sei straniero/a, porta con te il tuo passaporto o permesso di soggiorno .
                  Questo documento dovrai presentare al proprietario.</p>

                  <p>Consigliamo anche la nostra check list che ti aiuterà durante la visita. Ricordati di osservare e testare insieme al proprietario i <strong>seguenti dettagli.</strong></p>

                  <a href="" class="btn-download"><img src="images/icon-download.png" alt=""> Scarias</a>

                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Dove confermo l’indirizzo della mia visita?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Ho inserito un annuncio ma non lo vedo sul portale. Cosa succede?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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
<?php include 'footer.php';?>
  