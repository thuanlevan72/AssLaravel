@php
$objUser = \Illuminate\Support\Facades\Auth::user();
@endphp
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiDongViet</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="icon" href="../image/imgae_logo/ath-y-nghia-logo-Apple(2).png" type="image/x-icon" />
     <link rel="shortcut icon" href="../image/imgae_logo/ath-y-nghia-logo-Apple(2).png" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('didongviet/frontend/reset.css')}}">
    <link rel="stylesheet" href="{{asset('didongviet/frontend/layout_user.css')}}">
    <link rel="stylesheet" href="{{asset('didongviet/frontend/responsive/header.css')}}">
    <link rel="stylesheet" href="{{asset('didongviet/frontend/responsive/banner.css')}}">
    <link rel="stylesheet" href="{{asset('didongviet/frontend/responsive/footer.css')}}">
    <link rel="stylesheet" href="../scss_style/layout-user.css">

    <link rel="stylesheet" href="../responsive_user/header_responsive.css">
    <link rel="stylesheet" href="../responsive_user/banner_resposive.css">
    <link rel="stylesheet" href="../responsive_user/footer_responsive.css">
    <link rel="stylesheet" href="../responsive_user/giaoDienChinh.css">

</head>
<body>
    <header>
        <div class="top-header">
            <img src="{{asset('image/image_banner/header-giao-nhanh-an-toan.png')}}" alt="">
        </div>
        <div class="main-header">
            <div class="logo">

               <a href="./giao_dien_chinh.php"><img src="{{asset('image/imgae_logo/logo-ddv.png')}}" alt=""></a>
            </div>
            <div class="input_search">
                <form action="{{route('product')}}" method="GET">
                    <input type="text" name="search_name" placeholder="tìm kiếm theo tên sản phẩm" required>
                    <button type="submit" name="" class="btn btn-search"><i class="fas fa-search"></i></button>
                </form>
                <style>
                    .input_search form input[type="text"]:focus{
                        border: none;
                        background-color: white;
                        outline: none;
                    }
                </style>
            </div>
            <div class="div-text">
                <div class="div-1">
                <p><i class="fas fa-phone"></i>&nbsp;&nbsp;Liên Hệ: 0352988596</p>
                </div>
                <div class="div-2">
                 <a href="taikhoang"><p style="text-align: center;">&nbsp;@if($objUser)<img style="width: 30px; height: 30px; border: 0.5px solid #ddd;" src="../image/image_user/{{$objUser->imageUser}}" alt="">&nbsp;&nbsp;<a href=""> {{$objUser->name}}</a> @else <i class="fas fa-user-circle"></i>&nbsp;&nbsp; <a href="{{route('loginFront')}}">Đăng Nhập / Đăng Ký</a>  @endif</p></a> 
                
                </div>
            </div>
        </div>
        <div class="bottom-header">
            <div class="icon-bar">
            <i class="fas fa-bars"></i>
            </div>
            <style>
                .icon-bar{
                    display: none;
                }
            </style>
            <ul class="nav">
                <li class="nav-cc"><a href="{{route('home')}}">Trang chủ</a></li>
                <li class="nav-sp"><a href="{{route('product')}}">sản phẩm</a></li>
                <li class="nav-lsp"><a href="loai_san_pham">loại sản phẩm</a></li>
                <li class="nav-tt"><a href="tintuc">tin tức</a></li>
                <li class="nav-lh"><a href="lienhe">liên hệ</a></li>
               @if(isset($objUser))
               @if($objUser->lever == 0)
                 <li><a href="{{route('user')}}">Quản trị</a></li>
               @endif
               @endif
            </ul>
            <div class="cart">
            <a href="{{route('cart')}}"><button>Giỏ hàng<div class="div-3">
                <i class="fas fa-shopping-bag"></i>
                </div></button></a>
            </div>
        </div>
    </header>
    
    
