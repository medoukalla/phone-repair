<main>
  <div class="hero">
    <div class="container">
      <div class="companies-board gap-2">
        <h1 class="mb-0">Contact</h1>
        <p class="w-50 text-center">
          Une question ? Une demande de réparation spécifique ? Contactez
          notre équipe dès maintenant.
        </p>
      </div>
    </div>
  </div>
  <div class="contact">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="steps-side col-md-6">
          <div class="steps-box">
            <!-- Step -->
            <h1 class="mb-1">Quelques étapes</h1>
            <p class="mb-3 w-75">
              Les étapes avant l'envoi de votre appareil dans nos locaux.
            </p>
            <div class="step d-flex gap-3 align-items-center mb-4">
              <div class="num contact-icon">
                <img src="{{ asset('img/icons/office.svg') }}" alt="hour">
              </div>
              <div class="step-content">
                <div class="step-title">Siége social</div>
                <p class="w-75 m-0">
                  44 Rue Nationale, 69420 Condrieu France
                </p>
              </div>
            </div>
            <!-- Step -->
            <div class="step d-flex gap-3 align-items-center mb-4">
              <div class="num contact-icon">
                <img src="{{ asset('img/icons/openning.svg') }}" alt="hour">
              </div>
              <div class="step-content">
                <div class="step-title">Horaires d'ouvertures</div>
                <p class="w-75 m-0">
                <ul>
                  <li>Lundi : Fermé</li>
                  <li>Mardi : 10:00 - 18:00</li>
                  <li>Mercredi : 10:00 - 18:00</li>
                  <li>Jeudi: 14:00 - 18:00</li>
                  <li>Vendredi : 10:00 - 18:00</li>
                  <li>Samedi: 10:00 - 15:00</li>
                </ul>
                </p>
              </div>
            </div>
            <!-- Step -->
            <div class="step d-flex gap-3 align-items-center mb-4">
              <div class="num contact-icon">
                <img src="{{ asset('img/icons/phone.svg') }}" alt="phone">
              </div>
              <div class="step-content">
                <div class="step-title">Contact</div>
                <p class="w-75 m-0">
                <ul>
                  <li>+(33)666666666</li>
                  <li>+(33)666666666</li>
                  <li>email@outlook.fr</li>
                </ul>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="form-side col-md-6">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41719.55624821388!2d6.857261419540154!3d49.1915999671314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4795b2ed21671e57%3A0x9c0a92bc51ad2e87!2sForbach%2C%20France!5e0!3m2!1sen!2sma!4v1690635480053!5m2!1sen!2sma"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="device-form">
            <h1>Prise de contact</h1>
            <p>Une question ? Un problème ? C'est ici!
            </p>
            <div class="d-flex w-100">
              <input type="text" placeholder="Votre prénom" />
              <input type="text" placeholder="Votre nom" />
            </div>
            <div class="d-flex w-100">
              <input type="text" placeholder="Votre adresse mail" />
              <input type="text" placeholder="Votre numéro de téléphone" />
            </div>
            <textarea class="w-100" name="description" type="" placeholder="Exprimez-vous...">
            </textarea>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <!-- Button envoyer -->
        <a href="#"><button class="mt-5">Envoyer</button></a>
      </div>
    </div>
  </div>
</main>