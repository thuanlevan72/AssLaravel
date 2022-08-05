@extends('frontend.layout.main')
@section('content')
<link rel="stylesheet" href="{{asset('didongviet/frontend/ProductDetails.css')}}">
<style>
    main .left-main .top-main .left-product .noiDung p{
        line-height:20px;
    }
    main .left-main .top-main .left-product .chiTiet p{
        line-height:20px;
    }
</style>
<div class="banner-3">
<a href=""><img src="https://cdn.didongviet.vn/pub/media/mageplaza/bannerslider/banner/image/h/o/hot-sale-sieu-pham-z-flip-fold-didongviet.jpg" alt=""></a>
<a href=""><img src="https://cdn.didongviet.vn/pub/media/mageplaza/bannerslider/banner/image/s/a/samsung-galaxy-wacth-4-didongviet.jpg" alt=""></a>
</div>
<main>
    @php
    session_start();
    // unset($_SESSION['cart']);
    @endphp
{{-- {{dd($_SESSION['cart'])}} --}}
    <div class="left-main">
        <div class="top-main">
            <div class="left-product">
             <div class="image">
                 <img src="{{asset('image/image_product')}}/{{$data->anh_san_pham}}" alt="">
             </div>
             <div class="noiDung">
                 <p>{{$data->noi_dung_san_pham}}</p>
             </div>
             <div class="chiTiet">
                 <p></p>
             </div>
            </div>
            <div class="right-product">
                <div class="text-name-product">
                    <p>{{$data->ten_san_pham}}</p>
                </div>
                <div class="id-product">
                    <p><b>No:</b> {{($data->id + 2122)* 11123 - 2011}}</p>
                </div>
                <div class="box-price">
                    <p> {{number_format($data->gia_san_pham - (($data->gia_san_pham * $data->gia_khuyen_mai) / 100))}} VND</p>
                </div>
                <div class="box-trangThai">
                    <p><i class="fas fa-map-marker-alt"></i>&nbsp;Hiện đang còn hàng ({{$data->so_luong}})</p>
                </div>
                <div class="box-price-2">
                    <p class="h1">Mua ngay</p>
                    <p class="price-1">{{number_format($data->gia_san_pham - (($data->gia_san_pham * $data->gia_khuyen_mai) / 100))}} ₫</p>
                    <p class="price-2"><del>{{$data->gia_khuyen_mai > 0 ? number_format($data->gia_san_pham) : ''}} đ</del></p>
                </div>
                <form action="{{route('AddCrart',['id'=>request()->route('id')])}}" method="post" class="datHang">
                    @csrf
                <div class="buttons_added">
                
                <input onclick="cong()" type='button' value='-' />
                <input id='quantity' style='text-align: center' min='1' name='quantity' max="10" type='text' readonly value='1' />
                <input onclick="tru()" type='button' value='+' />
                  </div>
                  <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>
                </form>
                <?php if(isset($_SESSION['tbcart'])){ ?>
                <br>
                <Script>
                    alert('đã thêm sản phẩm thành công');
                </Script>
                 <?php  unset($_SESSION['tbcart']);
                 } ?>
                <div class="promotion-info">
       
        <ul class="promotion-details">
            <span class="pro-title text-red"><i class="fa fa-pro"></i>Khuyến mãi, ưu đãi</span>
            <ul class="promotion-main">
<li>Hỗ trợ kích hoạt eSIM miễn phí <a href="https://didongviet.vn/tin-tuc/?p=80625" target="_blank" rel="noopener">(Xem chi tiết)</a></li>
<li>Trade-in thu cũ đổi mới tại nhà - Tiết kiệm lên đến <strong>23&nbsp;Triệu</strong></li>
<li>Mua <a href="https://didongviet.vn/cu-sac-nhanh-apple-iphone-20w-type-c-chinh-hang" target="_blank" rel="noopener">Sạc nhanh Apple iPhone 20W Chính Hãng</a> giá chỉ <strong>490.000đ</strong> (giá niêm yết <strong>790.000đ</strong>)</li>
<li style="display: none;">Mua <a href="https://didongviet.vn/tai-nghe-apple-earpods-cty" target="_blank" rel="noopener">Tai nghe Earpods Chính Hãng</a> giá chỉ <strong>490.000đ</strong> (giá niêm yết <strong>790.000đ</strong>)</li>
<li style="display: none;">Mua <a href="https://didongviet.vn/apple-airtag">Apple Airtag Chính Hãng</a>&nbsp;giá chỉ <strong>650.000đ</strong> (giá niêm yết <strong>790.000đ</strong>)</li>
</ul>
        
            </div>
                <!--  -->
            </div>
        </div>
    </div>
    <div class="right-main">
        <div class="bottom-right-main">
            <div class="box-chuy">
                <div class="box-text">
                    <div class="h1">
                        <p><i class="fas fa-briefcase"></i> Bộ sản phẩm</p>
                    </div>
                    <div class="p">
                        <p>Bộ sản phẩm: Thân máy, Hộp, Cáp, Cây lấy sim, Sách hướng dẫn (Tất cả lô máy từ tháng 10/2020, Apple cắt bỏ tai nghe, củ sạc khỏi bộ sản phẩm bán kèm)</p>
                    </div>
                </div>
                <div class="box-text">
                    <div class="h1">
                        <p><i class="fas fa-shield-alt"></i> Bảo hành</p>
                    </div>
                    <div class="p">
                        <p>Giá đã bao gồm 10% VAT. Bảo hành 12 tháng theo chính sách Apple toàn cầu.</p>
                    </div>
                </div>
            </div>
            <div class="box-image">
            <img style="width: 85%; margin: 0 7.5%;" src="https://cdn.didongviet.vn/pub/media/ddv/244x524.png" alt="">
            </div>
        </div>
    </div>
