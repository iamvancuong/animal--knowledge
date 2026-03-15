<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;
use Carbon\Carbon;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'System Admin',
                'email' => 'system@gmail.com',
                'address' => 'Hệ thống',
                'gender' => 0,
                'password' => Hash::make('123456'),
                'role_id' => 0,
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'address' => '175 Tây Sơn Đống Đa',
                'gender' => 0,
                'password' => Hash::make('123456'),
                'role_id' => 1,
                'created_at' => Carbon::create(2024, 5, 13, 11, 30, 0)
            ],
            [
                'name' => 'Trương Văn Cường',
                'email' => 'cuong@gmail.com',
                'address' => '16 Mạc Thái Tổ',
                'gender' => 1,
                'password' => Hash::make('123456'),
                'role_id' => 2,
                'created_at' => Carbon::create(2024, 6, 2, 10, 30, 0)
            ],
            [
                'name' => 'Bá Thị Thư',
                'email' => 'bathithu2002@gmail.com',
                'address' => '16 Mạc Thái Tổ',
                'gender' => 1,
                'password' => Hash::make('123456'),
                'role_id' => 2,
                'created_at' => Carbon::create(2024, 6, 15, 10, 30, 0)
            ],
            [
                'name' => 'Đăng Nhân',
                'email' => 'nguyendangnhan572002@gmail.com',
                'address' => '902 Kim Giang',
                'gender' => 0,
                'password' => Hash::make('123456'),
                'role_id' => 2,
                'created_at' => Carbon::create(2024, 6, 21, 10, 30, 0)
            ],
            [
                'name' => 'Trần Trọng Tấn',
                'email' => 'trantrongtan@gmail.com',
                'address' => '16 Hai Bà Trưng',
                'gender' => 0,
                'password' => Hash::make('123456'),
                'role_id' => 2,
                'created_at' => Carbon::create(2024, 7, 1, 10, 30, 0)
            ],
            [
                'name' => 'Bùi Đức Giang',
                'email' => 'buiducgiang@gmail.com',
                'address' => '21 Nguyễn Xiển',
                'gender' => 0,
                'password' => Hash::make('123456'),
                'role_id' => 2,
                'created_at' => Carbon::create(2024, 7, 5, 10, 30, 0)
            ],
            [
                'name' => 'Hoàng Minh Hùng',
                'email' => 'hoangminhhung@gmail.com',
                'address' => '21 Khu công nghiệp Ngọc Hồi',
                'gender' => 0,
                'password' => Hash::make('123456'),
                'role_id' => 2,
                'created_at' => Carbon::create(2024, 7, 10, 10, 30, 0)
            ],
            [
                'name' => 'Nguyễn Hữu Huy',
                'email' => 'nguyenhuuhuy@gmail.com',
                'address' => '50 Thanh Xuân ,Cầu Giấy',
                'gender' => 0,
                'password' => Hash::make('123456'),
                'role_id' => 2,
                'created_at' => Carbon::create(2024, 7, 13, 10, 30, 0)
            ],
            [
                'name' => 'Nguyễn Kim Báu',
                'email' => 'nguyenkimbau@gmail.com',
                'address' => '30 Cổ Nhuế',
                'gender' => 0,
                'password' => Hash::make('123456'),
                'role_id' => 2,
                'created_at' => Carbon::create(2024, 7, 2, 10, 30, 0)
            ],
            [
                'name' => 'Phùng Kí Tài',
                'email' => 'phungkitai@gmail.com',
                'address' => '45 Kim Văn Kim Lũ',
                'gender' => 0,
                'password' => Hash::make('123456'),
                'role_id' => 2,
                'created_at' => Carbon::create(2024, 7, 1, 10, 30, 0)
            ],
        ]);
    }
}
