@extends('frontend.layout.main')

@section('content')
@include('frontend.layout.banner')

<link rel="stylesheet" href="{{asset('didongviet/frontend/home.css')}}">
<style>
    header .bottom-header .nav .nav-cc a{
        font-weight: 900;
        color: #be1e2d;
    }
    .sale-main{
        margin:30px 0;
    }
    .box-product form::-webkit-scrollbar { 
  width: 0 !important;
  display: none; 
}
.main-midder .box-product .box-div::-webkit-scrollbar { 
  width: 0 !important;
  display: none; 
}

    .product-top::-webkit-scrollbar {
                width: 0 !important;
                display: none;
            }
    .content-sale::-webkit-scrollbar {
                width: 0 !important;
                display: none;
            }
</style>

<link rel="stylesheet" href="../css_user/main_user.css">


<div class="product-top">
@foreach($showProductTop10 as $item)
    <div class="box-product">
        <div class="img-product">
           <a href="chitietsp?id_san_pham="> <img src="{{asset('image/image_product/')}}/{{$item->anh_san_pham}}" alt=""></a>
        </div>
        <a href="chitietsp?id_san_pham=" style="text-decoration:none">
        <div class="product-text">
           {{$item->ten_san_pham}} 
        <br> 
        </div>
        </a>
    </div>
