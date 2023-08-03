<main>

    <div class="hero mb-0">
      <div class="container">
        <h1>Réparez vos appareils électroniques en toute confiance.</h1>
        <div class="companies-board gap-4" style="position: relative;" >
          <a href="{{ route('frontend.group', $device->group->id ) }}" class="btn btn-light" wire:navigate.hover style="position: absolute;left: 15px;top: 15px;border-radius: 30px;width: 50px;">
            <i class="fas fa-arrow-left"><</i>
          </a>

          <h1 class="mb-0">Réparation {{ $device->name }}</h1>
          <div class="company">
            <div class="company-type">
              <h2>{{ $device->category->name }}</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="reparation-price">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex flex-column align-items-center">
            <div class="phone-checked">
              <img src="{{ asset_app($device->image) }}" alt="phone-checked" />
            </div>
            <div class="reparation-total">
              <h2>Total: <span>{{ $total }} €</span></h2>
            </div>
            <div class="client-infos d-flex flex-column text-center">
              <!-- Title -->
              <div class="info-title">
                <h4>
                  Veuillez entrer votre numéro de téléphone pour vous contacter.
                </h4>
              </div>
              <!-- Phone number -->
              <div class="d-flex flex-column">
                <label for="">Numéro de téléphone :* </label>
                <input type="nuber" wire:model.live="phoneNumber" placeholder="" />
              </div>
              
              <a wire:click="start_order({{ $device }})" class="reparation-btn">
                <button>Demande de réparation</button>
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="malfunctions-checking">
              <div class="malfunctions-heading">
                <h4>
                  Veuillez mentionner les problèmes que rencontre votre
                  téléphone, s'il vous plaît.
                </h4>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Réparation</th>
                    <th scope="col">Prix</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $repairs as $repair )
                    <tr wire:click="add_repair({{ $repair }})" style="cursor: pointer; @if( in_array( $repair->id, $counted ) ) background-color: #0cdb7d7a; transition: 0.3s; @endif" >
                      <td>{{  $repair->title  }}</td>
                      <td>{{ $repair->price }} €</td>
                    </tr>
                  @endforeach
                    
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

</main>
  