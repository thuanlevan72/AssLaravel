@extends('backend.layouts.layout')
@section('content')
<main>
    <link rel="stylesheet" href="{{asset('didongviet/backend/tablecss/product.css')}}">
    <div class="top-user">
        <div class="heading-text">
        <p>Danh sách sản phẩm</p>
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
    <a href="{{route('addProduct')}}"><button style="color: #fff;">Thêm mới sản phẩm</button></a>
    <form action="" method="Google" enctype="multipart/form">
        <div class="form-group">
        <button type="submit" name="qt" value="Active">Active</button>
        <button type="submit" name="qt" value="Look">Look</button>
        </div>
    </form>
    
    <form action="" method="GET" class="tk_type" enctype="multipart/form">
            <div class="form-group">
              <label for="">Tìm kiếm theo loại</label>
              <select class="form-control" name="type" id="">
                <option value="">IPhone</option>
                <option value="">Ipad</option>
                <option value="">Ios</option>
                <option value="">MacBook</option>
              </select>
            </div>
            <button type="submit">Tìm kiếm</button>
    </form>
  
    </div>
        <table class="fixed">
           <thead>
           <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Sale</th>
                <th>Loại</th>
                <th>status</th>
                <th>ngày tạo</th>
                <th>chức năng</th>
                <th>chi tiết</th>
            </tr>
           </thead>
            <tbody>
                
            <tr>
                <td >1</td>
                <td style="width: 210px;">Iphone 12 ProMax</td>
                <td><img src="{{asset('image/image_product/iphone-13-mini-256gb-chinh-hang-didongviet.jpg')}}" width="100px" height="" alt=""></td>
                <td style="width: 20px; text-align: center; font-weight: bold;">12</td>
                <td>216126623 đ</td>
                <td>100000 đ</td>
                <td style="font-weight: 600;">Iphone</td>
                <td><p style="font-weight: 600; background-color: red;" class="qt">look</p></td>
                <td>{{date('Y-m-d')}}</td>
                <td class="cn"><a href="./update_product.php?id="><button class="update">Sửa</button></a><a><button onclick="" class="delete">Xóa</button></a></td>
                <td><a href=""><button class="ct">Xem Ngay</button></a></td>
            </tr>
        
            <tr>
                <td colspan="8">không có dữ liệu nào tồn tại</td>
                <td colspan="3"><a href="./product.php"><button>reset</button></a></td>
            </tr>
      
            </tbody>
            <tfoot>
                <!-- <tr>
                     <td colspan="7"><a href="./resgister.php"><button style="height: 30px;">Thêm mới user</button></a></td> 
                </tr> -->
            </tfoot>
        </table>
    </div>
</main>

@endsection
