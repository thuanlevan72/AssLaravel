{{-- // gọi lớp model mà không cần thông qua controller and --}}
{{$dataSlide =  App\Models\banner::someFunction()}}
<div class="banner">
    <style>
      .banner .nav li{
        height:56px;
      }
    </style>
    <ul class="nav">
        <li>
            <h4>sản phẩm mới nhất</h4>
        </li>
   
      <li><a href="./chi_tiet_san_pham.php?id_san_pham="><b style="font-weight: bold;">#</b>Iphone 13 promax  <br> mua ở khắp mọi nơi</a></li>
<li><a href="#"><b style="font-weight: bold;">#1</b> Iphone 13 <br> mua ở khắp mọi nơi</a></li>
      <li><a href="#"><b style="font-weight: bold;">#1</b> Iphone 13 <br> mua ở khắp mọi nơi</a></li>
      <li><a href="#"><b style="font-weight: bold;">#1</b> Iphone 13 <br> mua ở khắp mọi nơi</a></li>
      <li><a href="#"><b style="font-weight: bold;">#1</b> Iphone 13 <br> mua ở khắp mọi nơi</a></li> 
    </ul>
    <div class="slide">
    <div class="slideshow-container">
@foreach($dataSlide as $item)  
<div class="mySlides fade">
    <a href="{{$item->tieu_de}}"><img src="{{asset('image/image_slide/')}}/{{$item->anh_banner}}" style="width:100%"></a>    
</div>
@endforeach
</div>
<br>

<div style="text-align:center" class="dot-cc">
  @foreach($dataSlide as $item)  
  <span class="dot" onclick="currentSlide({{$loop->index}})"></span> 
  @endforeach

</div>
    </div>
  <div class="banner-2">
      <a href=""><img src="{{asset('image/image_banner/apple-watch-3-didongviet-480x248.jpg')}}" alt=""></a>
      <a href=""><img src="{{asset('image/image_banner/galaxy-z-fold-didongviet-480x248.jpg')}}" alt=""></a>
  </div>
  </div>
