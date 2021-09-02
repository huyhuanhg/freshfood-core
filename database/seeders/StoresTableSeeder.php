<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $demoStores = [
            [
                'store_name' => 'Trà sữa Bảo Anh',
                'store_not_mark' => "tra-sua-bao-anh",
                'store_category' => 6,
                'store_address' => 'Thôn Đông - Vạn Trạch - Bố Trạch - Quảng Bình',
                'phone_contact' => '0985356050',
                'owner' => 2,
                'store_avatar' => '/images/uploads/store-avatar/store-1.jpg',
                'store_province_code' => 44,
                'store_district_code' => 455,
                'store_ward_code'=>19168,
                'store_specific_address' => 'Thôn Đông',
                'open_time' => '15:00',
                'close_time' => '21:00',
                'avg_rate' => 0,
                'store_description' => "Chuyên các loại trà sữa mì cay",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Trà sữa Minh Châu',
                'store_not_mark' => "tra-sua-minh-chau",
                'store_category' => 6,
                'store_address' => 'Thôn Đông - Vạn Trạch - Bố Trạch - Quảng Bình',
                'phone_contact' => '0985356050',
                'owner' => 2,
                'store_avatar' => '/images/uploads/store-avatar/store-2.jpeg',
                'store_province_code' => 44,
                'store_district_code' => 455,
                'store_ward_code'=>19168,
                'store_specific_address' => 'Thôn Đông',
                'open_time' => '17:00',
                'close_time' => '22:00',
                'avg_rate' => 0,
                'store_description' => "Chuyên các loại trà sữa mì cay",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Ăn vặt Minh Anh',
                'store_not_mark' => "an-vat-minh-anh",
                'store_category' => 6,
                'store_address' => 'Quỳnh Tiến - Tượng Văn - Nông Cống - Thanh Hóa',
                'phone_contact' => '0982184651',
                'owner' => 2,
                'store_avatar' => '/images/uploads/store-avatar/store-3.jpeg',
                'store_province_code' => 38,
                'store_district_code' => 404,
                'store_ward_code'=>16357,
                'store_specific_address' => 'Quỳnh Tiến',
                'open_time' => '14:00',
                'close_time' => '22:00',
                'avg_rate' => 0,
                'store_description' => "Chuyên các món ăn chiên giòn",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Quán nhậu Chí Phèo',
                'store_not_mark' => "tra-sua-bao-anh",
                'store_category' => 9,
                'store_address' => 'Quỳnh Tiến - Tượng Văn - Nông Cống - Thanh Hóa',
                'phone_contact' => '0982184651',
                'owner' => 2,
                'store_avatar' => '/images/uploads/store-avatar/store-4.jpg',
                'store_province_code' => 38,
                'store_district_code' => 404,
                'store_ward_code'=>16357,
                'store_specific_address' => 'Quỳnh Tiến',
                'open_time' => '15:00',
                'close_time' => '23:00',
                'avg_rate' => 0,
                'store_description' => "Vừa nhậu vừa ca",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Nhà hàng Vạn Lộc',
                'store_not_mark' => "nha-hang-van-loc",
                'store_category' => 11,
                'store_address' => 'Quỳnh Tiến - Tượng Văn - Nông Cống - Thanh Hóa',
                'phone_contact' => '0982184651',
                'owner' => 2,
                'store_avatar' => '/images/uploads/store-avatar/store-5.jpg',
                'store_province_code' => 38,
                'store_district_code' => 404,
                'store_ward_code'=>16357,
                'store_specific_address' => 'Quỳnh Tiến',
                'open_time' => '07:00',
                'close_time' => '22:00',
                'avg_rate' => 0,
                'store_description' => "Chuyên bánh sinh nhật, bánh ngọt, bánh kem, bánh bông lan, ...",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Cafe Thôi Kệ',
                'store_not_mark' => "cafe-thoi-ke",
                'store_category' => 6,
                'store_address' => 'Thôn Đông - Vạn Trạch - Bố Trạch - Quảng Bình',
                'phone_contact' => '0985356050',
                'owner' => 2,
                'store_avatar' => '/images/uploads/store-avatar/store-6.jpg',
                'store_province_code' => 44,
                'store_district_code' => 455,
                'store_ward_code'=>19168,
                'store_specific_address' => 'Thôn Đông',
                'open_time' => '07:00',
                'close_time' => '23:00',
                'avg_rate' => 0,
                'store_description' => "Bỏ qua mọi thứ, thôi kệ mà chơi",
                'store_active' => 1,
            ],
        ];

        DB::table('stores')->insert($demoStores);
    }
}