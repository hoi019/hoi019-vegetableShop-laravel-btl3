@extends('admin.layouts.app')
@section('title', 'Manufacture')

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
            <h1>Danh sách nhà cung cấp</h1>
         </div>
         <div class="d-flex justify-content-between" style='margin: 12px 0'>
            <div >
               <form class="form-inline my-2 my-lg-0">
                  <input id="search" name="search" class="form-control mr-sm-2" style="width: 600px" type="search" placeholder="Search..." aria-label="Search">
                </form>
            </div>
            <div>
               <a href="{{route('manufactures.create')}}" class="btn btn-primary">Tạo mới</a>
            </div>
         </div>
      </div>

      <div>
         <table class="table table-hover mt-2">
            <tr>
               <th>#</th>
               <th>Tên</th>
               <th>Email</th>
               <th>Hành động</th>
            </tr>

            @foreach ($manufactures as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->email }}</td>
                  <td class="d-flex">
                     <a href="{{route('manufactures.edit', $item->id)}}" class="btn btn-warning" style="margin-right: 8px">Sửa</a>
                     <form action="{{route('manufactures.destroy', $item->id)}}" method="post" id="form-delete{{$item->id}}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" data-id={{$item->id}}>Xoá</button>
                     </form>
                  </td>
               </tr>
               @endforeach
               
               {{-- <div id="content"></div> --}}
         </table>
         
         {{ $manufactures->links() }}
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