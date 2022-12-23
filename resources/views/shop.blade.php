@extends('layouts.main')

@section('container')
    <div class="container">
        <h2 style="color: #F9A602">Best Shoes Store in the World</h2>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget mercado-widget categories-widget">
                    <h2 class="widget-title">Type</h2>
                    <div class="widget-content">
                        <ul class="list-group list-group-light">
                            <li class="list-group-item list-group-item-action px-3 border-0">
                                <a href="#" class="cate-link text-decoration-none text-black">Lifestyle</a>
                            </li>
                            <li class="list-group-item list-group-item-action px-3 border-0">
                                <a href="#" class="cate-link text-decoration-none text-black">Sport Shoes</a>
                            </li>
                            <li class="list-group-item list-group-item-action px-3 border-0">
                                <a href="#" class="cate-link text-decoration-none text-black">Running</a>
                            </li>
                            <li class="list-group-item list-group-item-action px-3 border-0">
                                <a href="#" class="cate-link text-decoration-none text-black">Jordan</a>
                            </li>
                            <li class="list-group-item list-group-item-action px-3 border-0">
                                <a href="#" class="cate-link text-decoration-none text-black">Walking</a>
                            </li>
                            <li class="list-group-item list-group-item-action px-3 border-0">
                                <a href="#" class="cate-link text-decoration-none text-black">Soccer</a>
                            </li>
                            <li class="list-group-item list-group-item-action px-3 border-0">
                                <a href="#" class="cate-link text-decoration-none text-black">Kids</a>
                            </li>
                        </ul>
                    </div>
                </div><!-- Typ widget-->

                <div class="widget mercado-widget filter-widget brand-widget">
                    <h2 class="widget-title">Brand</h2>
                    <div class="widget-content">
                        <ul class="list-style vertical-list list-limited" data-show="6">
                            <li class="list-group-item">
                                <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                                <a class="filter-link active text-decoration-none text-black" href="#">Nike</a>
                            </li>
                            <li class="list-item">
                                <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                                <a class="filter-link active text-decoration-none text-black" href="#">Adidas</a>
                            </li>
                            <li class="list-item">
                                <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                                <a class="filter-link active text-decoration-none text-black" href="#">Vans</a>
                            </li>
                        </ul>
                    </div>
                </div><!-- brand widget-->
            </div>

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="row">
                    @foreach ($products as $item)

                    <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                        <div class="card">
                          <img src="{{$item['photo']}}" alt="">
                          <div class="card-body">
                            <div class="d-flex justify-content-between">
                              <p class="small"><a href="detail/{{$item['id']}}" class="text-muted">brand</a></p>
                              <p class="small text-danger"></p>
                            </div>
                
                            <div class="d-flex justify-content-between mb-3">
                              <h5 class="mb-0">{{$item['name']}}</h5>
                              <h5 class="text-dark mb-0">${{$item['price']}}</h5>
                            </div>
                
                          </div>
                        </div>
                      </div>
                    @endforeach

                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem " style="height: 388px;">
                            <img src="{{$item['photo']}}" alt="">
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Nike - 99</span></a>
                                <div class="wrap-price"><span class="product-price">$</span></div>
                                <a href="#" class="btn add-to-cart" style="color: #F9812A">Add To Cart</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>

    </div>
@endsection
