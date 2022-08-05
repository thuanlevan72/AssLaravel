@extends('frontend.layout.main')
@section('content')
<link rel="stylesheet" href="{{asset('didongviet/frontend/cart.css')}}">
<link rel="stylesheet" href="{{asset('didongviet/frontend/formCart.css')}}">
<style>
    .form-bottom {
        width: 80%;
        margin: 0 10%;
        /* height: 300px; */
        /* background-color: #eee; */
        /* height: 500px; */
    }
    .form-bottom p{
        text-align: center;
        font-size: 25px;
        color: red;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding: 20px 0 20px 0;
        font-weight: 600;

    }
    .form-bottom button{
        width: 20%;
        height: 35px;
        margin: 20px 40%;
        border: none;
        border-radius: 10px;
        text-align:center;
        font-weight: 600;
        color: #ecf0f1;
        background-color: #3498db;
    }
</style>
<main>
    <div class="top-cart">
        <div class="box-fun">
            <div class="text1">
                <p style="color:#333; text-decoration: underline;">Giỏ hàng</p>
            </div>
            <div class="text1">
                <p style="color:#333; text-decoration: underline;">Tiến hành thanh toán</p>
            </div>
            <div class="text1">
                <p style="color:#333; text-decoration: underline;">Hoàn thành</p>
            </div>
        </div>
    </div>
    <div class="form-bottom abc">
        <p>
           Đơn hàng của bạn đã được xác nhận bởi DiDongViet
        </p>
        <p>Cảm ơn quý khách đã tin tưởng sản phẩm của chúng tôi</p>
        <p>Sản phẩm của quý khách sẽ được đên tay trong thời gian sớm nhất </p>
        <p>Vui lòng kiểm tra gmail để xem thông tin về sản phẩm</p>
        <a href="./giao_dien_chinh.php"><button>quay về trang chủ</button></a>
    </div>
    
</main>
@endsection