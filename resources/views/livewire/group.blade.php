<div class="hero">
  <div class="container">
    <h1>Réparez vos appareils électroniques en toute confiance.</h1>
    <div class="companies-board" style="position: relative;">
      <a href="{{ route('frontend.category', [ $category ] ) }}" class="btn btn-light" wire:navigate.hover style="position: absolute;left: 15px;top: 15px;border-radius: 30px;width: 50px;">
        <i class="fas fa-arrow-left"><</i>
      </a>

      <h1>Choisissez avec soin le type de votre téléphone</h1>
      <div class="company row">

        @foreach ( $devices as $device )

          <div class="col-md-5">
            <a href="{{ route('frontend.device', [ $device->category, $device->group, $device ] ) }}" wire:navigate >
              <div class="phone">
                <img src="{{ asset_app($device ->image) }}" alt="{{ $device->name }}" />
              </div>
              <h3>{{ $device->name }}</h3>
            </a>
          </div>
  
        @endforeach
        
        
      </div>
    </div>
  </div>
</div>