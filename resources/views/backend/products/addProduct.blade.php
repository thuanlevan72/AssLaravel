@extends('backend.layouts.layout')
@section('content')
<link rel="stylesheet" href="{{asset('didongviet/backend/formcss/form.css')}}">
<main>

    <div class="top-conten">
        <p>Thêm mới sản phẩm => <b style="color: #333;">Thêm <a href="{{route('product')}}"><i class="fas fa-times"></i></a></b></p>
    </div>
    <p></p>
    <div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="">Tên sản phẩm</label>
          <input type="text" name="name_product" id="" class="form-control" placeholder="nhập vào tên loại sản phẩm" aria-describedby="helpId" required>
          <small style="color: red;" id="helpId" class="text-muted"></small>
        </div>
        <div class="form-group">
          <label for="">Số lượng sản phẩm</label>
          <input type="number" name="quantity" id="" class="form-control" min="1" placeholder="nhập vào số lượng sản phẩm" aria-describedby="helpId" required>
          <small style="color: red;" id="helpId" class="text-muted"></small>
        </div>
        <div class="form-group">
          <label for="">Giá sản phẩm</label>
          <input type="number" name="price" id="" class="form-control" min="500000" max=""placeholder="nhập vào giá của sản phẩm" aria-describedby="helpId" required>
          <small style="color: red;" id="helpId" class="text-muted"></small>
        </div>
        <div class="form-group">
          <label for="">Giá sale của sản phẩm</label>
          <input type="number" name="sale_price" id="" value="0"  min="0" class="form-control" placeholder="nhập vào giá sale của sản phẩm" aria-describedby="helpId" required>
          <small style="color: red;" id="helpId" class="text-muted"></small>
        </div>
        <div class="form-group">
          <label for="">Tải ảnh loại sản phẩm</label>
          <input type="file" class="form-control-file" name="image_product" id="" placeholder="" aria-describedby="fileHelpId" required>
          <small style="color: red;" id="helpId" class="text-muted"></small>
        </div>
        <div class="form-group">
          <label for="">Thiết lập loại sản phẩm</label>
          <select class="custom-select" name="type_product" id="">
         
            <option value=""></option>
        
          </select>
        </div>
        <div class="form-group">
          <label for="">Thiết lập hiển thị</label>
          <select class="custom-select" name="status" id="">
            <option value="Active" selected>Active</option>
            <option value="Look">Look</option>
          </select>
        </div>
        <br>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Thêm mới</button>
    </form>
    </div>
</main>

@endsection
