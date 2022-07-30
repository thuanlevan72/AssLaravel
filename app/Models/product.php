<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class product extends Model
{
    use HasFactory;
    protected $table = 'san_pham';
    protected $fillable = [
        'id',
        'loai_san_pham_id',
        'ten_san_pham',
        'anh_san_pham',
        'so_luong',
        'gia_san_pham',
        'gia_khuyen_mai',
        'noi_dung_san_pham',
        'tieu_de_san_pham',
        'trang_thai',
        'created_at',
        'updated_at'

    ];
    public function addProuduct($data){
            $file= $data->file('image_product');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $datas=array(
            "loai_san_pham_id"=> $data->type_product,
            "ten_san_pham"=> $data->name_product,
            "anh_san_pham" => $filename,
            "so_luong"=> $data->quantity,
            'gia_san_pham'=> $data->price,
            'gia_khuyen_mai'=> $data->sale_price,
            'noi_dung_san_pham'=>$data->body,
            'tieu_de_san_pham'=>$data->title,
            'trang_thai'=>$data->status,
            'created_at'=>date('Y-m-d h:i:s'),
            );
            $checkInsert = DB::table('san_pham')->insert($datas);
            if($checkInsert){
                if($data->file('image_product')){
                    $file->move(public_path('image/image_product'), $filename);
                }
            }
            return $checkInsert;
    }
    public function getJoinTypeproduct($params = []){
       
        $query = DB::table('san_pham')->join('loai_san_pham','san_pham.loai_san_pham_id','=','loai_san_pham.id')
        ->select('san_pham.*','loai_san_pham.id', 'loai_san_pham.*');
        
        $List = $query->paginate(15);
        return $List;
    }
}
