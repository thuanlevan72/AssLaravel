@extends('backend.layouts.layout')
@section('content')
<style>
    .typesss{
        width: 100%;
        display:grid;
        grid-template-columns: 3fr 3fr;
    }
    .type_product_serch{
        margin: 0;
        padding: 10px 0;
        width: 100%;
    }
</style>
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
            <div class="form-group typesss">
              <label for="" class="type_product_serch" style="width: 100%">Tìm kiếm theo loại</label>
              <select class="form-control" name="type" id="" style="width: 80%">
                @foreach($type_product as $item)
                <option value="{{$item->id}}">{{$item->ten_loai_san_pham}}</option>
                
                @endforeach
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
        @foreach($list as $item)
            <tr>
                <td >{{$loop->index + 1}}</td>
                <td style="width: 210px;">{{$item->ten_san_pham}}</td>
                <td><img src="{{asset('image/image_product/')}}/{{$item->anh_san_pham}}" width="100px" height="" alt=""></td>
                <td style="width: 20px; text-align: center; font-weight: bold;">12</td>
                <td>216126623 đ</td>
                <td>100000 đ</td>
                <td style="font-weight: 600;">Iphone</td>
                <td><p style="font-weight: 600; background-color: red;" class="qt">look</p></td>
                <td>{{date('Y-m-d')}}</td>
                <td class="cn"><a href="./update_product.php?id="><button class="update">Sửa</button></a><a><button onclick="" class="delete">Xóa</button></a></td>
                <td><a href=""><button class="ct">Xem Ngay</button></a></td>
            </tr>
        @endforeach
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
