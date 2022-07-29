<?php

namespace App\Http\Controllers;

use App\Http\Requests\usersRequest;
use Illuminate\Http\Request;
use App\Models\user1;
use App\Models\Postimage;
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
        $object = new User1();
        $this->v['extParams'] = $request->all();
        $this->v['list'] = $object->loadListWithPager($this->v['extParams']);
        return view('backend.users.listUsers', $this->v);
    }
    public function UpdateUser($id){
        $this->v['_title'] = 'Chi Tiết người dùng';
        $test1 = new User1();
        $objItem = $test1->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view("backend.users.EditUser", $this->v);
    }
    public function registerUser(usersRequest $request){
  
        $modelTest = new User1();
        $modelTest->createUser($request);
        return redirect(route('user'));
    }
    public function deleteUser($id){
        $modeldle = User1::find($id);
        $modeldle->delete();
        return redirect(route('user'));
    }   
}
