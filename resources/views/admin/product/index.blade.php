@extends('admin.layouts.app')
@section('title', 'Sản phẩm')

@section('content')
   <div class="card pt-4 px-4">

      <div class="card-body">
         @if (session('error'))
             <div class="alert alert-danger" role="alert">
                 {{ session('error') }}
             </div>
         @endif
         @if (session('success'))
             <div class="alert alert-success" role="alert">
                 {{ session('success') }}
             </div>    
         @endif
     </div>

      <div>
         <div class="d-flex justify-content-between" style="margin-top: -6px">
            <h1>Danh sách sản phẩm</h1>
         </div>
         <div class="d-flex justify-content-between" style='margin: 12px 0'>
            <div >
               <form action="{{route('search')}}" method="get" class="form-inline my-2 my-lg-0">
                  @csrf
                  <input id="search" name="search" class="form-control mr-sm-2" style="width: 600px" type="search" placeholder="Tìm kiếm..." aria-label="Tìm kiếm">
               </form>
            </div>
            <div>
               <a href="{{route('products.create')}}" class="btn btn-primary">Tạo mới</a>
            </div>
         </div>
      </div>

      <div>
         <table class="table table-hover mt-2">
            <tr>
               <th>#</th>
               <th>Tên</th>
               <th>Ảnh</th>
               <th>Giá</th>
               <th>Hành động</th>
            </tr>

            @foreach ($products as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->name }}</td>
                  <td><img src="{{ asset('images/' . $item->image) }}" alt="" style="width: 100px; height: 100px;"></td>
                  <td>{{ number_format($item->price) }} VNĐ</td>
                  <td class="d-flex">
                     <a href="{{route('products.show', $item->id)}}" class="btn btn-primary" style="margin-right: 8px">Xem</a>
                     <a href="{{route('products.edit', $item->id)}}" class="btn btn-warning" style="margin-right: 8px">Sửa</a>
                     <form action="{{route('products.destroy', $item->id)}}" method="post" id="form-delete{{$item->id}}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" data-id={{$item->id}}>Xoá</button>
                     </form>
                  </td>
               </tr>
            @endforeach
               
            <div id="content"></div>
         </table>
         
         {{ $products->links() }}
      </div>
   </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   <script type="text/javascript">
      //  $('#search').on('keyup', () => {
      //    $value = $(this).val();
      //    $ajax({
      //       type: 'get',
      //       url: "{{URL::to('search')}}",
      //       data: {'search':$value},

      //       success:(data) => {
      //             console.log('horay');
      //             $('#content').html(data);
      //          }
      //       })
      // })   
   </script>

{{-- <td><img src="{{ $category->image ? asset('storage/' . $category->image) : 'storage/x5XKLCongGQfrfvZu1CjqF4bYMfMQythIvwxVb0C.png' }}" alt="{{ $item->image }}" style="width: 100px; height: 100px;"></td> --}}
@endsection