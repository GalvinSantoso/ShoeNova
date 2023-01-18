@extends('layouts.main')

@section('container')
<section class="h-100" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                    </div>
                    @foreach ($products as $p)
                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="{{$p->photo}}" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-3">{{$p->name}}</p>
                                    <p class="mb-1"><span class="text-muted">Color : </span>{{$p->color}}</p>
                                    <p><span class="text-muted">Size : </span>{{$p->size}}</p>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0">{{$p->quantity}}</h5>
                                    </div>
                                </div>

                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                    <h5 class="mb-0">Price: ${{$p->price}}</h5>
                                </div>

                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                    <form action="/removeCart/{{$p->cart_id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                            <button type="submit" class="text-danger"><i class="fas fa-trash fa-lg"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                    <div class="card">
                        <div class="card-body text-end">
                            @if($products->isNotEmpty())
                            <h3>Total : ${{$total}} </h2>
                            @endif
                            <form action="/transactionHistory" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <button type="submit" class="col align-self-end btn btn-warning btn-block btn-lg">Proceed to Pay</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
