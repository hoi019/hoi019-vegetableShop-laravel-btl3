@extends('admin.layouts.app')
@section('title', 'Tạo mới')
@section('content')
    <div class="card p-4">
        <h1>Tạo mới danh mục</h1>

        <div>
            <form action="{{ route('categories.store') }}" method="post">
                @csrf
                <div class="input-group input-group-static mb-4 d-block">
                    <label>Tên:</label>
                    <input type="text" name="name" class="form-control w-100">

                    @error('name')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-submit btn-primary">Thêm</button>
            </form>
        </div>
    </div>
@endsection

