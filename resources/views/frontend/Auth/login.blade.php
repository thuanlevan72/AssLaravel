@extends('frontend.layout.main')
<link rel="stylesheet" href="{{asset('didongviet/frontend/main-tk.css')}}">
<link rel="stylesheet" href="{{asset('didongviet/frontend/responsive/tk.css')}}">
@section('content')
<main>
    <div class="forms">
        
        <div class="text-form">
            <p>Chào mừng quay trở lại</p>
        </div>
        <div class="note">
            <p>Tạo một tài khoản để nhận được những ưu đãi tốt nhất từ Thuận lê</p>
        </div>
        
        @if ( Session::has('error') )
        <br>
        <p style="color: red;">{{ Session::get('error') }}</p>
        <br>
        @endif
        <form action="{{route('ResloginFront')}}" method="post">
            @csrf
            <div class="form-group">
              <input type="text" name="email" id="" class="form-control" placeholder="Email" aria-describedby="helpId" required>
              <small id="helpId" style="color:red" class="text-muted"></small>
            </div>
            <div class="form-group">
              <input type="Password" name="password" id="" class="form-control" placeholder="Mật khẩu" aria-describedby="helpId" required>
              <small id="helpId" style="color:red" class="text-muted"></small>
            </div>
           <div class="form-gourp-ipput">
           <button type="submit" name="login" class="btn btn-primary">Đăng nhập</button> 
           <div class="link-trang"><a href="?register=1">
               <p>bạn đã có tài khoản</p>
           </a></div>
           </div>
        </form>

    </div>
</main>
@endsection