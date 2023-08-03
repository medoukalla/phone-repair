<div>
    <div class="hero mb-0">
      <div class="container">
        <h1>Réparez vos appareils électroniques en toute confiance.</h1>
        <div class="companies-board">
          <h1>Réparation Smartphones, Tablettes et Ordinateurs.</h1>
          <div class="company">
  
            
            @foreach ($categories as $category)
    
              @if ( $category->name == 'Apple' )    
                <a href="{{ route('frontend.category', $category) }}" wire:navigate>
                  <div class="apple">
                    <img src="{{ asset('img/Apple.svg') }}" alt="android" />
                  </div>
                </a>
                
              @elseif ( $category->name == 'Android' )
        
                <a href="{{ route('frontend.category', $category) }}" wire:navigate >
                  <div class="android">
                    <img src="{{ asset('img/android.svg') }}" alt="android" />
                  </div>
                </a>
  
              @endif
    
            @endforeach
    
          </div>
        </div>
      </div>
    </div>
   <hr><br><br>

  </div>