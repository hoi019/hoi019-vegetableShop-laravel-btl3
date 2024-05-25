@extends('admin.layouts.app')
@section('title', 'Cập nhật' . $category->name)
@section('content')
    <div class="card p-4">
        <h1>Cập nhật danh mục</h1>

        <div>
            <form action="{{ route('categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- <div class="row">
                    <div class=" input-group-static col-5 mb-4">
                        <label>Image:</label>
                        <input type="file" accept="image/*" name="image" id="image-input" class="form-control">

                        @error('image')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-5">
                        <img src="{{ $category->image ? asset('storage/' . $category->image) : 'storage/x5XKLCongGQfrfvZu1CjqF4bYMfMQythIvwxVb0C.png' }}" alt="{{ $category->image }}" style="width: 100px; height: 100px;">
                    </div>
                </div> --}}

                <div class="input-group input-group-static mb-4 d-block">
                    <label>Name:</label>
                    <input type="text" value="{{ old('name') ?? $category->name }}" name="name" class="form-control w-100">

                    @error('name')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

                {{-- <div class="input-group input-group-static mb-4 d-block">
                    <label>Email:</label>
                    <input type="text" value="{{ old('email') ?? $category->email }}" name="email" class="form-control w-100">
                    @error('email')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group input-group-static mb-4 d-block">
                    <label>Phone:</label>
                    <input type="number" value="{{ old('phone') ?? $category->phone }}" name="phone" class="form-control w-100">
                    @error('phone')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group input-group-static mb-4 d-block">
                    <label>Address:</label>
                    <input type="text" value="{{ old('address') ?? $category->address }}" name="address" class="form-control w-100">
                    @error('address')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group input-group-static mb-4 d-block">
                    <label name="group" class="ms-0">Gender:</label>
                    <select name="group" class="form-control w-100" value={{ $category->gender }}>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>

                    @error('group')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group input-group-static mb-4 d-block">
                    <label>Password:</label>
                    <input type="password" value="{{ old('password') }}" name="password" class="form-control w-100">
                    @error('password')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div> --}}

                {{-- <div class="form-group">
                    <label for="">Roles</label>
                    <div class="row">
                        @foreach ($roles as $groupName => $role)
                            <div class="col-5">
                                <h4>{{ $groupName }}</h4>
                                <div class="px-4 pb-2">
                                    @foreach ($role as $item)
                                        <div class="form-check">
                                            <input class="form-check-input" name="role_ids[]" 
                                                {{ in_array($item->id, $categoryRoles) ? 'checked' : '' }}
                                                type="checkbox"
                                                value="{{ $item->id }}">
                                            <label class="custom-control-label"
                                                for="customCheck1">{{ $item->display_name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div> --}}

                <button type="submit" class="btn btn-submit btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
@endsection
