<div>
    <div class="bg-white shadow-dm mx-auto p-4" style="width: 100%; height: 300px; border-radius: 21px 21px 0 0;">
  
  
      <a href="{{ route('frontend.index') }}" wire:navigate class="btn btn-primary mb-3">
        Start auto fill order
      </a>
  

      <form action="{{ route('frontend.store.order') }}" method="post" />
        @csrf

        <input class="form-control mb-2" name="first_name" type="text" placeholder="first name" wire:model.live="firstName" value="{{ $firstName }}">
        <input class="form-control mb-2" name="last_name" type="text" placeholder="last name" wire:model.live="lastName" value="{{ $lastName }}">
        <input class="form-control mb-2" name="address" type="text" placeholder="address" wire:model.live="address" value="{{ $address }}">
        <input class="form-control mb-2" name="city" type="text" placeholder="city" wire:model.live="city" value="{{ $city }}">
        <input class="form-control mb-2" name="code_postal" type="text" placeholder="code postal" wire:model.live="codePostal" value="{{ $codePostal }}">
        <input class="form-control mb-2" name="phone" type="number" placeholder="Phone number" wire:model.live="phoneNumber" value="{{ $phoneNumber }}">
        <input class="form-control mb-2" name="" type="text" placeholder="device mark" wire:model.live"="device_mark" value="{{ $device_mark }}">
        <input class="form-control mb-2" name="device_code" type="text" placeholder="device password" wire:model.live="device_password" value="{{ $device_password }}">

        <!-- Hidden inputs -->
        <input class="form-control mb-2" name="device_id" @if( Session::has('order') ) value="{{ $device->id }}" @endif type="hidden" placeholder="Device id">
        <input class="form-control mb-2" name="total" @if( Session::has('order') ) value="{{ $total }}" @endif type="hidden" placeholder="Total" >
        <input class="form-control mb-2" name="repairs"  @if( Session::has('order') ) value="{{ $repairs_ids }}" @endif type="hidden" placeholder="Repairs" >
        <input class="form-control mb-2" name="repairs_text" @if( Session::has('order') ) value="{{ $repairs_text }}" @endif type="hidden" placeholder="Repairs text">
        

        <p>
          <strong>Repairs : 
            @if ( Session::has('order') ) ( <a href="{{ route('frontend.device', $device) }}" wire:navigate >Update</a> ) @endif 
          </strong><br>
          
          @if ( Session::has('order') )          
            <ul>
              @foreach ( $repairs as $repair )
                  <li>{{ $repair->title }}</li> 
              @endforeach
            </ul>
          @endif  
        </p>

        @if ( Session::has('order') ) 
          <h3>Total : ${{ $total.'.00' }} </h3>
        @endif

        @if ( $status != null )
          <div class="alert alert-{{ $status }}">{{ $status_message }}</div>
        @endif


        @if ( Session::has('type') )
          <div class="alert alert-{{ Session::get('type') }}">
            <b>{{ Session::get('message') }}</b>
          </div>
        @endif
        
        <button class="btn btn-outline-success" type="submit" >
          Submit
        </button>

      </form>
    </div>
</div>
