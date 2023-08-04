<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Font -->
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <!-- Style -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/circle.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/swipper.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/root.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
  <!-- Javascript -->
  <script defer src="{{ asset('js/bootstrap.min.js') }}""></script>
  <script defer src="{{ asset('js/popper.min.js') }}""></script>
  <script defer src="{{ asset('js/swipper.js') }}""></script>
  <script defer src="{{ asset('js/main.js') }}""></script>
  <title>{{ $title ?? 'Page Title' }}</title>
</head>



<body>
  <header>
    <div class="container">
      <div class="top-bar">
        <div class="logo">
          <img src="{{ asset('img/logo.png') }}" alt="logo" />
        </div>
        <nav>
          <ul>
            <li><a href="{{ route('frontend.index') }}" wire:navigate.hover >Accueil</a></li>
            <li><a href="{{ route('frontend.tarifs') }}" wire:navigate.hover >Nos tarifs </a></li>
            <li><a href="{{ route('frontend.faq') }}" wire:navigate.hover >F.A.Q</a></li>
            <li><a href="{{ route('frontend.contact') }}" wire:navigate.hover >Contact</a></li>
            <li><a href="{{ route('frontend.postal') }}" wire:navigate.hover class="envoi-postal">Envoi postal</a></li>
          </ul>
        </nav>
        <div>
          <a href="{{ route('frontend.postal') }}" wire:navigate.hover class="send-post">
            <button>Envoi postal</button>
          </a>
        </div>
        <!-- hamburger menu -->
        <div class="hamburger-menu">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
      </div>
    </div>
  </header>
  


  {{ $slot }}


 
  <!-- footer -->
  <footer>
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-sm-6">
          <div class="footer-item">
            <img src="{{ asset('img/logo.png') }}" alt="logo" />
          </div>
          <div>
            <div class="item-title mt-0">
              <div class="">Telephone</div>
            </div>
            <div class="item-info">
              <h3>{{ setting('site.phone') }}</h3>
              <h3>{{ setting('site.phone_2') }}</h3>
            </div>
          </div>
          <div>
            <div class="item-title">
              <div>Adress e-mail</div>
            </div>
            <div class="item-info">
              <h3>{{ setting('site.email') }}</h3>
            </div>
          </div>
          <div>
            <div class="item-title">
              <div>Adress</div>
            </div>
            <div class="item-info">
              <h3>{{ setting('site.adress')  }}</h3>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 liens-utiles">
          <div class="footer-item">
            <div>
              <h1>Liens Utiles</h1>
            </div>
          </div>
          <div>
            <div class="item-info">
              <a href="{{ route('frontend.index') }}" wire:navigate>Accueil</a>
            </div>
          </div>
          <div>
            <div class="item-info">
              <a href="{{ route('frontend.postal') }}" wire:navigate>Envoi postal</a>
            </div>
          </div>
          <div>
            <div class="item-info">
              <a href="{{ route('frontend.tarifs') }}" wire:navigate>Nos tarifs</a>
            </div>
          </div>
          <div>
            <div class="item-info">
              <a href="{{ route('frontend.faq') }}" wire:navigate>F.A.Q</a>
            </div>
          </div>
          <div>
            <div class="item-info">
              <a href="{{ route('frontend.contact') }}" wire:navigate>Contact</a>
            </div>
          </div>
          <div>
            <div class="item-info">
              <a href="{{ route('frontend.avertissment') }}" wire:navigate >Avertissement appareils Apple</a>
            </div>
          </div>
          <div>
            <div class="item-info">
              <a href="{{ route('frontend.pieces.detacheed') }}" wire:navigate >Qualités de piéces détachées</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 liens-legal">
          <div class="footer-item">
            <div>
              <h1>Liens Utiles</h1>
            </div>
          </div>
          <div>
            <div class="item-info">
              <a href="{{ route('frontend.privacy') }}" wire:navigate >Politique confidentialité</a>
            </div>
          </div>
          <div>
            <div class="item-info">
              <a href="{{ route('frontend.cookies.policy') }}" wire:navigate >Politique de cookies</a>
            </div>
          </div>
          <div>
            <div class="item-info">
              <a href="{{ route('frontend.garantie') }}" wire:navigate >Conditions de la garantie</a>
            </div>
          </div>
          <div>
            <div class="item-info">
              <a href="{{ route('frontend.legal.notice') }}" wire:navigate >Mentions légales</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 social-media">
          <div class="footer-item">
            <div>
              <h1>Nos réseaux sociaux</h1>
            </div>
          </div>
          <div>
            <div class="item-info">
              <a href="{{ setting('social-media.facebook') }}" target="_blanck"><img src="{{ asset('img/icons/white/facebook.svg') }}" alt="facebook" /></a>
              <a href="{{ setting('social-media.instagram') }}" target="_blanck"><img src="{{ asset('img/icons/white/insta.svg') }}" alt="instagram" /></a>
              <a href="{{ setting('social-media.tiktok') }}" target="_blanck"><img src="{{ asset('img/icons/white/tiktok.svg') }}" alt="tiktok" /></a>
              <a href="{{ setting('social-media.snapchat') }}" target="_blanck"><img src="{{ asset('img/icons/white/snap.svg') }}" alt="Snapchat" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Copyrights -->
  <div class="copyrights text-center">
    <h4>© Copyright 2023. site.com</h4>
    <h5>
      Édité par <span><a href="#">MARWAN BENZNANA.</a></span>
    </h5>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>

</html>