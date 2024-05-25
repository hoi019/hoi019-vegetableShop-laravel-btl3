@extends('client.layouts.app')
@section('title', 'Thanh toán')
@section('content')
    <!-- Start All Title Box -->
    <div class="all-title-box">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h2>Thanh toán</h2>
                  <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Cửa hàng</a></li>
                      <li class="breadcrumb-item active">Thanh toán</li>
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
              <div class="col-sm-6 col-lg-6 mb-3">
                  <div class="checkout-address">
                      <div class="title-left">
                          <h3>Thông tin hoá đơn</h3>
                      </div>
                      <form action="" class="needs-validation" novalidate>
                          <div class="mb-3">
                              <label for="username">Tên người nhận:</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="username" placeholder="" required>
                                  <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                              </div>
                          </div>
                          <div class="mb-3">
                              <label for="address">Địac chỉ:</label>
                              <input type="text" class="form-control" id="address" placeholder="" required>
                              <div class="invalid-feedback"> Please enter your shipping address. </div>
                          </div>
                          <div class="mb-3">
                              <label for="address2">Số điện thoại:</label>
                              <input type="text" class="form-control" id="address2" placeholder=""> </div>
                          <div class="title"> <span>Hình thức thanh toán:</span> </div>
                          <div class="d-block my-3">
                              <div class="custom-control custom-radio">
                                  <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                  <label class="custom-control-label" for="credit">Chuyển khoản</label>
                              </div>
                              <div class="custom-control custom-radio">
                                  <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                  <label class="custom-control-label" for="debit">Thanh toán tại nhà</label>
                              </div>
                          </div>
                          
                          <hr class="mb-1"> 
                        </form>
                  </div>
              </div>
              <div class="col-sm-6 col-lg-6 mb-3">
                  <div class="row">
                      <div class="col-md-12 col-lg-12">
                          <div class="shipping-method-box">
                              <div class="title-left">
                                  <h3>Giao hàng</h3>
                              </div>
                              <div class="mb-4">
                                  <div class="custom-control custom-radio">
                                      <input id="shippingOption1" name="shipping-option" class="custom-control-input" checked="checked" type="radio">
                                      <label class="custom-control-label" for="shippingOption1">Giao hàng tiêu chuẩn</label> <span class="float-right font-weight-bold"></span> </div>
                                  <div class="ml-4 mb-2 small">(3-7 ngày)</div>
                                  <div class="custom-control custom-radio">
                                      <input id="shippingOption2" name="shipping-option" class="custom-control-input" type="radio">
                                      <label class="custom-control-label" for="shippingOption2">Giao hàng nhanh</label> <span class="float-right font-weight-bold"></span> </div>
                                    <div class="ml-4 mb-2 small">(2-4 ngày)</div>
                                  <div class="custom-control custom-radio">
                                      <input id="shippingOption3" name="shipping-option" class="custom-control-input" type="radio">
                                      <label class="custom-control-label" for="shippingOption3">Giao hàng hoả tốc</label> <span class="float-right font-weight-bold"></span> </div>
                                      <div class="ml-4 mb-2 small">(1 ngày)</div>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-12 col-lg-12">
                          <div class="order-box">
                              <div class="title-left">
                                  <h3>Xác nhận</h3>
                              </div>
                              <hr> 
                          </div>
                      </div>
                      <div class="col-12 d-flex shopping-box"> 
                        <form action="{{route('payment.store')}}" method="post">
                           @csrf
                           <button type="submit" class="ml-auto btn hvr-hover">Đặt hàng</button> 
                        </form>
                     </div>
                  </div>
              </div>
          </div>

      </div>
  </div>
  <!-- End Cart -->
@endsection