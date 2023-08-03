<main>

  <div class="hero">
      <div class="container">
        <div class="companies-board gap-2" style="position: relative;" >
          <a href="{{ route('frontend.index') }}" class="btn btn-light" wire:navigate.hover style="position: absolute;left: 15px;top: 15px;border-radius: 30px;width: 50px;">
            <i class="fas fa-arrow-left"><</i>
          </a>

          <h1 class="mb-0">Envoi postal</h1>
          <p class="w-50 text-center">
            Donnez nous toutes les informations nécessaires a la réparation de
            votre appareil
          </p>
        </div>
      </div>
    </div>

    <!-- Pop up Envoyer start-->
    <div class="popup">
      <div class="popup-img">
        <img src="assets/img/icons/sent.gif" alt="sent" />
      </div>
      <h1>bien envoyé</h1>
      <p class="w-75 text-center">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, at!
      </p>
      <a href="#"><button onclick="closePopup()">Router à l'accueil</button></a>
    </div>
    <!-- Pop up Envoyer end -->

    {{-- <form action="{{ route('frontend.store.order') }}" method="post" wire:submit="submit" > --}}
    <form wire:submit="submit" >
      <div class="form">
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
                  <div class="num">1</div>
                  <div class="step-content">
                    <div class="step-title">Remplissez le formulaire</div>
                    <p class="w-75 m-0">
                      En indiquant le plus de détails sur la réparation à
                      effectuer.
                    </p>
                  </div>
                </div>
                <!-- Step -->
                <div class="step d-flex gap-3 align-items-center mb-4">
                  <div class="num">2</div>
                  <div class="step-content">
                    <div class="step-title">Envoyez le formulaire</div>
                    <p class="w-75 m-0">
                      Vérifiez toute votre saisie avant l’envoi.
                    </p>
                  </div>
                </div>
                <!-- Step -->
                <div class="step d-flex gap-3 align-items-center mb-4">
                  <div class="num">3</div>
                  <div class="step-content">
                    <div class="step-title">Prise de contact</div>
                    <p class="w-75 m-0">
                      Notre technicien vous contactera sous 24/48h ouvrées.
                    </p>
                  </div>
                </div>
                <!-- Step -->
                <div class="step d-flex gap-3 align-items-center mb-0">
                  <div class="num">4</div>
                  <div class="step-content">
                    <div class="step-title">Envoyez votre appareil</div>
                    <p class="w-75 m-0">
                      Une fois la confirmation par mail, envoyez nous l'appareil.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-side col-md-6">
              <div class="form-box">
                <h1>Informations personnelles</h1>
                <div class="formulaire d-flex flex-column">
                  <input wire:model.live="firstName" value="{{ $firstName }}" type="text" required placeholder="Votre nom *" />
                  <input wire:model.live="lastName" value="{{ $lastName }}" type="text" required placeholder="Votre prénom *" />
                  <input wire:model.live="phoneNumber" value="{{ $phoneNumber }}" type="text" required placeholder="Votre téléphone *" />
                  <input wire:model.live="address" value="{{ $address }}" type="text" required placeholder="Votre adresse *" />
                  <div class="city-postal d-flex">
                    <input wire:model.live="city" value="{{ $city }}" type="text" required placeholder="Votre ville" class="w-100" />
                    <input wire:model.live="codePostal" value="{{ $codePostal }}" type="text" required placeholder="Votre code postal" class="postal" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="device-form">
                <h1>Informations concernant l'appareil</h1>
                <div class="d-flex w-100">
                  <input wire:model.live"="device_mark" value="{{ $device_mark }}"
                    type="text" required disabled
                    placeholder="Marque de votre appareil (Exemple: Apple) *"
                  />
                  <input @if( Session::has('order') ) value="{{ $repairs_text }}" @endif
                    type="text" required disabled
                    placeholder="Panne de votre appareil (Exemple: Appareil photo) *"
                  />
                </div>
                <div class="d-flex w-100">
                  <input @if( Session::has('order') ) value="{{ $device->name }}" @endif
                    type="text" required disabled
                    placeholder="Modèle de votre appareil (Exemple: iPhone 12 Pro Max) *"
                  />
                  <input wire:model.live="device_password" value="{{ $device_password }}"
                    type="text" required
                    placeholder="Mot de passe de votre appareil *"
                  />
                </div>
                <textarea wire:model.live="description"
                  class="w-100"
                  name="description" required
                  placeholder="Décrivez la panne en quelques mots (Exemple: J'ai cassé la lentille de mon appareil photo) *"
                >{{ $device_password }}</textarea>
              </div>
            </div>
          </div>
          <!-- Button envoyer -->
          <input type="hidden" name="device_id" >
          @if ( $status == 'success' )
            <div class="alert alert-success mt-5">Success message </div>
          @endif
          <a><button class="mt-5" onclick="openPopup()" >Envoyer</button></a>
        </div>
      </div>
    </form>
  
</main>