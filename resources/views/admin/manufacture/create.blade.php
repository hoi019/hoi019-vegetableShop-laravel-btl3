@extends('admin.layouts.app')
@section('title', 'Tạo mới')
@section('content')
    <div class="card p-4">
        <h1>Tạo mới nhà cung cấp</h1>

        <div>
            <form action="{{ route('manufactures.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group input-group-static mb-4 d-block">
                    <label>Tên:</label>
                    <input type="text" value="{{ old('name') ?? '' }}" name="name" class="form-control w-100">

                    @error('name')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group input-group-static mb-4 d-block">
                    <label>Email:</label>
                    <input type="text" value="{{ old('email') ?? '' }}" name="email" class="form-control w-100">

                    @error('email')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-submit btn-primary">Thêm</button>
            </form>
        </div>
    </div>
@endsection

