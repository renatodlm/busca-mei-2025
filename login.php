
<?php include 'header.php';?>
<main>
  <div class="section-login">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="login">
          <h2>Accedi</h2>
          <p>Novo por aqui? Registre-se</p>
          <a href="#" class="btn-google"><img src="images/icon-google.png" alt="Google Login">  Login with Google</a>

          <form action="">
            <div class="mb-3">
              <label for="utente" class="form-label">Utente:</label>
              <input type="text" class="form-control" name="utente" placeholder="Inserire il utente">
            </div>

            <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Inserire il e-mail">
            </div>
            <a href="#" class="button-orange submit">Registrati</a>
            <a href="" class="btn-forget">Hai <strong>dimenticato</strong> la password</a>
          </form>
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
  