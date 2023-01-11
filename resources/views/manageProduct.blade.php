@extends('layouts.main')

@section('container')
            <div class="container">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif
                <a href="/addProduct" class="btn btn-warning" >Add Item</a>
                @foreach ($products as $p)
                <div class="card my-2">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ $p->photo}}" alt="..." class="img-fluid rounded m-4"  style="min-height: 100px; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row justify-content-between">
                                    <div class="col-8">
                                        <h5 class="card-title ">{{$p->name}}</h5>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex">
                                            <a href="/manage/update/{{$p->id}}" class="btn btn-outline-warning me-2">Update</a>
                                            <form action="{{route('delete',$p->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-outline-danger" type="submit">Delete</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
           
@endsection