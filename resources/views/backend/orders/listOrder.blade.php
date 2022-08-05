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
   
    </div>
        <table class="fixed">
           <thead>
           <tr>
                <th>ID</th>
                <th>Mã hóa đơn</th>
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
                @foreach($list as $item)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$item->ma_hoa_don}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td style="width: 280px;">{{$item->dia_chi}}</td>
                <td>{{$item->created_at}}</td>
                <td style="color:;"><p style="color: red;background-color:white;" class="{{$item->trang_thai == 1 ?'qt': ''}}">{{$item->trang_thai == 1 ?'đã xác nhận': ''}}</p></td>
                <td  style="width: 40px;"><a><button style="background-color: red;color: white;" onclick="delete_user()" class="delete">Xóa</button></a></td>
                <td><a href="{{route('getCtOrder',['id'=>$item->id])}}"><button class="ct">Xem Ngay</button></a></td>
            </tr>
           @endforeach
        
          @if(count($list) <= 0)
            <tr>
                <td colspan="6">không có dữ liệu nào tồn tại</td>
                <td colspan="3"><a href="./user.php"><button>reset</button></a></td>
            </tr>
        @endif
            <tfoot>
                <!-- <tr>
                     <td colspan="7"><a href="./resgister.php"><button style="height: 30px;">Thêm mới user</button></a></td> 
                </tr> -->
            </tfoot>
        </table>
        <div class="text-center">
            {{ $list->links() }}
        </div>
    </div>
</main>
@endsection

