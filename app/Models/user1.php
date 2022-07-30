<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Postimage;
class user1 extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'imageUser',
        'level',
        'trang_thai',
        'password',

    ];
    public function loadListWithPager($search){
        
        $query = DB::table($this->table)->where('email','like', '%'.$search.'%')->select($this->fillable);
        $List = $query->paginate(15);
        return $List;
    } 
    public function createUser($data){
        $file = $data->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $datas=array(
        "name"=> $data->name,
        "email"=>$data->email,
        "phone"=>$data->phone,
        "imageUser"=> $filename,
        "password"=>Hash::make($data->password),
        "level"=>$data->lever,
        "trang_thai"=>$data->status,
        'created_at'=>date('Y-m-d h:i:s'),
        );
        $checkInsert = DB::table('users')->insert($datas);
        if($checkInsert){
            if($data->file('image')){
                $file->move(public_path('image/image_user'), $filename);
            }
        }
    }
    public function updateUser($id, $data){
        $DataUpdate = array(
            "name"=> $data->name,
            "phone"=>$data->phone,
            "level"=>$data->lever,
            "trang_thai"=>$data->status,
            'updated_at'=>date('Y-m-d h:i:s'),
        );
       if($data->image == ''){
       }else{
        $file = $data->file('image');
        // dd($file);
        $filename= $file->getClientOriginalName();
        $DataUpdate['imageUser'] = $filename;
       }
        if($data->password != ''){
            $DataUpdate['password'] = Hash::make($data->password);
        }
        $res = DB::table($this->table)->where('id','=',$id)->update($DataUpdate);
        if($data->file('image')){
             $data['image']->move(public_path('image/image_user'), $filename);
        }
        return $res;
    }
    public function loadOne($id, $params = null){
        $query = DB::table($this->table)->where('id','=',$id);
        $obj = $query->first();
        return $obj;
    }
    public function DeleteUser($id){
        $deleted = DB::table('users')->where('id', '=', $id)->delete();
        return $deleted;
    }
}
