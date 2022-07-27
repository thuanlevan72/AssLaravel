@extends('backend.layouts.layout')
@section('content')
<link rel="stylesheet" href="{{asset('didongviet/backend/tablecss/tablde.css')}}">
<main>

<main>
    <div class="top-user">
        <div class="heading-text">
        <p>Danh sách user</p>
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
    <div class="middle-user">
    <div class="add-user">
    <a href="{{Route('dangky')}}"><button style="color: #fff;">Thêm mới user</button></a>
    <form action="" method="Google" enctype="multipart/form">
        <div class="form-group">
        <button type="submit" name="qt" value="admin">Admin</button>
        <button type="submit" name="qt" value="user">User</button>
          </select>
        </div>
    </form>
    </div>
        <table class="fixed">
           <thead>
           <tr>
                <th>STT</th>
                <th>User name</th>
                <th>Email</th>
                <th>Ngày tạo</th>
                <th>Phân quyền</th>
                <th>chức năng</th>
                <th>chi tiết</th>
            </tr>
           </thead>
            <tbody>
               
            <tr>
                <td>1</td>
                <td>lê văn thuận <img src="{{asset('image/image_user/z2660707530992_6efedaa9aa39bb2a027ceec0def08ce7.jpg')}}" width="30px" height="30px" alt=""></td>
                <td>levanthuan@gmail.com</td>
                <td>{{ date("Y-m-d")}}</td>
                <td><p class="qt">admin</p></td>
                <td class="cn"><a href="./update_user.php?id="><button class="update">Sửa</button></a><a><button onclick="delete_user()" class="delete">Xóa</button></a></td>
                <td><a href="./ct_user.php?id="><button class="ct">Xem Ngay</button></a></td>
            </tr>
            
            
            <tr>
                <td colspan="4">không có dữ liệu nào tồn tại</td>
                <td colspan="3"><a href="./user.php"><button>reset</button></a></td>
            </tr>
       
            </tbody>
            <tfoot>
                <!-- <tr>
                     <td colspan="7"><a href="./resgister.php"><button style="height: 30px;">Thêm mới user</button></a></td> 
                </tr> -->
            </tfoot>
        </table>
    </div>
</main>
@endsection
