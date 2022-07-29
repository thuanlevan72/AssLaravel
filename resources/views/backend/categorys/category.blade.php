@extends('backend.layouts.layout')
@section('content')
<link rel="stylesheet" href="{{asset('didongviet/backend/tablecss/product.css')}}">
<main>
    <div class="top-user">
        <div class="heading-text">
        <p>Danh sách loại sản phẩm</p>
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
    <a href="{{route('addcategory')}}" ><button style="color: #fff; width: 50%;" >Thêm mới loại sản phẩm</button></a>
    </div>
        <table class="fixed">
           <thead>
           <tr>
                <th>STT</th>
                <th>Tên loại sản phẩm</th>
                <th>ảnh của loại sản phẩm</th>
                <th>Ngày tạo</th>
                <th>chức năng</th>
            </tr>
           </thead>
            <tbody>
           @foreach($list as $item)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <th>{{$item->ten_loai_san_pham}}</th>
                <td style="text-align:center"><img src="{{asset('image/image_type_product')}}/{{$item->anh_loai_san_pham}}" alt=""></td>
                <td>{{$item->created_at}}</td>
                <td class="cn"><a href="./update_type_product.php?id=>"><button class="update">Sửa</button></a><a><button onclick="delete_type()" class="delete">Xóa</button></a></td>
            </tr>
            @endforeach
            @if(count($list) <=0)
            <tr>
                <td colspan="3">không có dữ liệu nào tồn tại</td>
                <td colspan="2"><a href="./type_product.php"><button>reset</button></a></td>
            </tr>
            @endif
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