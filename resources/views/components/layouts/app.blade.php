<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>

        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
              <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">Logo</span>
              </a>
        
              <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('frontend.index') }}" wire:navigate class="nav-link" aria-current="page">Accueil</a></li>
                <li class="nav-item"><a href="{{ route('frontend.tarifs') }}" wire:navigate class="nav-link">Nos tarifs</a></li>
                <li class="nav-item"><a href="{{ route('frontend.faq') }}" wire:navigate class="nav-link">F.A.Q</a></li>
                <li class="nav-item"><a href="{{ route('frontend.contact') }}" wire:navigate class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="{{ route('frontend.postal') }}" wire:navigate class="nav-link active bg-warning">Envoi postal</a></li>
              </ul>
            </header>
        </div>


        {{ $slot }}


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
