<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ctCart extends Model
{
    use HasFactory;
    protected $table = 'hoa_don_chi_tiet';
    protected $fillable = [
        'id',
        'hoa_don_id',
        'san_pham_id',
        'so_luong',
        'tong_tien',
        'created_at',
        'created_at',
    ];
    public function createCtHoaDon($data){
    
        $check = DB::table($this->table)->insert($data);
    }

    public function getCtCart($id){
        $query = DB::table('hoa_don_chi_tiet')->join('san_pham','san_pham.id','=','hoa_don_chi_tiet.san_pham_id')->where('hoa_don_id','=',$id)->select('hoa_don_chi_tiet.*', 'san_pham.anh_san_pham','san_pham.ten_san_pham');
        $data = $query->get();
        return $data;
    }
}
