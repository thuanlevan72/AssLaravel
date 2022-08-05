@extends('frontend.layout.main')
@section('content')
<link rel="stylesheet" href="{{asset('didongviet/frontend/cart.css')}}">
<link rel="stylesheet" href="{{asset('didongviet/frontend/formCart.css')}}">
<style>
    @media (max-width: 500px) {
  main {
    width: 100%;
  }
  main .top-cart .box-fun {
    width: 90%;
    margin: 0 5%;
    -webkit-column-gap: 2%;
            column-gap: 2%;
  }
  main .top-cart .box-fun .text1 {
    font-size: 18px;
  }
  main .order {
    -ms-grid-columns: 1fr;
        grid-template-columns: 1fr;
    row-gap: 20px;
    width: 98%;
    margin: 0 1%;
  }
  main .order .left-order {
    padding: 0;
    border-right: none;
  }
  main .order .left-order table {
    width: 97%;
    margin-left: 3%;
  }
  main .order .left-order table thead tr th {
    font-size: 14px;
  }
  main .order .left-order table tbody tr td {
    font-size: 10px;
  }
  main .order .left-order table tbody tr .tru {
    width: 55px;
  }
  main .order .left-order table tfoot tr td button {
    width: 40%;
    height: auto;
  }
  main .order .right-order table {
    width: 90%;
    margin: 5%;
  }
  main .order .right-order table thead tr th {
    font-size: 16px;
  }
  main .order .right-order table tbody tr td {
    font-size: 14px;
  }
  main .order .right-order table tfoot tr td button {
    font-size: 12px;
  }
  main .form-bottom {
    width: 100%;
  }
  main .form-bottom form {
    padding: 10px 0;
    -ms-grid-columns: 1fr;
        grid-template-columns: 1fr;
  }
  main .form-bottom form .tt-order {
    width: 100%;
    margin: 0 0%;
  }
  main .form-bottom form .tt-order .text-title p {
    font-size: 18px;
    padding-bottom: 10px;
  }
  main .form-bottom form .tt-order table thead tr th {
    font-size: 16px;
    padding-bottom: 10px;
  }
  main .form-bottom form .tt-order table tbody tr td {
    font-size: 15px;
    padding-bottom: 10px;
  }
  main .form-bottom form .tt-order table tfoot tr th {
    font-size: 15px;
    padding-bottom: 10px;
  }
  main .form-bottom form .tt-order .buttons a button {
    font-size: 13px;
  }
  main .form-bottom form .tt-order .text-tb p {
    font-size: 13px;
  }
  main .abc {
    margin: 0;
  }
  main .abc p {
    font-size: 16px;
    padding: 5px 0;
  }
  main .abc a button {
    width: 50%;
    margin: 10px 25%;
  }
}
/*# sourceMappingURL=tnl_order.css.map */
</style>
<link rel="stylesheet" href="../responsive_user/tnl_order.css">
<main>
@php
session_start();
// unset($_SESSION['cart']);
@endphp
    <div class="top-cart">
        <div class="box-fun">
            <div class="text1">
                <p style="color:#333; text-decoration: underline;">Giỏ hàng</p>
            </div>
            <div class="text1">
                <p style="color:#333; text-decoration: underline;">Tiến hành thanh toán</p>
            </div>
            <div class="text1">
                <p>Hoàn thành</p>
            </div>
        </div>
    </div>
    <div class="form-bottom">
        <form action="{{route('Getcheckout')}}" method="POST">
          @csrf
            <div class="form">
                <h1>Thông tin Thanh toán</h1>
                <div class="form-group">
                  <label for="">Tên người đặt</label>
                  <input type="text" name="name" id="" class="form-control" value="{{old('name')}}"placeholder="nhập vào tên người đặt" aria-describedby="helpId" required>
                  <small id="helpId" class="text-muted">@error('name') {{$message}} @enderror</small>
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" name="email" id="" class="form-control" value="{{old('email')}}"placeholder="nhập vào email người đặt" aria-describedby="helpId" required>
                  <small id="helpId" class="text-muted">@error('email') {{$message}} @enderror</small>
                </div>
                <div class="form-group">
                  <label for="">Địa chỉ</label>
                  <input type="address" name="address" id="" class="form-control" value="{{old('address')}}" placeholder="nhập vào địa chỉ giao hàng" aria-describedby="helpId" required>
                  <small id="helpId" class="text-muted">@error('address') {{$message}} @enderror</small>
                </div>
                <div class="form-group">
                  <label for="">Số điện thoại</label>
                  <input type="text" name="phone" id="" class="form-control" value="{{old('phone')}}" placeholder="nhập vào số điện thoại" aria-describedby="helpId" required>
                  <small id="helpId" class="text-muted">@error('phone') {{$message}} @enderror</small>
                </div>
            </div>
            <div class="tt-order">
                <div class="text-title">
                    <p>Đơn hàng của bạn</p>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>sản phẩm</th>
                        <th class="right-center">Tạm Tính</th>
                    </tr>
                    </th>
                    <tbody>
                    <?php
                    if(isset($_SESSION['cart'])){
                        foreach($_SESSION['cart'] as $val => $key){
                    
                    ?>
                    <tr>
                        <td><?php  echo $_SESSION['cart'][$val]['name_product']; ?>&nbsp;&nbsp;  ×<?php  echo $_SESSION['cart'][$val]['quantity']; ?></td>
                        <td class="right-center"><?php echo  number_format($_SESSION['cart'][$val]['price'] * $_SESSION['cart'][$val]['quantity']); ?> ₫</td>
                    </tr>
                    <?php }} ?>

                    </tbody>
                   <tfoot>
                   <tr>
                        <th>Tạm tính:</th>
                        <th class="right-center "><?php echo number_format($_SESSION['tong']); ?> ₫</th>
                    </tr>
                   <tr>
                        <th class="end">Tổng:</th>
                        <th class="right-center end" style="width: 148px;"><?php echo number_format($_SESSION['tong']); ?> ₫</th>
                    </tr>
                   </tfoot>
                </table>
                <div class="buttons">
                    <button type="submit" name="submit">Đặt ngay</button>
                </div>
                <div class="text-tb">
                    <p>Thông tin cá nhân của bạn sẽ được sử dụng để xử lý đơn hàng, tăng trải nghiệm sử dụng website, và cho các mục đích cụ thể khác đã được mô tả trong chính sách riêng tư của chúng tôi.</p>
                </div>
            </div>
        </form>
    </div>  
</main>
@endsection