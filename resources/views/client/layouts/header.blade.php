<!-- Start Main Top -->
<div class="main-top">
   <div class="container-fluid">
       <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="custom-select-box">
                   <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                <option>¥ VNĐ</option>
                <option>$ USD</option>
                <option>€ EUR</option>
             </select>
               </div>
               <div class="right-phone-box">
                   <p>Số điện thoại :- <a href="#"> +84 900 800 100</a></p>
               </div>
               <div class="our-link">
                   <ul>
                       <li><a href="#"><i class="fa fa-user s_color"></i> Tài khoản</a></li>
                       <li><a href="#"><i class="fas fa-location-arrow"></i> Địa chỉ</a></li>
                       <li><a href="#"><i class="fas fa-headset"></i> Liên hệ</a></li>
                   </ul>
               </div>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
               <div class="text-slid-box">
                   <div id="offer-box" class="carouselTicker">
                       <ul class="offer-box">
                           <li>
                               <i class="fab fa-opencart"></i> 20% giảm giá khi nhập mã code: F88
                           </li>
                           <li>
                               <i class="fab fa-opencart"></i> 50% - 80% giảm cho các loại rau từ FreshShop
                           </li>
                           <li>
                               <i class="fab fa-opencart"></i> Giảm mạnh 90% khi mua tại FreshShop
                           </li>
                           <li>
                               <i class="fab fa-opencart"></i> 50% ngay lúc này tại FreshShop
                           </li>
                           <li>
                            <i class="fab fa-opencart"></i> 20% giảm giá khi nhập mã code: F88
                        </li>
                           <li>
                            <i class="fab fa-opencart"></i> 50% - 80% giảm cho các loại rau từ FreshShop
                        </li>
                           <li>
                            <i class="fab fa-opencart"></i> Giảm mạnh 90% khi mua tại FreshShop
                        </li>
                           <li>
                               <i class="fab fa-opencart"></i> Off 50%! Shop Now 
                           </li>
                       </ul>
                   </div>
               </div>
               <div style="position: absolute; right: 20px; width: 20%; top: 0; height: 100%; line-height: 18px;">
                    {{-- @if (Route::has('login'))
                        <div class="hidden px-6" style="color:aliceblue;">
                            @auth
                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline text-white" style="width: 100px;">Trang chủ</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Đăng nhập</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Đăng ký</a>
                                @endif
                            @endauth
                        </div>
                    @endif --}}
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        <ul class="d-flex justify-content-between" style="flex-direction: row-reverse;">
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                                </li>
                            @endif

                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                                </li>
                            @endif    
                        </ul>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white d-flex justify-content-end" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-black" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Đăng xuất') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
               </div>
           </div>
       </div>
   </div>
</div>
<!-- End Main Top -->

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

<!-- Start Main Top -->
<header class="main-header">
   <!-- Start Navigation -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
       <div class="container">
           <!-- Start Header Navigation -->
           <div class="navbar-header">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
               <i class="fa fa-bars"></i>
           </button>
               <a class="navbar-brand" 
                href="{{route('home')}}"
               ><img src="{{asset('client/images/logo.png')}}" class="logo" alt=""></a>
           </div>
           <!-- End Header Navigation -->

           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="navbar-menu">
               <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                   <li class="nav-item active"><a class="nav-link" href="index.html">Trang chủ</a></li>
                   <li class="nav-item"><a class="nav-link" href="about.html">Thông tin</a></li>
                   <li class="nav-item"><a class="nav-link" 
                        href="{{route('shop.index')}}"
                        >Cửa hàng</a>
                    </li>
                   <li class="nav-item"><a class="nav-link" href="gallery.html">Tham quan</a></li>
                   <li class="nav-item"><a class="nav-link" href="contact-us.html">Liên hệ</a></li>
               </ul>
           </div>
           <!-- /.navbar-collapse -->

           <!-- Start Atribute Navigation -->
           <div class="attr-nav">
               <ul>
                   <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                   <li class="side-menu">
                <a href="#">
                    <i class="fa fa-shopping-bag"></i>
                    <span class="badge" style="color: white; padding: 2px; background-color: red; border-radius: 8px;">
                        {{ count((array) session('cart')) }}
                    </span>
                    <p>Giỏ hàng</p>
                </a>
             </li>
               </ul>
           </div>
           <!-- End Atribute Navigation -->
       </div>
       <!-- Start Side Menu -->
       <div class="side">
           <a href="#" class="close-side"><i class="fa fa-times"></i></a>
           <li class="cart-box">
               <ul class="cart-list">
                    @if (session('cart'))
                        @foreach (session('cart') as $id => $details)
                            <li>
                                <a href="#" class="photo"><img src="{{asset('images/'.$details['image'])}}" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">{{$details['name']}} </a></h6>
                                <p>{{$details['quantity']}}x - <span class="price">{{$details['price']}} VNĐ</span></p>
                            </li>
                        @endforeach
                    @endif

                    @php $total = 0; @endphp
                    @foreach ((array) session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp
                    @endforeach
                
                   <li class="total">
                       <a 
                            href="{{route('carts.index')}}"
                            class="btn btn-default hvr-hover btn-cart">
                            Xem
                        </a>
                       <span class="float-right"><strong>Total: </strong> {{$total}} VNĐ</span>
                   </li>
               </ul>




           </li>
       </div>
       <!-- End Side Menu -->
   </nav>
   <!-- End Navigation -->
</header>
<!-- End Main Top -->

<!-- Start Top Search -->
<div class="top-search">
   <div class="container">
       <div class="input-group">
           <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <form action="{{route('search-shop')}}" method="get" class="form-inline my-2 my-lg-0">
                @csrf
                <input id="search" name="search" class="form-control mr-sm-2" style="width: 600px" type="search" placeholder="Tìm kiếm..." aria-label="Tìm kiếm">
            </form>
           <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
       </div>
   </div>
</div>
<!-- End Top Search -->