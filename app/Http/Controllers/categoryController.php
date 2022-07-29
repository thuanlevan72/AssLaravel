<?php

namespace App\Http\Controllers;

use App\Http\Requests\categoryRequest;
use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(){
        return view('backend.categorys.addcategory');
    }
    public function showCategory(Request $request){
        $object = new category();
        $this->v['extParams'] = $request->all();
        $this->v['list'] = $object->loadListWithPager($this->v['extParams']);
        return view('backend.categorys.category', $this->v);
    }
    public function addTypeProduct(categoryRequest $request){
       $insert = new category();
       $insert->addCategory($request);
       return redirect(route('category'));
    }
}