</main>
<div class="main-comment">
    <left-comment>
        <div class="top-comment">
            <div class="text-h">
                <p>Bình luận về sản phẩm</p>
            </div>

             <!-- end check bình luận -->
            <form action="" method="post">
                <div class="form-group">
                  <textarea class="form-control" name="comment" placeholder="nhập vào đây bình luận của bạn..." maxlength="225" style="max-height: 180px; max-width:800px ;" id="" rows="3" required></textarea>
                  <br>
                  <br>
                  <label style="color: red;" for=""></label>
                
                </div>
                <button type="submit" name="add_comment" class="btn btn-primary" >Gửi bình luận</button>
            </form>
            <!-- lấy ra comment  -->
            <div class="comment">
                <div class="name-comment">
                   <img src="../image/image_user/" alt=""> <p></p>
                </div>
                <div class="text-comment">
                    <p>đây là nội dung</p>
                </div>
                <div class="date-comment">
                    <p><i class="far fa-comment-dots"></i> Đã đăng: {{date('Y-m-d')}}</p>
                </div>
            </div>
         
       
                <div class="comment">
                <div class="name-comment">
                   <img src="../image/image_user/z2660707530992_6efedaa9aa39bb2a027ceec0def08ce7.jpg" alt=""> <p>Admin</p>
                </div>
                <div class="text-comment">
                    <p>Chưa có lượt bình luận nào cho sản phẩm này cả</p>
                </div>
                <div class="date-comment">
                    <p><i class="far fa-comment-dots"></i> Đã đăng: đây chỉ là thông báo</p>
                </div>
            </div>
       
            <!--  end lấy comment -->
            <div class="xem-them">
              
               <a href="?id_san_pham="><p>Ẩn bớt ✕</p></a>
             
              <a href="?id_san_pham=&&xemthem"><p>Xem thêm ∨</p></a>
       
            </div>
        </div>
        <div class="bottom-comment">
             <div class="sale-main">
        <div class="text-sale">
            <p>sản phẩm cùng loại</p>
        </div>
        <div class="content-sale">
           
            <div class="box-sale">
                <div class="text-box-2">
                    <p>#1</p>
                </div>
                <div class="image-sale">
                    <a href="?id_san_pham="><img src="../image/image_product/" alt=""></a>
                </div>
                <div class="text-price">
                   <a href="?id_san_pham=" style="text-decoration: none;"><p class="name-sale"></p></a>
                    <br>
                    <p class="new-price">
                     ₫
                    </p>
                    <strike class="odd-price"> đ </strike>

                </div>
            </div>
          
        </div>
    </div>
        </div>
    </left-comment>
    <right-cauhinh>
    <Table>
        <tr>
            <th><i class="fas fa-cog"></i> Cấu hình</th>
        </tr>
        <tr>
            <td><h1>Màn hình</h1><br><p>Thông tin đang bị bỏ chống!</p></td>
        </tr>
        <tr>
            <td><h1>Camera sau</h1><br><p>Thông tin đang bị bỏ chống!</p></td>
        </tr>
        <tr>
            <td><h1>Camera trước</h1><br><p></p>Thông tin đang bị bỏ chống!</td>
        </tr>
        <tr>
            <td><h1>Hệ điều hành - CPU</h1><br><p>Thông tin đang bị bỏ chống!</p></td>
</td>
        </tr>
        <tr>
            <td><h1>Bộ nhớ - Lưu trữ</h1><br><p>Thông tin đang bị bỏ chống!</p></td>
        </tr>
        <tr>
            <td id="line"><h1>Kết nối</h1><br><p>Thông tin đang bị bỏ chống!</p></td>
        </tr>
        <tr>
            <td id="line"><h1>Pin</h1><br><p>Thông tin đang bị bỏ chống!</p></td>
        </tr>
    </Table>
    </right-cauhinh>
</div>
@endsection
<script>
    var quantity = document.getElementById('quantity').value;
    function cong(){
        var result = document.getElementById('quantity'); 
        var qty = result.value;
         if( !isNaN(qty) & qty > 1 )
         {result.value--;} 
         return false;
    }
    function tru(){
        var result = document.getElementById('quantity');
         var qty = result.value;
          if(!isNaN(qty) && qty < {{$data->so_luong}})
           result.value++;
           return false;
    }
</script>