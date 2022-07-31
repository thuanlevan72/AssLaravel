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
    public static  function  someFunction() {
        $query = DB::table('banner')->select('banner.*');
        $List = $query->paginate(15);
        return $List;
    }
}
