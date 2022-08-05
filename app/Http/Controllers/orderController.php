<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\ctCart;
use Illuminate\Http\Request;

class orderController extends Controller
{
    private $v;
    public function __construct(){
        $this->v = [];
    }
    public function getOrder(Request $request){
        $order = new cart();
        $search =  $request->input('search_name');
        $this->v['search'] = $search;
        $this->v['list'] = $order->getHoaDon($this->v['search']);
        $this->v['list']->appends(['search_name' => $search]);
        return view('backend/orders/listOrder',$this->v);
    }
    public function getCTOrder($id){
        $order = new ctCart();
        $this->v['data'] =  $order->getCtCart($id);
        return view('backend/orders/detailOrders', $this->v);
    }
    public function updateStatus(Request $request){
        $id =  $request->input('check');
        $order = new cart();
        $order->updateStatus($id);
        return redirect()->route('getOrder');
    }
}
