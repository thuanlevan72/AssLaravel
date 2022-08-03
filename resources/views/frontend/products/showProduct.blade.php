@extends('frontend.layout.main')

@section('content')
@include('frontend.layout.banner')
<style>
    header .bottom-header .nav .nav-sp a{
        font-weight: 900;
        color: #be1e2d;
    }
</style>
<link rel="stylesheet" href="{{asset('didongviet/frontend/product.css')}}">
<link rel="stylesheet" href="{{asset('didongviet/frontend/responsive/product.css')}}">
<style>
   .justify-between .hidden{
         display: none !important;
        width: 100%;
        height: 50px;
    }

     .flex {
        text-align: center;
       padding: 10px 0 0 0;
       background-color:#fff;
    }
    .text-center .flex path{
        display: none;
    }
</style>
<main>

    <!-- <div class="link-nav">
        <p>Trang chủ -> sản phẩm</p>
    </div> -->
    <div class="top-main">
        <div class="type-sp">
            
            <form action="" method="GET">
                @foreach($type_product as $item)
                <button type="submit" name="search_name" value="{{$item->id}}">{{$item->ten_loai_san_pham}}</button>
                @endforeach
               
                <button style="border: 1px solid red;" type="submit" name="" value="">Bạn đang tìm kiếm  ✕</button>
               
            </form>
        </div>
        <div class="price-sp">
             <div class="texth1">
                <p>Mức giá</p>
             </div>
            <form action=""  method="GET">
            <button type="submit" name="price_product" value="10000000">Từ 10 triệu trở xuống</button>
                <button type="submit" name="price_product" value="10000000-20000000">Từ 10 triệu đến 20 triệu</button>
                <button type="submit" name="price_product" value="20000000-25000000">Từ 20 triệu đến 25 triệu</button>
                <button type="submit" name="price_product" value="25000000-35000000">Từ 25 đến 35 triệu</button>
                <button type="submit" name="price_product" value="35000000">Từ 35 triệu trở lên</button>
              
                <button style="border: 1px solid red;" type="submit" name="" value="35000000">Reset</button>
              
              
                <button style="border: 1px solid red;" type="submit" name="" value="35000000">Bạn đang tìm kiếm ✕</button>
         
            </form>
        </div>
    </div>
    <div class="middle-main">
        <div class="header_product">
            <p>Sản phẩm</p>
        </div>
        <div class="bottom_product">
        @foreach($list as $item)
            <div class="box_product">
            <div class="box_price">
                @if($item->gia_khuyen_mai > 0 )
                    <p>Giảm {{number_format(($item->gia_san_pham * $item->gia_khuyen_mai) / 100)}} đ</p>
                @endif
            </div>
                <div class="image_product">
                <a href="chitietsp?id_san_pham="> <img src="{{asset('image/image_product')}}/{{$item->anh_san_pham}}" alt=""></a>
                </div>
                <div class="name_product">
                   <a href="chitietsp?id_san_pham="><p class="name-sale">{{$item->ten_san_pham}}</p></a>
                </div>
                <div class="text_price">
                    <p class="price"> {{number_format($item->gia_san_pham - (($item->gia_san_pham * $item->gia_khuyen_mai) / 100))}} ₫</p>
                    @if($item->gia_khuyen_mai > 0 )
                    <p><strike>{{number_format($item->gia_san_pham)}} ₫</strike></p>
                    @endif
                </div>
                <div class="box_text">
                    <p>Có hàng ngay - Không cần đợi</p>
                </div>
            </div>
  
       @endforeach
       @if(count($list) <= 0)
           <div class="box_product">
            <p style="font-size:16px;font-weight:bold;color:red;">Không có dữ liệu về sản phẩm này</p>
            </div>
  
           <!-- end div -->
        </div>
        @endif
     <div class="end_main" style=" width: 500%">
   
     
         <a href="?phan_trang"> {{ $list->links() }} </a>
 
    </div>
    </div>
   
</main>
@endsection