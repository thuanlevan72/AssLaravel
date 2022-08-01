<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class homeController extends Controller
{
    private $v;
    public function __construct(){
        $this->v = [];
    }
   public function getHome(){
        $product  = new product();
        $category = new category();
        $this->v['showProductTop10'] = $product->showProductTop15();
        $this->v['showProductTop5OfMonth'] = $product->ShowProductTop5OfMonth();
        $this->v['ShowTop5NewProduct'] = $product->ShowTop5NewProduct();
        $this->v['showProductTop5'] = $product->showProductTop5();
        $this->v['showProductPhuKienTop4'] = $product->showProductPhuKienTop4();
        $this->v['type_product'] = $category->loadListType();
        return view('frontend.home',$this->v);
    }
   
}
