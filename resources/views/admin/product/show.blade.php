@extends('admin.layouts.app')
@section('title', 'Sản phẩm')

@section('content')
   <div class="card pt-4 px-4">

      @if(session('message'))
         <h1 class="text-primary">{{session('message')}}</h1>
      @endif

      <div>
         <div class="d-flex justify-content-between" style="margin-top: -6px">
            <h1>Thông tin chi tiết sản phẩm</h1>
         </div> 
      </div>

      <div>
         <div style="margin-bottom: 12px">
            <label style="margin-bottom: 4px">Tên:</label>
            <input type="text" value="{{ $product->name }}" name="name" class="form-control w-100" readonly>       
         </div>
         <div style="margin-bottom: 12px">
            <label>Ảnh:</label>
            <img src="{{asset('images/'.$product->image)}}" style="height: 100px; width: 100px; margin-left: 100px;" id="show-image" alt="">
         </div>
         <div style="margin-bottom: 12px">
            <label style="margin-bottom: 4px">Giá:</label>
            <input type="text" value="{{ $product->price }}"  name="price" class="form-control w-100" readonly> 
         </div>
         <div style="margin-bottom: 12px">
            <label style="margin-bottom: 4px">Nhà cung cấp:</label>
            <input type="text" value="{{ $product->manufacture->name }}"  name="price" class="form-control w-100" readonly> 
         </div>
         <div style="margin-bottom: 12px">
            <label style="margin-bottom: 4px">Danh mục:</label>
            <input type="text" value="{{ $product->category->name }}"  name="price" class="form-control w-100" readonly> 
         </div>
         <div style="margin: 20px 0;">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Quay lại</a>
         </div>
      </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   <script type="text/javascript">
      // $('#search').on('keyup', () => {
      //    $value = $(this).val();
      //    $ajax({
      //       type: 'get',
      //       url: "{{URL::to('search')}}",
      //       data: {'search':$value},

      //       success:(data) => {
         //          console.log('horay');
         //          $('#content').html(data);
         //       }
         //    })
      //    console.log('helo');
      // })
      
      // $('#search').on('keyup', () => {alert('hello');})
   </script>

{{-- <td><img src="{{ $category->image ? asset('storage/' . $category->image) : 'storage/x5XKLCongGQfrfvZu1CjqF4bYMfMQythIvwxVb0C.png' }}" alt="{{ $item->image }}" style="width: 100px; height: 100px;"></td> --}}
@endsection