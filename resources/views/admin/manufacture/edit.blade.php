@extends('admin.layouts.app')
@section('title', 'Cập nhật')
@section('content')
    <div class="card p-4">
        <h1>Cập nhật danh mục</h1>

        <div>
            <form action="{{ route('manufactures.update', $manufacture->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="input-group input-group-static mb-4 d-block">
                    <label>Tên:</label>
                    <input type="text" value="{{ old('name') ?? $manufacture->name }}" name="name" class="form-control w-100">

                    @error('name')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group input-group-static mb-4 d-block">
                    <label>Email:</label>
                    <input type="text" value="{{ old('name') ?? $manufacture->email }}" name="email" class="form-control w-100">

                    @error('email')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-submit btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
@endsection
