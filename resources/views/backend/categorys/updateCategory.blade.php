@extends('backend.layouts.layout')
@section('content')
<style>
  nav ul .cha2 .cha1{
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
        <p>Sửa mới loại => <b style="color: #333;">Sửa <a href="{{route('category')}}"><i class="fas fa-times"></i></a></b></p>
    </div>
    <p></p>
    <div class="container">
    <form action="{{route('GetUpdateCategory', ['id'=>Request()->route('id')])}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
          <label for="">Tên loại sản phẩm</label>
          <input type="text" name="name" id="" value="{{old('name') == null ? $objItem->ten_loai_san_pham :old('name')}}" class="form-control" placeholder="nhập vào tên loại sản phẩm" aria-describedby="helpId" required>
          <small style="color: red;" id="helpId" class="text-muted">@error('name') {{$message}} @enderror</small>
        </div>
        <div class="form-group">
          <label for="">Tải ảnh loại sản phẩm</label>
          <input type="file" class="form-control-file" name="image" id="" placeholder="" aria-describedby="fileHelpId">
          <small style="color: red;" id="helpId" class="text-muted">@error('image') {{$message}} @enderror</small>
          <img src="{{asset('image/image_type_product')}}/{{$objItem->anh_loai_san_pham}}" alt="" width="30%">
        </div>
        <div class="form-group">
          <label for="">Tiêu đề loại sản phẩm</label>
          <textarea name="title" id="" cols="30" rows="10">{{old('title') == null ?$objItem->tieu_de :old('title')  }}</textarea>
          <small style="color: red;" id="helpId" class="text-muted">@error('title') {{$message}} @enderror</small>
        </div>
        <br>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Sửa Thông tin</button>
    </form>
    </div>
</main>
@endsection