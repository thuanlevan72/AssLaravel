@extends('frontend.layout.main')
@section('content')
<style>
    tr td button {
        border:none;
        background-color:white;
        cursor:pointer;
    }
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
@php
session_start();
// unset($_SESSION['cart']);
@endphp
<link rel="stylesheet" href="{{asset('didongviet/frontend/cart.css')}}">
<link rel="stylesheet" href="../responsive_user/tnl_order.css">
<main>
    <div class="top-cart">
        <div class="box-fun">
            <div class="text1">
                <p style="color:#333;text-decoration: underline;" >Giỏ hàng</p>
            </div>
            <div class="text1">
                <p>Tiến hành thanh toán</p>
            </div>
            <div class="text1">
                <p>Hoàn thành</p>
            </div>
        </div>
    </div>
    <div class="order">
        <div class="left-order">
            <table>
                <thead>
                    <tr>
                    <th>sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tạm Tính</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                     $_SESSION['tong']  = 0;
                    if(isset($_SESSION['cart'])){
                        foreach($_SESSION['cart'] as $val => $key){
                    
                    ?>
                    <tr>
                        <td class="sp"><a href="?xoa=<?php echo $val; ?>"><i class="fas fa-times"></i></a>&nbsp;<img src="../image/image_product/<?php  echo $_SESSION['cart'][$val]['image_product']; ?>" alt="">&nbsp;<a><?php echo $_SESSION['cart'][$val]['name_product']; ?></a></td>
                        <td><?php echo number_format($_SESSION['cart'][$val]['price']); ?>đ</td>
                        <td class="tru"><a href="?tru=<?php echo $val; ?>"><button style="color: red; font-size: 20px">-</button></a> <?php echo $_SESSION['cart'][$val]['quantity']; ?> <a href="?cong=<?php echo $val; ?>"><button style="color: red; font-size: 20px">+</button></a></td>
                        <td><?php echo  number_format($_SESSION['cart'][$val]['price'] * $_SESSION['cart'][$val]['quantity']); ?>đ</td>
                        <?php if(($_SESSION['cart'][$val]['price'] * $_SESSION['cart'][$val]['quantity']) > 0){
                            $_SESSION['tong'] += ($_SESSION['cart'][$val]['price'] * $_SESSION['cart'][$val]['quantity']);
                        }else{
                            $_SESSION['tong'] = 0;
                        } ?>
                    </tr>
                    <?php }} ?>
                    <?php
                    if(isset($_GET['xoa'])){
                        unset($_SESSION['cart'][$_GET['xoa']]);
                    ?>
                    <script>
                        window.location="../cart";
                    </script>
                    <?php
                    }
                     ?>
                     <?php
                     if(isset($_GET['cong'])){
                        var_dump($_SESSION['cart'][$_GET['cong']]['quantity']++);
                      ?>
                       <script>
                          
                        window.location="../cart";
                    </script>
                      <?php
                        }else if(isset($_GET['tru'])){
                            var_dump($_SESSION['cart'][$_GET['tru']]['quantity']--);
                            if($_SESSION['cart'][$_GET['tru']]['quantity'] <= 0){
                                unset($_SESSION['cart'][$_GET['tru']]);
                            }
                       ?>
                       <script>
                        
                            window.location="../cart";
                    </script>
                       <?php
                        }
                        ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" align="left" valign=""><a href="../"><button>Quay về trang chính</button></a></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="right-order">
            <!-- <div class="title-text">
                <h1>Cộng giỏ hàng&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tổng</h1>
            </div>
            <div class="tam-tinh">
                <p class="price-1">Tạm tính&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo number_format($_SESSION['tong']); ?> Đ</p>
                <p class="price-2">Tổng&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo number_format($_SESSION['tong']); ?> Đ</p>
            </div>
            <div class="thanh-toan">
                <?php if($_SESSION['tong'] > 0){ ?> <a href="./ht_orders.php"><button>Tiến hành Thanh Toán</button></a> <?php } ?>
            </div>
            
        </div> -->
        <Table>
            <thead>
                <tr>
                    <th class="text-left">Cộng giỏ hàng</th>
                    <th class="text-center">Tổng </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-left bold">Tạm tính:</td>
                    <td class="text-center"><?php echo number_format($_SESSION['tong']); ?> Đ</td>
                </tr>
                <tr>
                    <td class="text-left bold">Tổng: </td>
                    <td class="text-center"><?php echo number_format($_SESSION['tong']); ?> Đ</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2"><?php if($_SESSION['tong'] > 0){ ?> <a href="{{route('checkout')}}"><button>Tiến hành Thanh Toán</button></a> <?php } ?></td>
                </tr>
            </tfoot>
        </Table>
    </div>
</main>
@endsection