@extends('backend.layouts.layout')
@section('content')
<style>
  nav ul .cha5 .cha1{
      color: #3bc0c3;
      background-color: #eee;
      -webkit-transition: 1.5s;
      transition: 0.5s;
  }
</style>
<link rel="stylesheet" href="{{asset('didongviet/backend/formcss/form.css')}}">
<main>
 <!-- -->
   <div class="top-conten" style="height: 60px;">
       <p style="line-height: 60px;">Sửa Slide trang front end</p>
   </div>
   <div class="container">
   <form action="{{route('UpdateBanner',['id'=>request()->route('id')])}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
          <label for="">Name Slide</label>
          <input type="text" name="name_slide" id="" value="{{old('name_slide') == '' ? $dataOneBanner->ten_banner:old('name_slide') }}" class="form-control" placeholder="nhập vào tên Slide" aria-describedby="helpId" required>
          <small style="color: red;" id="helpId" class="text-muted">@error('name_slide') {{$message}} @enderror</small>
        </div>
        <div class="form-group">
          <label for="">Tải lên Slide</label>
          <input type="file" class="form-control-file" name="image_slide" id="" placeholder="" aria-describedby="fileHelpId" >
          <br>
           <div class="img" style="background-color: #636e72;width: 30%; border-radius: 10px;">
            <img src="{{asset('image/image_slide')}}/{{$dataOneBanner->anh_banner}}" alt="" width="" style="width: 90%; margin: 10px 5%;">
          </div>
          <small style="color: red;" id="helpId" class="text-muted">@error('image_slide') {{$message}} @enderror</small>
        </div>
       
        <div class="form-group">
          <label for="">Link Slide</label>
          <input type="link" name="link" id="" value="{{old('link') == '' ? $dataOneBanner->tieu_de : old('link') }}" class="form-control" placeholder="nhập vào Link Slide" aria-describedby="helpId" required>
          <small style="color: red;" id="helpId" class="text-muted">@error('link') {{$message}} @enderror</small>
        </div>
       <br>
       <br>
       <button type="submit" name="submit" class="btn btn-primary">Thêm slide</button>
   </form>
   </div>
</main>


@endsection
