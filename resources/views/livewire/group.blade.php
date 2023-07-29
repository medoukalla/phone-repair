<main>

    <section class="text-center container pt-5">
      <div class="row">
        <div class="col-12 mx-auto text-start">
          <a href="{{ route('frontend.category', $group->category_id) }}" class="btn btn-primary" wire:navigate.hover>
          < Retour
        </a>
        </div>
        <div class="col-12 mx-auto">
          <h1 class="fw-light">
            Sélectionnez le type d'appareil avec discernement
          </h1>
        </div>
      </div>
    </section>
  
    <div class="album py-5">
      <div class="container">
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  
          @foreach ( $devices as $device )
  
            <div class="col">
              <div class="card shadow-sm text-center">
                <a href="{{ route('frontend.device', $device->id) }}" wire:navigate >
                  <img src="{{ asset_app($device ->image) }}" alt="" style="cursor: pointer;">
                </a>
              </div>
            </div>
  
          @endforeach
  
        </div>
      </div>
    </div>
  
  </main>