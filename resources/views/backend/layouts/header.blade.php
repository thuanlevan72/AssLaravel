@php
$objUser = \Illuminate\Support\Facades\Auth::user();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('didongviet/backend/reset.css')}}">
    <link rel="stylesheet" href ="{{asset('didongviet/backend/layout.css')}}">
    <style>
        .text-center .justify-between .hidden{
             display: none !important;
            width: 100%;
            height: 50px;
        }
    
        .text-center .flex {
            text-align: center;
           padding: 10px 0 0 0;
           background-color:#fff;
        }
        .text-center .flex path{
            display: none;
        }
    </style>
    <style>
        label,
    textarea {
        font-size: .8rem;
        letter-spacing: 1px;
    }
    textarea {
        padding: 10px;
        height: 80px;
        max-width: 100%;
        line-height: 1.5;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-shadow: 1px 1px 1px #999;
    }
    
    label {
        display: block;
        color: #333;
        margin-bottom: 10px;
    }
    button {
        color: #333;
    }
    </style>
</head>

<body>

    <header>
        <div class="image" style="margin-right: 20px">
            <a href="#"><img src="{{asset('image/image_user/')}}/{{$objUser->imageUser}}" alt=""></a>
            
        </div>
        <div class="name-admin">
            <p>{{$objUser->name}}</p>
        </div>
        <div class="icon-logout">
            <a href="{{route('logout')}}"><i class="fas fa-power-off"></i></a>
        </div>
       
    </header>
    <nav>
        <div class="image-logo">
           
            <img src="{{asset('image/imgae_logo/logo-ddv.png')}}" alt="">
        </div>
        <ul>
            <li class="cha"><a class="cha1" >Thống kê</a>
                <ul class="con1 ">
                    <li><a href="./admin.php">Thống kê chung trong trang</a></li>
                    <li><a href="./thong_ke_user.php">Thống kê người dùng</a></li>
                    <li><a href="./thong_ke_product.php">thống kê sản phẩm</a></li>
                    <li><a href="./thong_ke_order.php">doanh Thu</a></li>
                </ul>
            </li>
            <li ><a class="cha1" href="../html_user/home">Trang Frontend</a></li>
            <li class="cha6"><a class="cha1" href="./user.php">User</a>
            </li>
            <li class="cha2"><a class="cha1" >hàng hóa</a>
            <ul class="con3">
                    <li><a href="./type_product.php">Loại hàng hóa</a></li>
                    <li><a href="./product.php">Hàng hóa</a></li>
                    <li><a href="./comment_product.php">Bình luận theo hàng hóa</a></li>
                </ul>
        </li>
            <li class="cha3"><a class="cha1" href="./order.php">đơn hàng</a>
            <ul class="con4">
                    <!-- <li><a href="#">Đơn hàng đang chờ</a></li>
                    <li><a href="#">Đơn hàng đã hoàn thành</a></li> -->
                </ul>
        </li>
            <li class="cha3"><a class="cha1" href="./news.php">Quản lý Tin Tức</a>
        </li>
            <li class="cha4"><a class="cha1" >phản hồi</a>
            <ul class="con5">
                    <li><a href="./contact.php">Xem phản hồi</a></li>
                    <li><a href="./saen_email.php">Gủi phản hồi qua Mail</a></li>
                </ul>
        </li>
            <li class="cha5"><a class="cha1">thay đổi image</a>
            <ul class="con6">
                    <li><a href="./info.php">Thay đổi chung về info trang</a></li>
                    <li><a href="./banner.php">Thay đổi banner</a></li>
                    <li><a href="./slide.php">thay đổi slider</a></li>
                    <li><a href="#">thay đổi quảng cáo</a></li>
                </ul></li>
        </ul>
    </nav>