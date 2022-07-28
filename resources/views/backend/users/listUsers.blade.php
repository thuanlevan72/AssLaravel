@extends('backend.layouts.layout')
@section('content')
<link rel="stylesheet" href="{{asset('didongviet/backend/tablecss/tablde.css')}}">
<main>
    @php
    $objUser = \Illuminate\Support\Facades\Auth::user();
    @endphp
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
                <th>phone</th>
                <th>Phân quyền</th>
                <th>chức năng</th>
                <th>chi tiết</th>
            </tr>
           </thead>
            <tbody>
              @foreach($list as $item) 
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$item->name}} <img src="../image/image_user/{{$item->imageUser}}" width="30px" height="30px" alt=""></td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone }}</td>
                <td><p class="@if($item->level == 1) qt @endif">@if($item->level == 1) admin @endif</p></td>
                <td class="cn"><a href="{{ route('resUpdate', ['id' => $item->id]) }}"><button class="update">Sửa</button></a><a><button onclick="delete_user()" class="delete">Xóa</button></a></td>
                <td><a href="./ct_user.php?id="><button class="ct">Xem Ngay</button></a></td>
            </tr>
            @endforeach
        </tbody>
            @if(count($list) <= 0)
            <tr>
                <td colspan="4">không có dữ liệu nào tồn tại</td>
                <td colspan="3"><a href="./user.php"><button>reset</button></a></td>
            </tr>
       @endif
            </tbody>
            <tfoot>
                <!-- <tr>
                     <td colspan="7"><a href="./resgister.php"><button style="height: 30px;">Thêm mới user</button></a></td> 
                </tr> -->
            </tfoot>
        </table>
        <div class="text-center">
            {{$list->appends($extParams)->links()}}
        </div>

    </div>
</main>
@endsection
