<?php

namespace App\Http\Controllers;

use App\Http\Requests\productRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class productController extends Controller
{
    private $v;
    public function __construct(){
        $this->v = [];
    }
    public function index(Request $request){
        $search =  $request->input('search_name');
        $this->v['search'] = $search;
        $category = new category();
        $product = new product();
        $this->v['list'] = $product->getJoinTypeproduct($this->v['search']);
        $this->v['type_product'] = $category->loadListType();
        $this->v['list']->appends(['search_name' => $search]);
        return view('backend.products.product',$this->v);
    }
    public function showAddProduct(){
        $category = new category();
        $this->v['type_product'] = $category->loadListType();
        return view('backend.products.addProduct',$this->v);
    }
    public function addProduct(productRequest $requets)
    {
        $product = new product();
        $product->addProuduct($requets);
        return redirect()->route('product');
    }
    public function dleProduct($id){
        $modeldle = product::find($id);
        $modeldle->delete();
        return redirect(route('product'));
    }
    public function updateProduct($id){
        $product = new product();
        $category = new category();
        $this->v['type_product'] = $category->loadListType();
        $this->v['data'] = $product->loadOne($id);
        // dd($this->v['data']);
        return view('backend/products/UpdateProduct',$this->v);
    }
    public function ProductDetails($id){
        $product = new product();
        $this->v['data'] = $product->loadOne($id);
        if($this->v['data'] == null){
           return redirect()->route('home');
        }
        return view('frontend.products.ProductDetails', $this->v);
    }
    public function AddCrart($id,Request $request){
        session_start();
        $product = new product();
        $this->v['data'] = $product->loadOne($id);
        if($this->v['data'] == null){
           return redirect()->route('home');
        }
        $quantity = $request->quantity;
        // Session::flash('cart',[$id]);
        // dd(session('cart'));
        if(isset($_SESSION['cart'][$id])){

            $_SESSION['cart'][$id]['quantity'] += $quantity;
            $_SESSION['cart'][$id]['price'] =  $this->v['data']->gia_san_pham - (($this->v['data']->gia_san_pham * $this->v['data']->gia_khuyen_mai) / 100);
    
            $_SESSION['tbcart'] = "bạn đãc cập nhật thành công vào giỏ hàng";
        }else{
           
            $_SESSION['cart'][$id]['name_product'] = $this->v['data']->ten_san_pham;
            $_SESSION['cart'][$id]['image_product'] = $this->v['data']->anh_san_pham;
            $_SESSION['cart'][$id]['quantity'] = $quantity;
            $_SESSION['cart'][$id]['price'] =  $this->v['data']->gia_san_pham - (($this->v['data']->gia_san_pham * $this->v['data']->gia_khuyen_mai) / 100);
            $_SESSION['cart'][$id]['id_product'] = $id;
            $_SESSION['tbcart'] = "bạn đã thêm thành công vào giỏ hàng";
        }
        return redirect()->route('ProductDetails',['id'=>$id]);
    }
    public function showProductUser(Request $request){
        $search =  $request->input('search_name');
        $this->v['search'] = $search;
        $category = new category();
        $product = new product();
        $this->v['list'] = $product->getJoinTypeproduct($this->v['search']);
        $this->v['type_product'] = $category->loadListType();
        $this->v['list']->appends(['search_name' => $search]);
      
        return view('frontend.products.showProduct', $this->v);
    }
    public function PostupdateProduct($id,UpdateProductRequest $request){
        $product = new product();
        $product->updateProduct($id, $request);
        return redirect(route('product'));
    }
   
}
