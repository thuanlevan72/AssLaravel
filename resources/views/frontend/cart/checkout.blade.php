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
                <p style="color:#333; text-decoration: underline;">Gi??? h??ng</p>
            </div>
            <div class="text1">
                <p style="color:#333; text-decoration: underline;">Ti???n h??nh thanh to??n</p>
            </div>
            <div class="text1">
                <p>Ho??n th??nh</p>
            </div>
        </div>
    </div>
    <div class="form-bottom">
        <form action="{{route('Getcheckout')}}" method="POST">
          @csrf
            <div class="form">
                <h1>Th??ng tin Thanh to??n</h1>
                <div class="form-group">
                  <label for="">T??n ng?????i ?????t</label>
                  <input type="text" name="name" id="" class="form-control" value="{{old('name')}}"placeholder="nh???p v??o t??n ng?????i ?????t" aria-describedby="helpId" required>
                  <small id="helpId" class="text-muted">@error('name') {{$message}} @enderror</small>
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" name="email" id="" class="form-control" value="{{old('email')}}"placeholder="nh???p v??o email ng?????i ?????t" aria-describedby="helpId" required>
                  <small id="helpId" class="text-muted">@error('email') {{$message}} @enderror</small>
                </div>
                <div class="form-group">
                  <label for="">?????a ch???</label>
                  <input type="address" name="address" id="" class="form-control" value="{{old('address')}}" placeholder="nh???p v??o ?????a ch??? giao h??ng" aria-describedby="helpId" required>
                  <small id="helpId" class="text-muted">@error('address') {{$message}} @enderror</small>
                </div>
                <div class="form-group">
                  <label for="">S??? ??i???n tho???i</label>
                  <input type="text" name="phone" id="" class="form-control" value="{{old('phone')}}" placeholder="nh???p v??o s??? ??i???n tho???i" aria-describedby="helpId" required>
                  <small id="helpId" class="text-muted">@error('phone') {{$message}} @enderror</small>
                </div>
            </div>
            <div class="tt-order">
                <div class="text-title">
                    <p>????n h??ng c???a b???n</p>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>s???n ph???m</th>
                        <th class="right-center">T???m T??nh</th>
                    </tr>
                    </th>
                    <tbody>
                    <?php
                    if(isset($_SESSION['cart'])){
                        foreach($_SESSION['cart'] as $val => $key){
                    
                    ?>
                    <tr>
                        <td><?php  echo $_SESSION['cart'][$val]['name_product']; ?>&nbsp;&nbsp;  ??<?php  echo $_SESSION['cart'][$val]['quantity']; ?></td>
                        <td class="right-center"><?php echo  number_format($_SESSION['cart'][$val]['price'] * $_SESSION['cart'][$val]['quantity']); ?> ???</td>
                    </tr>
                    <?php }} ?>

                    </tbody>
                   <tfoot>
                   <tr>
                        <th>T???m t??nh:</th>
                        <th class="right-center "><?php echo number_format($_SESSION['tong']); ?> ???</th>
                    </tr>
                   <tr>
                        <th class="end">T???ng:</th>
                        <th class="right-center end" style="width: 148px;"><?php echo number_format($_SESSION['tong']); ?> ???</th>
                    </tr>
                   </tfoot>
                </table>
                <div class="buttons">
                    <button type="submit" name="submit">?????t ngay</button>
                </div>
                <div class="text-tb">
                    <p>Th??ng tin c?? nh??n c???a b???n s??? ???????c s??? d???ng ????? x??? l?? ????n h??ng, t??ng tr???i nghi???m s??? d???ng website, v?? cho c??c m???c ????ch c??? th??? kh??c ???? ???????c m?? t??? trong ch??nh s??ch ri??ng t?? c???a ch??ng t??i.</p>
                </div>
            </div>
        </form>
    </div>  
</main>
@endsection