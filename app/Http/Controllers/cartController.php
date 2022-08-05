<?php

namespace App\Http\Controllers;

use App\Http\Requests\cartRequest;
use App\Models\cart;
use App\Models\ctCart;
use Illuminate\Http\Request;

class cartController extends Controller
{
      public function index(){

      }

      public function cart(){
        return view('frontend/cart/cart');
      }

      public function Showcheckout()
      {
        return view('frontend/cart/checkout');
      }
      public function Getcheckout(cartRequest $request){
        session_start();
        $data = $_SESSION['cart'];
        $dataCopy = [];
       
        foreach($data as $item){
           $dataCopy[] = $item; 
        }
        unset($_SESSION['cart']);
        $order = new cart();
        $id = $order->CreateHoaDon($request);
        for($i=0;$i< count($dataCopy);$i++){
            $dataCopy[$i]['hoa_don_id'] = "$id";
            $dataCopy[$i]['san_pham_id'] = $dataCopy[$i]['id_product'];
            $dataCopy[$i]['so_luong'] = $dataCopy[$i]['quantity'];
            $dataCopy[$i]['tong_tien'] = $dataCopy[$i]['price'];
            unset($dataCopy[$i]['id_product']);
            unset($dataCopy[$i]['quantity']);
            unset($dataCopy[$i]['price']);
            unset($dataCopy[$i]['name_product']);
            unset($dataCopy[$i]['image_product']);
           
        } 
        $ctOrder = new ctCart();
        $ctOrder->createCtHoaDon($dataCopy);
        return redirect()->route('checkout2');
      }
}
