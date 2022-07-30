<?php

namespace App\Http\Controllers;

use App\Http\Requests\productRequest;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    private $v;
    public function __construct(){
        $this->v = [];
    }
    public function index(Request $request){
        $category = new category();
        $product = new product();
        $this->v['extParams'] = $request->all();
        $this->v['list'] = $product->getJoinTypeproduct($this->v['extParams']);
        $this->v['type_product'] = $category->loadListType();
     
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
}
