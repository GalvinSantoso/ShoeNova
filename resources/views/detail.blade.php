@extends('layouts.main')

@section('container')
    <div class="container pt-4 mt-4">
        <form action="/add_to_cart" method="POST">
            @csrf
        <div class="row">
        
            <div class="col-6 px-4">
            <img class="img-fluid border rounded-3 w-auto mb-3 shadow" src="{{$products['photo']}}" alt="">
            </div>

        <div class="col-5 offset-1 px-4">
            <p class="h2">{{$products->name}}</p>
            <div class="row d-flex flex-row justify-content-between pb-4">
                <div class="col-4 d-flex justify-content-between align-items-center">
                <!-- nih buat rating, baru gambar doang -->
                <img class="img-fluid w-25 mx-1" src="assets/star.png" alt="">
                <img class="img-fluid w-25 mx-1" src="assets/star.png" alt="">
                <img class="img-fluid w-25 mx-1" src="assets/star.png" alt="">
                <img class="img-fluid w-25 mx-1" src="assets/star.png" alt="">
                <img class="img-fluid w-25 mx-1" src="assets/star.png" alt="">
                </div>
                <div class="col-2">
                    <p class="h3">${{$products->price}}</p>
                </div>
            </div>
            
            <div class="row d-flex align-items-center mb-3">
              <div class="col-4">
                <p class="h5">Size</p>
              </div>
              <div class="col-3">
                <div class="input-group">
                  <select class="form-select" name="size" id="shoe-size-select">
                    @foreach ($sizes as $s)
                      <option value="{{$s->size}}">{{$s->size}}</option>
                    @endforeach
                
                  </select>
                </div>
              </div>
            </div>
            
            
            <div class="row d-flex align-items-center mb-4">
              <div class="col-4">
                <p class="h5">Color</p>
              </div>
              <div class="col-3 d-flex">

            
                <select class="form-select" name="color" id="shoe-size-select">
                    @foreach ($colors as $c)
                    <option value="{{$c->color}}">{{$c->color}}</option>
                    @endforeach
                </select>

              </div>
            </div>

            <div class="row mb-4">
              <div class="col-12">
                
                    <div class="row d-flex align-items-center mb-3">
              

                      <div class="col-4">
                      <h5>Quantity </h5>
                      </div>

                      <div class="col-3 d-flex">
                        <input type="number" min="1" name="quantity" value="{{$products->quantity}}" style="margin-left: 30px;" required>
                      </div>
        
                    </div>
                    <input type="hidden" name="product_id" value="{{$products->id}}" />
                    <button class="btn btn-warning fw-bold w-100">Add to Cart</button>
              </div>

            </div>

            <div class="row">
              <p class="text-justify">{{$products->detail}}</p>
            </div>
            

        </div>
    </div>
    
</div>
</form>

</div>
@endsection