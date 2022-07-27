<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "name"=>"le van thuan",
                "email"=> "thuanlvph1687@gmail.com",
                "phone" => "09876543232",
                "imageUser" => "anh",
                "password" => Hash::make(123456),
                "level"=> 1,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],[
                "name"=>"le van thuan",
                "email"=> "thuanlvph1686@gmail.com",
                "phone" => "09876543231",
                "imageUser" => "anh",
                "password" => Hash::make(123456),
                "level"=> 1,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],[
                "name"=>"nguyễn văn linh",
                "email"=> "linhlvph1622@gmail.com",
                "phone" => "09876543234",
                "imageUser" => "anh",
                "password" => Hash::make(123456),
                "level"=> 1,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ]
        ];
        DB::table('users')->insert($users);
        $loaiSanPham = [
            [
                "ten_loai_san_pham" => "điện thoại 1",
                "anh_loai_san_pham" => "ảnh điện thoại 1",
                "tieu_de"=> "đây là điện thoại 1",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "ten_loai_san_pham" => "điện thoại 2",
                "anh_loai_san_pham" => "ảnh điện thoại ",
                "tieu_de"=> "đây là điện thoại 1",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "ten_loai_san_pham" => "điện thoại 3",
                "anh_loai_san_pham" => "ảnh điện thoại 1",
                "tieu_de"=> "đây là điện thoại 1",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ]
        ];
        DB::table('loai_san_pham')->insert($loaiSanPham);
 
        $sanPham = [
            [
                "loai_san_pham_id"=> 1,
                "ten_san_pham" => "điện thoại 1",
                "anh_san_pham"=>"anh_san_pham 1",
                "so_luong"=>20,
                "gia_san_pham"=> 1000000,
                "gia_khuyen_mai"=>90,
                "noi_dung_san_pham"=>"không có nội dung",
                "tieu_de_san_pham"=>"không có tiêu đề sản phẩm",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),


            ],
            [
                "loai_san_pham_id"=> 2,
                "ten_san_pham" => "điện thoại 2",
                "anh_san_pham"=>"anh_san_pham 2",
                "so_luong"=>20,
                "gia_san_pham"=>1000000,
                "gia_khuyen_mai"=>90,
                "noi_dung_san_pham"=>"không có nội dung",
                "tieu_de_san_pham"=>"không có tiêu đề sản phẩm",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),


            ],
            [
                "loai_san_pham_id"=> 2,
                "ten_san_pham" => "điện thoại 4",
                "anh_san_pham"=>"anh_san_pham 3",
                "so_luong"=>20,
                "gia_san_pham"=>1000000,
                "gia_khuyen_mai"=>90,
                "noi_dung_san_pham"=>"không có nội dung",
                "tieu_de_san_pham"=>"không có tiêu đề sản phẩm",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),


            ],
            [
                "loai_san_pham_id"=> 1,
                "ten_san_pham" => "điện thoại 5",
                "anh_san_pham"=>"anh_san_pham 4",
                "so_luong"=>20,
                "gia_san_pham"=> 1000000,
                "gia_khuyen_mai"=>90,
                "noi_dung_san_pham"=>"không có nội dung",
                "tieu_de_san_pham"=>"không có tiêu đề sản phẩm",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),


            ]
        ];
        DB::table('san_pham')->insert($sanPham);
        $Banner = [
            [
                'ten_banner' => "banner1",
                'anh_banner' => "anh.jqg",
                'tieu_de' => "dien thoai dang cap",
                'noi_dung' => "dien thoai dang cap",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                'ten_banner' => "banner2",
                'anh_banner' => "anh.jqg",
                'tieu_de' => "dien thoai dang cap",
                'noi_dung' => "dien thoai dang cap",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],[
                'ten_banner' => "banner3",
                'anh_banner' => "anh.jqg",
                'tieu_de' => "dien thoai dang cap",
                'noi_dung' => "dien thoai dang cap",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ]
        ];
        DB::table('banner')->insert($Banner);
        // $hoaDon = [
        //     [
        //         'ma_hoa_don' => "hd1",
        //         'tong_so_luong' => 3,
        //         'tong_tien' => 30000000,
        //         'dia_chi' => "ha noi",
        //         'email' => "A@gmail.com",
        //         'phone' => "099999999",
        //     ],
        //     [
        //         'ma_hoa_don' => "hd2",
        //         'tong_so_luong' => 3,
        //         'tong_tien' => 30000000,
        //         'dia_chi' => "ha noi",
        //         'email' => "A@gmail.com",
        //         'phone' => "099999999",
        //     ],
        //     [
        //         'ma_hoa_don' => "hd3",
        //         'tong_so_luong' => 3,
        //         'tong_tien' => 30000000,
        //         'dia_chi' => "ha noi",
        //         'email' => "A@gmail.com",
        //         'phone' => "099999999",
        //     ]
        // ];
        // DB::table('hoa_don')->insert($hoaDon);
        // $ctHoaDon = [

        // ];

    }
}
