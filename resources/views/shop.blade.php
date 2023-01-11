@extends('layouts.main')

@section('container')
    <div class="container">
        <h2 style="color: #F9A602; border-bottom: 1px solid #F9A602" class="display-3 fw-semibold p-2">Best Shoes Store in the World</h2>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget mercado-widget categories-widget">
                    <h2 class="widget-title py-3" style="border-bottom: 1px solid #F9A602;">Type</h2>
                    <div class="widget-content">
                        <ul class="list-group list-group-light">
                            @foreach ($categories as $category)
                                <li class="list-group-item list-group-item-action px-3 border-0">
                                    <a href="/category/{{$category->id}}" class="cate-link text-decoration-none text-black">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div><!-- Typ widget-->
            </div>

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <form class="d-flex flex-fill mx-md-2 my-3" role="search" action="/shop">
                    <input class="form-control me-2" type="search" placeholder="Search product.." aria-label="Search" name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-warning" type="submit">Search</button>
                </form>
                <div class="row p-3">
                    @if($products->count())
                    @foreach ($products as $item)
                        <div class="col-md-12 col-lg-4 mb-3">
                            <div class="card shadow-sm rounded">
                                <img src="{{$item['photo']}}" alt="" style="min-height: 350px; object-fit: cover;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                    <p class="small text-danger"></p>
                                    </div>
                        
                                    <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">{{$item['name']}}</h5>
                                    <h5 class="text-dark mb-0">${{$item['price']}}</h5>
                                    </div>
                                    <a href="/detail/{{$item['id']}}" class="btn stretched-link "></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="d-flex justify-content-center pagination ">
                            {{ $products->links() }}
                        </div>
                    @else
                        <h3 class="display-5 fw-semibold text-warning">No Item Found</h3>
                    @endif
          

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
