<main>

    <section class="text-center container pt-5">
      <div class="row">
        <div class="col-12 mx-auto text-start">
            <a href="{{ route('frontend.index') }}" class="btn btn-primary" wire:navigate.hover>
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
  
          @foreach ($groups as $group)
  
            <div class="col">
              <div class="card shadow-sm text-center">
                <a style="text-decoration: none;" href="{{ route('frontend.group', $group->id) }}" wire:navigate >
                  <img src="{{ asset_app($group->image) }}" alt="" style="cursor: pointer;">
                  <h3 >{{ $group->name }}</h3>
                </a>
              </div>
            </div>
  
          @endforeach
  
        </div>
      </div>
    </div>
  
  </main>