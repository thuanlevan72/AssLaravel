
<!-- HTML !-->
@extends('backend.layouts.layout')
@section('content')
<link rel="stylesheet" href="{{asset('didongviet/backend/tablecss/tablde.css')}}">
<?php ?>
<main>
    <div class="top-user">
        <div class="heading-text">
        <p>Danh sách sản phẩm đã đặt <a href="./order.php"><i class="fas fa-times"></i></a></p>
        </div>
        <div class="input-search">
            <style>
.button-20 {
  appearance: button;
  background-color: #4D4AE8;
  background-image: linear-gradient(180deg, rgba(255, 255, 255, .15), rgba(255, 255, 255, 0));
  border: 1px solid #4D4AE8;
  border-radius: 1rem;
  box-shadow: rgba(255, 255, 255, 0.15) 0 1px 0 inset,rgba(46, 54, 80, 0.075) 0 1px 1px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Inter,sans-serif;
  font-size: 1rem;
  font-weight: 500;
  line-height: 1.5;
  margin: 0;
  padding: .5rem 1rem;
  text-align: center;
  text-transform: none;
  transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
  border-radius:10px;
}

.button-20:focus:not(:focus-visible),
.button-20:focus {
  outline: 0;
}

.button-20:hover {
  background-color: #3733E5;
  border-color: #3733E5;
}

.button-20:focus {
  background-color: #413FC5;
  border-color: #3E3BBA;
  box-shadow: rgba(255, 255, 255, 0.15) 0 1px 0 inset, rgba(46, 54, 80, 0.075) 0 1px 1px, rgba(104, 101, 235, 0.5) 0 0 0 .2rem;
}

.button-20:active {
  background-color: #3E3BBA;
  background-image: none;
  border-color: #3A38AE;
  box-shadow: rgba(46, 54, 80, 0.125) 0 3px 5px inset;
}

.button-20:active:focus {
  box-shadow: rgba(46, 54, 80, 0.125) 0 3px 5px inset, rgba(104, 101, 235, 0.5) 0 0 0 .2rem;
}

.button-20:disabled {
  background-image: none;
  box-shadow: none;
  opacity: .65;
  pointer-events: none;
}
            </style>
      <form action="{{'updateStatus'}}" method="post">
    @csrf
      <button style=" border-radius:10px;" name="check" class="button-20" value="{{$data[0]->hoa_don_id}}" role="button">xác nhận đơn hàng</button>
      </form>
        </div>
    </div>
    <div class="middle-user">
    <div class="add-user">
    </div>
        <table class="fixed">
           <thead>
           <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>tổng tiền</th>
            </tr>
           </thead>
            <tbody>
            @foreach($data as $item)
            <tr>

                <td>{{$loop->index + 1}}</td>
                <td style="width:250px;">{{$item->ten_san_pham}}</td>
                <td><img style="border-radius: 0px; border: none;" src="{{asset('image/image_product')}}/{{$item->anh_san_pham}}" width="80px" height="" alt=""></td>
                <td align="center">{{number_format($item->tong_tien / $item->so_luong)}} đ</td>
                <td align="center">{{$item->so_luong}} sản phẩm</td>
                <td align="center">{{number_format($item->tong_tien)}} đ</td>

            </tr>
         @endforeach
         
    
            <?php 
            $sl = 0;
            $tien = 0;
            foreach($data as $item){
                $sl+= $item->so_luong;
                $tien+= $item->tong_tien;
            } ?>
            </tbody>
            <tfoot>
                <tr>
                     <th colspan="4">Tổng hóa đơn</th> 
                     <td colspan="1" align="center">{{$sl}} sản phẩm</td> 
                     <td colspan="1" align="center">{{number_format($tien)}} đ</td> 
                </tr>
                
            </tfoot>
        </table>
    </div>
</main>

@endsection