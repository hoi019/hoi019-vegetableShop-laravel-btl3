@extends('client.layouts.app')
@section('title', 'Giỏ hàng')
@section('content')
    <!-- Start All Title Box -->
    <div class="all-title-box">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h2>Cart</h2>
                  <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Shop</a></li>
                      <li class="breadcrumb-item active">Cart</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <!-- End All Title Box -->

  <!-- Start Cart  -->
  <div class="cart-box-main">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="table-main table-responsive">
                        @php
                            $total = 0; 
                        @endphp
                        @if(count($carts) > 0)
                            <table class="table">
                            <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>Tên</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                    <th>Xoá</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($carts as $item)
                                        <tr>
                                            <td class="thumbnail-img">
                                                <a href="#">
                                                    <img class="img-fluid" 
                                                    src="{{asset('images/'.$item->image_product)}}" 
                                                    style="width: 100px; height: 100px;" alt="" />
                                                </a>
                                            </td>
                                            <td class="name-pr">
                                                <a href="#">
                                                    {{$item->name_product}}
                                                </a>
                                            </td>
                                            <td class="price-pr">
                                                <p>{{ number_format($item->price_product) }} VNĐ</p>
                                            </td>
                                            <td class="quantity-box" style="position: relative;">
                                                <form action="{{ route('carts.update', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('put')
                                                    <input type="number" name="quantity" value="{{ $item->quantity }}" style="width: 20%;" min="1">
                                                    <button class="btn btn-warning" type="submit" style="position: absolute; right: -170px;">Sửa</button>
                                                </form>
                                            </td>
                                            <td class="total-pr">
                                                <p>
                                                    {{ number_format($item->price_product * $item->quantity) }} VNĐ
                                                    @php
                                                        $total += $item->price_product * $item->quantity; 
                                                    @endphp
                                                </p>
                                            </td>
                                            <td class="d-flex" style="padding: 42px 0;">
                                                {{-- <a href="{{route('update_cart', $item->id)}}" class="btn btn-warning" style="margin-right: 8px">Sửa</a> --}}
                                                <form action="{{route('carts.destroy', $item->id)}}" method="post" id="form-delete{{$item->id}}">
                                                   @csrf
                                                   @method('delete')
                                                   <button class="btn btn-danger" data-id={{$item->id}}>Xoá</button>
                                                </form>
                                             </td>
                                            </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <h1>Không có sản phẩm nào</h1>
                        @endif
                    </div>
                </div>
          </div>

          <div class="row my-5">
              <div class="col-lg-8 col-sm-12"></div>
              <div class="col-lg-4 col-sm-12">
                  <div class="order-box">
                      <h3>Đặt hàng</h3>
                      <hr>
                      <div class="d-flex gr-total">
                          <h5>Tổng tiền: </h5>
                          <div class="ml-auto h5"> {{ number_format($total) }} VNĐ</div>
                      </div>
                      <hr> </div>
              </div>
              <div class="col-12 d-flex shopping-box"><a 
                href="{{route('payment.index')}}" 
                class="ml-auto btn hvr-hover">
                Thanh toán
            </a> </div>
          </div>

      </div>
  </div>
  <!-- End Cart -->
@endsection