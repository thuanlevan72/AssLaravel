<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class cart extends Model
{
    use HasFactory;
    protected $table = 'hoa_don';
    protected $fillable = [
        'id',
        'ma_hoa_don',
        'dia_chi',
        'email',
        'phone',
        'trang_thai',
        'created_at',
        'updated_at',
    ];
    public function getHoaDon($search)
    {
        $query = DB::table($this->table)->where('ma_hoa_don','like','%'.$search.'%')->select($this->fillable);
        $List = $query->paginate(15);
        return $List;
    }
    public function CreateHoaDon($data){
        $id = DB::table($this->table)->insertGetId(
            ['ma_hoa_don' => '',
             'dia_chi' => $data->address,
             'email'=>$data->email,
             'phone'=>$data->phone,
             'trang_thai'=> 0,
             'created_at'=>date('Y-m-d h:i:s'),
             ]
        );
        DB::table($this->table)->where('id', $id)->update([
        'ma_hoa_don'=>'HD'.strtotime(date('Y-m-d h:i:s')).$id + 123 * 123,
        ]);
        return $id;
    }

    public function updateStatus($id){
        DB::table($this->table)->where('id', $id)->update([
            'trang_thai'=> 1,
        ]);
    }
}
