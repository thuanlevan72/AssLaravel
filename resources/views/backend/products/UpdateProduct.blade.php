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

    <div class="top-conten">
        <p>sản phẩm => <b style="color: #333;">Sửa<a href="{{route('product')}}"><i class="fas fa-times"></i></a></b></p>
    </div>
    <p></p>
    <div class="container">
    <form action="{{route('UpdateProduct',['id'=>request()->route('id')])}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
          <label for="">Tên sản phẩm</label>
          <input type="text" name="name_product" id="" value="{{ $data->ten_san_pham }}" class="form-control" placeholder="nhập vào tên loại sản phẩm" aria-describedby="helpId" required>
          <small style="color: red;" id="helpId" class="text-muted">@error('name_product') {{$message}} @enderror</small>
        </div>
        <div class="form-group">
          <label for="">Số lượng sản phẩm</label>
          <input type="number" name="quantity" id="" value="{{ $data->so_luong }}" class="form-control" min="1" placeholder="nhập vào số lượng sản phẩm" aria-describedby="helpId" required>
          <small style="color: red;" id="helpId" class="text-muted">@error('quantity') {{$message}} @enderror</small>
        </div>
        <div class="form-group">
          <label for="">Giá sản phẩm</label>
          <input type="number" name="price" id="" value="{{ $data->gia_san_pham }}" class="form-control" min="500000" max=""placeholder="nhập vào giá của sản phẩm" aria-describedby="helpId" required>
          <small style="color: red;" id="helpId" class="text-muted">@error('price') {{$message}} @enderror</small>
        </div>
        <div class="form-group">
          <label for="">% sale của sản phẩm</label>
          <input type="number" name="sale_price" id="" value="{{ $data->gia_khuyen_mai }}" value="0"  min="0" class="form-control" placeholder="nhập vào giá sale của sản phẩm" aria-describedby="helpId" required>
          <small style="color: red;" id="helpId" class="text-muted">@error('sale_price') {{$message}} @enderror</small>
        </div>
        <div class="form-group">
          <label for="">Tiêu đề của sản phẩm</label>
          <textarea name="title" id=""  cols="30" rows="10" placeholder="nhập vào đây tiêu đề của sản phẩm">{{ $data->tieu_de_san_pham }}</textarea>
          <small style="color: red;" id="helpId" class="text-muted">@error('title') {{$message}} @enderror</small>
        </div>
        <div class="form-group">
          <label for="">nội dung sản phẩm</label>
          <textarea name="body" id="" cols="30" rows="10" placeholder="nhập vào đây nội dung của sản phẩm">{{ $data->noi_dung_san_pham }}</textarea>
          <small style="color: red;" id="helpId" class="text-muted">@error('body') {{$message}} @enderror</small>
        </div>
        <div class="form-group">
          <label for="">Tải ảnh loại sản phẩm</label>
          <input type="file" class="form-control-file" name="image_product" id="" placeholder="" aria-describedby="fileHelpId" >
          <img src="{{asset('image/image_product')}}/{{$data->anh_san_pham}}" alt="" srcset="" width="250px">
          <small style="color: red;" id="helpId" class="text-muted">@error('image_product') {{$message}} @enderror</small>
        </div>
        <div class="form-group">
          <label for="">Thiết lập loại sản phẩm</label>
          <select class="custom-select" name="type_product" id="">
            @foreach($type_product as $item)
            <option value="{{$item->id}}" {{$item->id == $data->loai_san_pham_id ? 'selected': ''}}>{{$item->ten_loai_san_pham}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="">Thiết lập hiển thị</label>
          <select class="custom-select" name="status" id="">
            <option value="0">Active</option>
            <option value="1" {{$data->trang_thai == 1 ? 'selected': ''}}>Look</option>
          </select>
        </div>
        <br>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Sửa Thông tin</button>
    </form>
    </div>
</main>

@endsection
