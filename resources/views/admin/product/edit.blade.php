@extends('admin.layouts.app')
@section('title', 'Cập nhật')
@section('content')
    <div class="card p-4">
        <h1>Cập nhật sản phẩm</h1>

        <div>
            <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="input-group input-group-static mb-4 d-block">
                    <label>Tên:</label>
                    <input type="text" value="{{ $product->name }}" name="name" class="form-control w-100">

                    @error('name')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="row">
                    <div class=" input-group-static col-5 mb-4">
                        <label>Image:</label>
                        <input type="file" accept="image/*" name="image" id="image-input" class="form-control">

                        @error('image')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-5">
                        <img src="{{asset('images/'.$product->image)}}" style="height: 100px; width: 100px; margin-left: 100px;" id="show-image" alt="">
                    </div>
                </div>

                <div class="input-group input-group-static mb-4 d-block">
                    <label>Giá:</label>
                    <input type="text" value="{{ $product->price }}"  name="price" class="form-control w-100">

                    @error('price')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group input-group-static mb-4 d-block">
                    <label>Nhà cung cấp:</label>
                    <select name="manufacture_id" class="form-control w-100">
                        @foreach($manufactures as $manufacture)
                            <option value="{{ $manufacture->id }}" {{ $product->manufacture_id == $manufacture->id ? 'selected' : '' }}>{{ $manufacture->name }}</option>
                        @endforeach
                    </select>
                    @error('manufacture_id')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>     

                <div class="input-group input-group-static mb-4 d-block">
                    <label>Nhà cung cấp:</label>
                    <select name="category_id" class="form-control w-100">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>                

                <button type="submit" class="btn btn-submit btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
@endsection
