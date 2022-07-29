@extends('backend.layouts.layout')
@section('content')
<style>
  nav ul .cha6 .cha1{
      color: #3bc0c3;
      background-color: #eee;
      -webkit-transition: 1.5s;
      transition: 0.5s;
  }
</style>
<link rel="stylesheet" href="{{asset('didongviet/backend/formcss/form.css')}}">
<main>
  <!-- -->
    <div class="top-conten">
        <p>Thêm mới user => <b style="color: #333;">Đăng ký <a href="{{route('user')}}"><i class="fas fa-times"></i></a></b></p>
    </div>
    <p></p>
    <div class="container">
    <form action="{{route('resdangky')}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
          <label for="">Tên tài khoảng</label>
          <input type="text" name="name" id="" value="{{$objItem->name}}" class="form-control" placeholder="nhập vào tên tài khoảng" aria-describedby="helpId">
          <small style="color: red;" id="helpId" class="text-muted">@error('name') {{$message}} @enderror</small>
        </div>
        <div class="form-group">
          <label for="">Số điện thoại</label>
          <input type="text" name="phone" id="" value="{{$objItem->phone}}" class="form-control" placeholder="nhập vào số điện thoại" aria-describedby="helpId">
          <small style="color: red;" id="helpId" class="text-muted">@error('phone') {{$message}} @enderror</small>
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="Email" name="email" id="" value="{{$objItem->email}}" class="form-control" placeholder="nhập vào tên tài khoảng" aria-describedby="helpId">
          <small style="color: red;" id="helpId" class="text-muted">@error('email') {{$message}} @enderror</small>
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="Password" name="password" id="" class="form-control" placeholder="nhập vào tên tài khoảng" aria-describedby="helpId">
          <small style="color: red;" id="helpId" class="text-muted">@error('password') {{$message}} @enderror</small>
        </div>
        <div class="form-group">
          <label for="">Tải ảnh đại diện</label>
          <input type="file" class="form-control-file"  name="image" id="" placeholder="" aria-describedby="fileHelpId">
          <br>
          <img src="{{asset('image/image_user/')}}/{{$objItem->imageUser}}" width="200px" height="auto" alt="">
          <small style="color: red;" id="helpId" class="text-muted">@error('image') {{$message}} @enderror</small>
        </div>

        <div class="form-group">
          <label for="">Thiết lập quyền</label>
          <select class="custom-select" name="lever" id="">
            <option value="1">Admin</option>
            <option selected value="0">User</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Thiết lập trạng thái</label>
          <select class="custom-select" name="status" id="">
            <option selected value="1">Hiện</option>
            <option  value="0">Ẩn</option>
          </select>
        </div>
        <br>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Đăng Ký</button>
    </form>
    </div>
</main>

@endsection