<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class category extends Model
{
    use HasFactory;
    protected $table = 'loai_san_pham';
    protected $fillable = [
        'id',
        'ten_loai_san_pham',
        'anh_loai_san_pham',
        'tieu_de',
        'trang_thai',
        'created_at',
        'updated_at',
    ];
    public function loadListWithPager($params = []){
        $query = DB::table($this->table)->select($this->fillable);
        $List = $query->paginate(15);
        return $List;
    } 
    public function loadListType(){
        $query = DB::table($this->table)->select(['id','ten_loai_san_pham']);
        $List = $query->get();
        return $List;
    } 
    public function loadOne($id, $params = null){
        $query = DB::table($this->table)->where('id','=',$id);
        $obj = $query->first();
        return $obj;
    }
    public function updateCategory($id,$data){
        $datas=array(
            "ten_loai_san_pham"=> $data->name,
            "tieu_de" => $data->title,
            'updated_at'=>date('Y-m-d h:i:s'),
            );
       if($data->image == ''){

       } else{
        $file= $data->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $datas['anh_loai_san_pham'] = $filename;
       }
       $checkUpdate =DB::table($this->table)->where('id','=',$id)->update($datas);
       if($checkUpdate){
        if($data->file('image')){
            $file->move(public_path('image/image_type_product'), $filename);
        }
    }
       
    }
    public function addCategory($data){
        
            $file= $data->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $datas=array(
            "ten_loai_san_pham"=> $data->name,
            "anh_loai_san_pham"=> $filename,
            "tieu_de" => $data->title,
            "created_at"=>date('Y-m-d h:i:s'),
            );
            $checkInsert = DB::table('loai_san_pham')->insert($datas);
            if($checkInsert){
                if($data->file('image')){
                    $file->move(public_path('image/image_type_product'), $filename);
                }
            }
           
    }
}
