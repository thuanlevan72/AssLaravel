@extends('backend.layouts.layout')
@section('content')



<link rel="stylesheet" href="{{asset('didongviet/backend/formcss/form.css')}}">
<main>
  <!-- -->
    <div class="top-conten">
        <p>Thêm mới user => <b style="color: #333;">Đăng ký <a href="{{route('user')}}"><i class="fas fa-times"></i></a></b></p>
    </div>
    <p></p>
    <div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="">Tên tài khoảng</label>
          <input type="text" name="name_user" id="" class="form-control" placeholder="nhập vào tên tài khoảng" aria-describedby="helpId">
          <small style="color: red;" id="helpId" class="text-muted"></small>
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="Email" name="email" id="" class="form-control" placeholder="nhập vào tên tài khoảng" aria-describedby="helpId">
          <small style="color: red;" id="helpId" class="text-muted"></small>
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="Password" name="password" id="" class="form-control" placeholder="nhập vào tên tài khoảng" aria-describedby="helpId">
          <small style="color: red;" id="helpId" class="text-muted"></small>
        </div>
        <div class="form-group">
          <label for="">Tải ảnh đại diện</label>
          <input type="file" class="form-control-file" name="image" id="" placeholder="" aria-describedby="fileHelpId">
          <small style="color: red;" id="helpId" class="text-muted"></small>
        </div>
        <div class="form-group">
          <label for="">Thiết lập quyền</label>
          <select class="custom-select" name="lever" id="">
            <option value="admin">Admin</option>
            <option selected value="user">User</option>
          </select>
        </div>
        <br>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Đăng Ký</button>
    </form>
    </div>
</main>

@endsection