@endforeach
</div>
<main>
    <div class="sale-main">
        <div class="text-sale">
            <p>Bão sale của tháng</p>
        </div>
        <div class="content-sale">
            @foreach($showProductTop5OfMonth as $item)
            <div class="box-sale">
                <div class="text-box">
                    <p>Giảm {{number_format(($item->gia_san_pham * $item->gia_khuyen_mai) / 100)}} vnđ</p>
                </div>
                <div class="image-sale">
                   <a href="chitietsp?id_san_pham="><img src="{{asset('image/image_product/')}}/{{$item->anh_san_pham}}" alt=""></a>
                </div>
                <div class="text-price">
                    <p class="name-sale">{{$item->ten_san_pham}}</p>
                    <br>
                    <p class="new-price">
                        {{number_format($item->gia_san_pham - (($item->gia_san_pham * $item->gia_khuyen_mai) / 100))}} đ
                    </p>
                    <strike class="odd-price"> {{number_format($item->gia_san_pham)}} ₫</strike>

                </div>
            </div>
          @endforeach
        </div>
    </div>
    <div class="banner-3">
        <a href=""><img src="https://cdn.didongviet.vn/pub/media/mageplaza/bannerslider/banner/image/t/o/tong-xa-kho-didongviet-banner-1-768x150.jpg" alt=""></a>
        <a href=""><img src="https://cdn.didongviet.vn/pub/media/mageplaza/bannerslider/banner/image/7/6/768x150_14_.png" alt=""></a>
    </div>
    <div class="main-midder">
        <div class="banner-4">
            <img src="https://cdn.didongviet.vn/pub/media/ddv/244x524.png" alt="">
        </div>
        <div class="box-product">
            <form action="sanpham" method="GET">
         @foreach($type_product as $item)
                <button type="submit" name="type_product" value="{{$item->id}}">{{$item->ten_loai_san_pham}}</button>
        @endforeach
        
            </form>
            <div class="box-div">
           {{-- {{dd($showProductPhuKienTop4)}} --}}
           @foreach($showProductPhuKienTop4 as $item)
               <div class="box">
               <div class="free-price">
                  
                    <p>Giảm {{$item->gia_khuyen_mai}}%</p>
                
                </div>
                <div class="img-product">
                    <a href="chitietsp?id_san_pham="><img src="{{asset('image/image_product/')}}/{{$item->anh_san_pham}}" alt=""></a>
                </div>
                <div class="text-product-price">
                    <a href="chitietsp?id_san_pham=" style="text-decoration: none;">
                    <p class="name-product" >
                        {{$item->ten_san_pham }}                    
                    </p>
                    </a>
                    <p class="price-product">
                        {{number_format($item->gia_san_pham - (($item->gia_san_pham * $item->gia_khuyen_mai) / 100))}} ₫ &nbsp;&nbsp; <strike class="odd-price">  {{$item->gia_khuyen_mai > 0 ? number_format($item->gia_san_pham).' đ': '' }} ₫  </strike>
                    </p>
                </div>
               </div>
            @endforeach 
            </div>
        </div>
    </div>
    <div class="sale-main">
        <div class="text-sale">
            <p>Top sản phẩm được yêu thích</p>
        </div>
        <div class="content-sale"  >
            
       @foreach($showProductTop5 as $item)
            <div class="box-sale">
                <div class="text-box-2">
                    <p>#{{$loop->index+1}}</p>
                </div>
                <div class="image-sale">
                    <a href="chitietsp?id_san_pham="><img src="{{asset('image/image_product/')}}/{{$item->anh_san_pham}}" alt=""></a>
                </div>
                <div class="text-price">
                    <a href="chitietsp?id_san_pham=" style="text-decoration: none"><p class="name-sale">{{$item->ten_san_pham }}</p></a>
                    <br>
                    <p class="new-price">
                        {{number_format($item->gia_san_pham - (($item->gia_san_pham * $item->gia_khuyen_mai) / 100))}} ₫
                    </p>
                    <strike class="odd-price">{{$item->gia_khuyen_mai > 0 ? number_format($item->gia_san_pham).' đ': '' }}</strike>
                </div>
            </div>
         @endforeach
       
        </div>
    </div>
    <div class="banner-3">
        <a href=""><img src="https://cdn.didongviet.vn/pub/media/mageplaza/bannerslider/banner/image/h/o/hot-sale-sieu-pham-z-flip-fold-didongviet.jpg" alt=""></a>
        <a href=""><img src="https://cdn.didongviet.vn/pub/media/mageplaza/bannerslider/banner/image/s/a/samsung-galaxy-wacth-4-didongviet.jpg" alt=""></a>
    </div>
    <div class="sale-main" >
        <div class="text-sale">
            <p>Top sản phẩm mới nhất</p>
        </div>
        <div class="content-sale" >
      @foreach ($ShowTop5NewProduct as $item)
            <div class="box-sale" >
                <div class="text-box-2">
                    <p>#{{$loop->index+1}}</p>
                </div>
                <div class="image-sale">
                <a href="chitietsp?id_san_pham="><img src="{{asset('image/image_product/')}}/{{$item->anh_san_pham}}" alt=""></a>
                </div>
                <div class="text-price">
                <a href="chitietsp?id_san_pham=" style="text-decoration: none"><p class="name-sale">{{$item->ten_san_pham}}</p></a>
                    <br>
                    <p class="new-price">
                        {{number_format($item->gia_san_pham - (($item->gia_san_pham * $item->gia_khuyen_mai) / 100))}} ₫
                    </p>
                    <strike class="odd-price">{{$item->gia_khuyen_mai > 0 ? number_format($item->gia_san_pham).' đ': '' }}</strike>

                </div>
            </div>
    @endforeach
        </div>
    </div>
    <div class="banner-4">
       <div class="box-banner-2">
       <div class="box-contact">
            <div class="image-contact">
                <p><i class="fas fa-shipping-fast"></i></p>
            </div>
            <div class="text-contact">
                <p class="heading">
                FREE SHIP KHẮP NƠI
                </p>
                <p class="text-sup">
                giảm 80% phí ship đối với các đơn hàng mua tại thuận lê và giảm 100% nếu đơn hàng có mặt tại Hà Nội và Thành Phố Hồ Chí Minh
                </p>
            </div>
        </div>
        <div class="box-contact">
            <div class="image-contact">
                <p><i class="fab fa-apple"></i></p>
            </div>
            <div class="text-contact">
                <p class="heading">
                SẢN PHẨM CHÍNH HÃNG APPLE
                </p>
                <p class="text-sup">
                là 1 trong những chuỗi siêu thị điện máy đầu tiên của Việt Nam được phân phối chính hãng của apple
                </p>
            </div>
        </div>
        <div class="box-contact">
            <div class="image-contact">
                <p><i class="fas fa-headset"></i></p>
            </div>
            <div class="text-contact">
                <p class="heading">
                HỘ TRỢ 24/7 
                </p>
                <p class="text-sup">
                Mọi sản phẩm được mua tại shop luôn được hỗ trợ tận răng từ lúc mua đến lúc về nhà khi bạn có sản phẩm
                </p>
            </div>
        </div>
       </div>
    </div>
</main>
@endsection
