<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class banner extends Model
{
    use HasFactory;
    protected $table = 'banner';
    protected $fillable = [
        'id',
        'ten_banner',
        'anh_banner',
        'tieu_de',
        'created_at',
        'updated_at',
    ];
    public function loadListWithPager($search){
        $query = DB::table($this->table)->where('ten_banner','like','%'.$search.'%')->select($this->fillable);
        $List = $query->paginate(15);
        return $List;
    } 
    public function addBanner($data){ 
            $file= $data->file('image_slide');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $datas=array(
            "ten_banner"=> $data->name_slide,
            'anh_banner'=>$filename,
            'tieu_de'=>$data->link,
            'noi_dung'=>'',
            "created_at"=>date('Y-m-d h:i:s'),
            );
            $checkInsert = DB::table('banner')->insert($datas);
            if($checkInsert){
                if($data->file('image_slide')){
                    $file->move(public_path('image/image_slide'), $filename);
                }
            }
    }
    public function loadOne($id){
        $query = DB::table($this->table)->where('id','=',$id);
        $obj = $query->first();
        return $obj;
    }
    public static  function  someFunction() {
        $query = DB::table('banner')->select('banner.*');
        $List = $query->paginate(15);
        return $List;
    }
    public function updateBanner($id,$data){
        
        $datas=array(
            "ten_banner"=> $data->name_slide,
            'tieu_de'=>$data->link,
            'noi_dung'=>'',
            "updated_at"=>date('Y-m-d h:i:s'),
            );
       if($data->image_slide == ''){

       } else{
        $file= $data->file('image_slide');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $datas['anh_banner'] = $filename;
       }
      
       $checkUpdate = DB::table($this->table)->where('id','=',$id)->update($datas);
       if($checkUpdate){
        if($data->file('image_slide')){
            $file->move(public_path('image/image_slide'), $filename);
        }
    }
       
    }
}
