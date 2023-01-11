@extends('layouts.main')

@section('container')
    <div class="row bg-fdf8f8 justify-content-center p-4">
        <div class="col-lg-8 shadow rounded bg-white p-3">
            <button class="btn btn-secondary mb-2" onclick="history.back()"> Back</button>
            <h1 class="display-5 fw-semibold" style="color: #FA9602">Add New Product</h1>
            <form  action="/addProduct" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="productName" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="productPrice" class="form-label">product Price</label>
                        <input type="text" class="form-control @error('productPrice') is-invalid @enderror" id="productPrice" name="price" value="{{ old('price') }}" required>
                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="productCategory" class="form-label d-block">product Category</label>
                        <select name="category_id" id="productCategory" class="border-1 rounded px-3 py-1 text-muted fw-semibold">
                            <option selected disabled hidden>Choose One</option>
                            @foreach ($categories as $category)
                             <option value="{{ $category->id }}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="productDetail" class="form-label">product Detail</label>
                    <textarea class="form-control @error('detail') is-invalid @enderror" id="productDetail" rows="4" name="detail" required>{{ old('detail') }}</textarea>
                    @error('detail')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="productImage" class="form-label">Upload Image</label>
                    <input class="form-control" type="file" id="productImage" name="photo" required>
                  </div>
                  <div class="d-flex justify-content-end">
                      <button type="submit" class="btn btn-warning">Add Product</button>
                  </div>
                  @error('photo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
            </form>
        </div>
    </div>
@endsection
