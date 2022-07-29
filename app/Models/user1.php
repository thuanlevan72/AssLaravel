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
    public function loadListWithPager($params = []){
        $query = DB::table($this->table)->select($this->fillable);
        $List = $query->paginate(20);
        return $List;
    } 
    public function createUser($data){
        $file= $data->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $datas=array(
        "name"=> $data->name,
        "email"=>$data->email,
        "phone"=>$data->phone,
        "imageUser"=> $filename,
        "password"=>Hash::make($data->password),
        "level"=>$data->lever,
        "trang_thai"=>$data->status,
        );
        $checkInsert = DB::table('users')->insert($datas);
        if($checkInsert){
            if($data->file('image')){
                $file= $data->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('image/image_user'), $filename);
            }
        }
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
