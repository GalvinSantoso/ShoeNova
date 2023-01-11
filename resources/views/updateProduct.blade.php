@extends('layouts.main')

@section('container')
    <div class="row bg-fdf8f8 justify-content-center p-4">
        <div class="col-lg-8 shadow rounded bg-white p-3">
            <h1 class="display-5 fw-semibold" style="color: #FA9602">Update Product</h1>
            <form action="{{route('updateAction',$product->id)}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                
                <div class="mb-3">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="productName" name="name" value="{{old('name', $product->name)}}" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="productPrice" class="form-label">product Price</label>
                        <input type="text" class="form-control @error('productPrice') is-invalid @enderror" id="productPrice" name="price" value="{{old('price', $product->price)}}" required>
                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="productCategory" class="form-label d-block">product Category</label>
                        <select name="category_id" id="productCategory" class="border-1 rounded px-3 py-1 text-muted fw-semibold">
                            @foreach ($categories as $category)
                             <option value="{{ $category->id }}" @if ($product->category_id === $category->id)
                                 selected
                             @endif >{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="productDetail" class="form-label">product Detail</label>
                    <textarea class="form-control @error('detail') is-invalid @enderror" id="productDetail" rows="4" name="detail" required>{{old('detail', $product->detail)}}</textarea>
                    @error('detail')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="productImage" class="form-label">Upload Image</label>
                    <input class="form-control" type="file" id="productImage" name="photo" required value="{{old('photo', $product->photo)}}">
                  </div>
                  @error('photo')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                  <div class="d-flex justify-content-end">
                      <button type="submit" class="btn btn-warning">Update Product</button>
                  </div>
        
            </form>
        </div>
    </div>
@endsection
