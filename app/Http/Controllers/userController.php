<?php

namespace App\Http\Controllers;

use App\Http\Requests\usersRequest;
use App\Http\Requests\userUpdateRequets;
use Illuminate\Http\Request;
use App\Models\user1;
use App\Models\Postimage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class userController extends Controller
{
    private $v;
    public function __construct(){
        $this->v = [];
    }
    public function index(){
        return view('backend.users.addUser');
    }
    public function showUser(Request $request){
        $search =  $request->input('search_name');
        // dd($search);
        $object = new User1();
        $this->v['search'] = $search;
        $this->v['extParams'] = $request->page;
        $this->v['list'] = $object->loadListWithPager($this->v['search']);
        $this->v['list']->appends(['search_name' => $search]);
        return view('backend.users.listUsers', $this->v);
    }
    public function UpdateUser($id){
        $this->v['_title'] = 'Chi Tiết người dùng';
        $test1 = new User1();
        $objItem = $test1->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view("backend.users.EditUser", $this->v);
    }
    public function PostUpdateUser($id, userUpdateRequets $request){
        $modelTest = new User1();
        $check = $modelTest->updateUser($id,$request);
        return redirect()->route('user');
    }
    public function registerUser(usersRequest $request){
  
        $modelTest = new User1();
        $modelTest->createUser($request);
        return redirect(route('user'));
    }
    public function deleteUser($id){
        $modeldle = User1::find($id);
        $modeldle->delete();
        Session::flash('mes','xóa thành công');
        return redirect(route('user'));
    }   
}
