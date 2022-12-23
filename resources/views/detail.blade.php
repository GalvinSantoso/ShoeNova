@extends('layouts.main')

@section('container')
    <div class="container pt-4 mt-4">
        <div class="row">
            <div class="col-6 px-4">
            <img class="img-fluid border rounded-3 w-auto mb-3 shadow" src="{{$products['photo']}}" alt="">
            {{-- table product, tambahin column utk more photos --}}
            <!-- <div class="row">
                <div class="col-4">
                    <img class="img-fluid border rounded-4 w-auto shadow" src="https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/84fc6666-153c-4b64-b445-fbbdb058c8d3/free-run-5-next-nature-womens-road-running-shoes-0PFsLM.png" alt="">
                </div>
                <div class="col-4">
                    <img class="img-fluid border rounded-4 w-auto shadow" src="https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/cce53c21-4249-4fd1-81ac-c8df808a0d7a/free-run-5-next-nature-womens-road-running-shoes-0PFsLM.png" alt="">
                </div>
                <div class="col-4">
                    <img class="img-fluid border rounded-4 w-auto shadow" src="https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/bc90ae84-01f0-4526-8835-c9b08d99c9a8/free-run-5-next-nature-womens-road-running-shoes-0PFsLM.png" alt="">
                </div>
            </div> -->
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
                  <select class="form-select" name="" id="shoe-size-select">
                    @foreach ($sizes as $s)
                      
                    <option value="">{{$s->size}}</option>
                    
                    @endforeach

                  </select>
                </div>
              </div>
            </div>
            
            <div class="row d-flex align-items-center mb-3">
                <div class="col-4">
                  <p class="h5">Quantity</p>
                </div>
                <div class="col-3">
                  <div class="input-group">
                    <select class="form-select" name="" id="quantity-select">
                      <option selected value="39">1</option>
                      <option value="40">2</option>
                      <option value="41">3</option>
                      <option value="42">4</option>
                      <option value="43">5</option>
                      <option value="44">6</option>
                    </select>
                  </div>
                </div>
            </div>
            
            <div class="row d-flex align-items-center mb-4">
              <div class="col-4">
                <p class="h5">Color</p>
              </div>
              <div class="col-3 d-flex">
                <!-- ini buat warna, blom bisa diclick -->
                {{-- div di kasih value id nama warna --}}
                @foreach ($colors as $c)
                      
                  <option value="">{{$c->color}}</option>
                  {{-- <div class="bg-black border text-black me-2 shadow">abc</div> --}}

                    
                @endforeach
                {{-- <div class="bg-black border text-black me-2 shadow">abc</div>
                <div class="bg-danger border text-danger me-2 shadow">abc</div>
                <div class="bg-primary border text-primary me-2 shadow">abc</div> --}}
              </div>
            </div>

            <div class="row mb-4">
              <div class="col-12">
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$products->id}}" />
                    <button class="btn btn-warning fw-bold w-100">Add to Cart</button>
                </form>
              </div>
            </div>

            <div class="row">
              <p class="text-justify">{{$products->detail}}</p>
            </div>
            

            </div>
          </div>
        </div>

      </div>
@endsection