@extends('backend.layouts.layout')
@section('content')
<link rel="stylesheet" href="{{asset('didongviet/backend/formcss/form.css')}}">
<main>
  <!-- -->
    <div class="top-conten">
        <p>Sửa mới loại => <b style="color: #333;">Thêm <a href="{{route('category')}}"><i class="fas fa-times"></i></a></b></p>
    </div>
    <p></p>
    <div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
          <label for="">Tên loại sản phẩm</label>
          <input type="text" name="name" id="" value="{{$objItem->ten_loai_san_pham}}" class="form-control" placeholder="nhập vào tên loại sản phẩm" aria-describedby="helpId" required>
          <small style="color: red;" id="helpId" class="text-muted">@error('name') {{$message}} @enderror</small>
        </div>
        <div class="form-group">
          <label for="">Tải ảnh loại sản phẩm</label>
          <input type="file" class="form-control-file" name="image" id="" placeholder="" aria-describedby="fileHelpId" required>
          <small style="color: red;" id="helpId" class="text-muted">@error('image') {{$message}} @enderror</small>
          <img src="{{asset('image/image_type_product')}}/{{$objItem->anh_loai_san_pham}}" alt="" width="30%">
        </div>
        <div class="form-group">
          <label for="">Tiêu đề loại sản phẩm</label>
          <textarea name="title" id="" cols="30" rows="10">{{$objItem->tieu_de}}</textarea>
          <small style="color: red;" id="helpId" class="text-muted">@error('name') {{$message}} @enderror</small>
        </div>
        <br>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Thêm mới</button>
    </form>
    </div>
</main>
@endsection