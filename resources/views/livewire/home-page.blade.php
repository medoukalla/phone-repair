<main>

  <section class="text-center container pt-5">
    <div class="row">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Réparation Smartphones, <br>
          Tablettes et Ordinateurs</h1>
      </div>
    </div>
  </section>

  <div class="album py-5">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        @foreach ($categories as $category)

          <div class="col">
            <div class="card shadow-sm">
              <a href="{{ route('frontend.category', $category) }}" wire:navigate >
                <img src="{{ asset_app($category->image) }}" alt="" style="cursor: pointer;">
              </a>
            </div>
          </div>

        @endforeach

      </div>
    </div>
  </div>

</main>