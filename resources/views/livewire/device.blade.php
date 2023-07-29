<main>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <a href="{{ route('frontend.group', $device->group->id ) }}" class="btn btn-primary" wire:navigate.hover>
          < Retour
        </a>
        <h1 class="display-4 fw-normal">Réparez vos appareils
            électroniques en toute confiance.</h1>

        <h2>{{ $device->name }}</h2>
        <a class="btn btn-outline-secondary" href="#">
            {{ $device->category->name }}
        </a>
      </div>
      <div class="product-device shadow-sm d-none d-md-block">
        <img src="{{ asset_app($device->image) }}" alt="" style="max-width: 100%;">
      </div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
  
    
  
    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
      <div class="text-bg-dark me-md-3 pt-3 px-3 px-md-5 text-center overflow-hidden">
        <div class="my-3">
            <img src="{{ asset_app( $device->image ) }}" alt="" style=" max-height: 500px; ">
            <h2 class="display-5">
                $ 600
            </h2>
        </div>
      </div>
      <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="bg-white shadow-dm mx-auto p-4" style="width: 100%; height: 300px; border-radius: 21px 21px 0 0;">
            <table class="table table-responsive text-start ">
                <tr>
                    <th>Réparation</th>
                    <th>Prix</th>
                </tr>
                @foreach ( $repairs as $repair )
                    <tr style=" line-height: 60px; font-size: 20px; cursor: pointer; ">
                        <td>{{ $repair->title }}</td>
                        <td>{{ $repair->price }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
      </div>
    </div>
  
    
  
    
  </main>