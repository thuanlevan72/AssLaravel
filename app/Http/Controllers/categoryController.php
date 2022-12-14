<?php

namespace App\Http\Controllers;

use App\Http\Requests\categoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class categoryController extends Controller
{
    private $v;
    public function __construct(){
        $this->v = [];
    }
    public function index(){
        return view('backend.categorys.addcategory');
    }
    public function showCategory(Request $request){
        $search =  $request->input('search_name');
        $this->v['search'] = $search;
        // dd($this->v['search']);
        $object = new category();
        $this->v['extParams'] = $request->all();
        $this->v['list'] = $object->loadListWithPager($this->v['search']);
        $this->v['list']->appends(['search_name'=>$search]);
        return view('backend.categorys.category', $this->v);
    }
    public function ShowUpdate($id){
        $object = new category();
        $objItem = $object->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view('backend.categorys.updateCategory',$this->v);
    }
    public function UpdateCategory($id, UpdateCategoryRequest $request){
        $object = new category();
        $objItem = $object->updateCategory($id, $request);
        return redirect(route('category'));
    }
    public function Dlete($id){
        $object =  category::find($id);
        $object->delete();
        return redirect(route('category'));
    }
    public function addTypeProduct(categoryRequest $request){
       $insert = new category();
       $insert->addCategory($request);
       return redirect(route('category'));
    }
}
