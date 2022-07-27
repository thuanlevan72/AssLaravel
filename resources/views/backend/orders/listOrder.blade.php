@extends('backend.layouts.layout')
@section('content')
<link rel="stylesheet" href="{{asset('didongviet/backend/tablecss/tablde.css')}}">
<?php ?>
<main>
    <div class="top-user">
        <div class="heading-text">
        <p>Danh sách đơn hàng</p>
        </div>
        <div class="input-search">
            <form action="" methods="GET" enctype="multipart/form">
            <div class="form-group">
              <input type="text" class="form-control" name="search_name" id="" aria-describedby="helpId" placeholder=" Search.......">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
        </form>
        </div>
    </div>
    <?php
    if(isset($_GET['search_name'])){
        $search = $_GET['search_name'];
    }
    ?>
    <div class="middle-user">
    <div class="add-user">
    <a><button style="color: #fff;opacity:0;"></button></a>
    <form action="" method="Google" enctype="multipart/form">
        <div class="form-group">
        <button type="submit" name="qt" value="seen">Đã xem</button>
        <button type="submit" name="qt" value="not_seen">Chưa xem</button>
          </select>
        </div>
    </form>
    <?php if(isset($_GET['qt'])){$lever = $_GET['qt'];} ?>
    </div>
        <table class="fixed">
           <thead>
           <tr>
                <th>ID</th>
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Địa chỉ giao hàng</th>
                <th>thời gian đặt hàng</th>
                <th>trạng thái</th>
                <th>xóa</th>
                <th>chi tiết</th>
            </tr>
           </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Lê Quang linh</td>
                <td>tlinh@gmail.com</td>
                <td>987612345</td>
                <td>đéo biết</td>
                <td>không bé ơi</td>
                <td style="color:;"><p style="color: red;background-color:white;" class="qt">đã xem</p></td>
                <td style="width: 30px;"><a><button style="background-color: red;color: white;" onclick="delete_user()" class="delete">Xóa</button></a></td>
                <td><a href="./ct_order.php?id="><button class="ct">Xem Ngay</button></a></td>
            </tr>
           
        
          
            <tr>
                <td colspan="6">không có dữ liệu nào tồn tại</td>
                <td colspan="3"><a href="./user.php"><button>reset</button></a></td>
            </tr>
        
            <tfoot>
                <!-- <tr>
                     <td colspan="7"><a href="./resgister.php"><button style="height: 30px;">Thêm mới user</button></a></td> 
                </tr> -->
            </tfoot>
        </table>
    </div>
</main>
@endsection

