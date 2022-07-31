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
<style>
    nav ul .cha2 .cha1{
        color: #3bc0c3;
        background-color: #eee;
        -webkit-transition: 1.5s;
        transition: 0.5s;
    }
</style>
<link rel="stylesheet" href="{{asset('didongviet/backend/tablecss/product.css')}}">

<main>
    <div class="top-user">
        <div class="heading-text">
        <p>Danh sách Slide</p>
        </div>
    </div>
    <div class="middle-user">
    <div class="add-user">
    @if(count($list)<5)
     <a href="{{route('showFormAddBanner')}}"><button style="color: #fff;">Thêm mới Slide</button></a>
     @else
     <a href="{{route('showFormAddBanner')}}"><button  style="color: #fff; width: 400px; background-color: red">Tối đa chỉ được 5 slide được xuất hiện</button></a>
     @endif
    </div>
   
        <table class="fixed">
           <thead>
           <tr>
                <th>ID</th>
                <th>Tên Slide</th>
                <th>Ảnh</th>
                <th>link</th>
                <th>chức năng</th>
            </tr>
           </thead>
            <tbody>
             @foreach($list as $item)  
            <tr>
                <td style="width: 30px;" >{{$loop->index+1}}</td>
                <td style="width: 150px;">{{$item->ten_banner}}</td>
                <td style="width: 270px;"><img src="{{asset('image/image_slide')}}/{{$item->anh_banner}}" style="width:270px" alt=""></td>
                <td>{{$item->tieu_de}}</td>
                <td class="cn" style="width: 200px !important;"><a href="./update_slide.php?id="><button class="update">Sửa</button></a><a><button class="delete">Xóa</button></a></td>
            </tr>
            @endforeach
            @if(count($list)<=0)
            <tr>
                <td colspan="4">không có dữ liệu nào tồn tại</td>
                <td colspan="2"><a href="./product.php"><button>reset</button></a></td>
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
