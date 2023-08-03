<div>

  <div class="hero">
    
    <div class="container">
      <h1>Réparez vos appareils électroniques en toute confiance.</h1>
      <div class="companies-board" style="position: relative;">
        <a href="{{ route('frontend.index') }}" class="btn btn-light" wire:navigate.hover style="position: absolute;left: 15px;top: 15px;border-radius: 30px;width: 50px;">
          <i class="fas fa-arrow-left"><</i>
        </a>
    
        <h1>Sélectionnez le type d'appareil avec discernement.</h1>
        <div class="company">


          @foreach ($groups as $group)
  
            
            <a href="{{ route('frontend.group', $group->id) }}" wire:navigate >
              <div class="iphone">
                <img src="{{ asset_app($group->image) }}" alt="{{ $group->name }}" />
              </div>
              <h3>{{ $group->name }}</h3>
            </a>
  
          @endforeach

          
        </div>
      </div>
    </div>
  </div>
  
  <!-- Circle End -->
  <section class="reparation">
    <div class="container reparation-container">
      <div class="row d-flex justify-content-between">
        <div class="col-md-6 reparation-text">
          <h1>Réparation vitre cassée</h1>
          <p>
            Grâce à la technologie laser, nous pouvons remplacer l’arrière de
            votre smartphone en toute sécurité.
          </p>
          <a href="#">
            <button>demande de réparation</button>
          </a>
        </div>
        <div class="col-md-6 reparation-img">
          <img src="{{ asset('img/machine.png') }}" alt="machine" />
        </div>
      </div>
    </div>
    <div class="container protection-container">
      <div class="row d-flex justify-content-between">
        <div class="col-md-6 protection-img">
          <img src="{{ asset('img/phone.png') }}" alt="machine" />
        </div>
        <div class="col-md-6 protection-text">
          <h1>Protection sur-mesure</h1>
          <p>
            Protégez tous vos appareils sur-mesure grâce à notre protection
            hydrogel.
          </p>
          <a href="#">
            <button>demande de réparation</button>
          </a>
        </div>
      </div>
    </div>
  </section>
  <hr />
  
  <section class="feedbacks d-flex flex-column">
    <h1 class="section-title text-center">Feedback</h1>
    <p class="semi-title text-center">Ce que disent nos clients.</p>
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <!-- slide -->
        <div class="swiper-slide">
          <h2>Yassine</h2>
          <div class="stars">
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
          </div>
          <p class="text-start">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Molestiae, ipsa.
          </p>
        </div>
        <!-- End slide -->
        <!-- slide -->
        <div class="swiper-slide">
          <h2>Yassine</h2>
          <div class="stars">
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
          </div>
          <p class="text-start">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Molestiae, ipsa.
          </p>
        </div>
        <!-- End slide -->
        <!-- slide -->
        <div class="swiper-slide">
          <h2>Yassine</h2>
          <div class="stars">
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
          </div>
          <p class="text-start">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Molestiae, ipsa.
          </p>
        </div>
        <!-- End slide -->
        <!-- slide -->
        <div class="swiper-slide">
          <h2>Yassine</h2>
          <div class="stars">
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
          </div>
          <p class="text-start">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Molestiae, ipsa.
          </p>
        </div>
        <!-- End slide -->
        <!-- slide -->
        <div class="swiper-slide">
          <h2>Yassine</h2>
          <div class="stars">
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
          </div>
          <p class="text-start">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Molestiae, ipsa.
          </p>
        </div>
        <!-- End slide -->
        <!-- slide -->
        <div class="swiper-slide">
          <h2>Yassine</h2>
          <div class="stars">
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
          </div>
          <p class="text-start">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Molestiae, ipsa.
          </p>
        </div>
        <!-- End slide -->
        <!-- slide -->
        <div class="swiper-slide">
          <h2>Yassine</h2>
          <div class="stars">
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
          </div>
          <p class="text-start">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Molestiae, ipsa.
          </p>
        </div>
        <!-- End slide -->
        <!-- slide -->
        <div class="swiper-slide">
          <h2>Yassine</h2>
          <div class="stars">
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
            <img src="{{ asset('img/star.svg') }}" alt="star" />
          </div>
          <p class="text-start">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Molestiae, ipsa.
          </p>
        </div>
        <!-- End slide -->
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="google-avis text-center">
      Source: Avis <a href="#">Google</a>
    </div>
  </section>

</div>