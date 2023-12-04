<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('vehicles')->insert([
            ['type_name' => '9 chỗ'],
            ['type_name' => '11 chỗ'],
            ['type_name' => '16 chỗ'],
            ['type_name' => '20 chỗ'],
            ['type_name' => '24 chỗ'],
            ['type_name' => '30 chỗ'],
            ['type_name' => '35 chỗ'],
            ['type_name' => '45 chỗ'],
            // Thêm dữ liệu cho các loại xe khác nếu cần
        ]);

        DB::table('seats_layouts')->insert([

            [
                'vehicle_id' => 1,
                'row' => 1,
                'seat' => json_encode(["icon", "F1", "F2"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 1,
                'row' => 2,
                'seat' => json_encode(["F3", "", "F4"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 1,
                'row' => 3,
                'seat' => json_encode(["F5", "", "F6"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 1,
                'row' => 4,
                'seat' => json_encode(["F7", "F8", "C9"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],




            [
                'vehicle_id' => 2,
                'row' => 1,
                'seat' => json_encode(["icon", "C1", "C2"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 2,
                'row' => 2,
                'seat' => json_encode(["C3", "", "C4"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 2,
                'row' => 3,
                'seat' => json_encode(["C5", "", "C6"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 2,
                'row' => 4,
                'seat' => json_encode(["C7", "", "C8"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 2,
                'row' => 5,
                'seat' => json_encode(["C9", "C10", "C11"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],



            [
                'vehicle_id' => 8,
                'row' => 1,
                'seat' => json_encode(["icon", "", "","", ""]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 8,
                'row' => 2,
                'seat' => json_encode(["B1", "B2", "","B3", "B4"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 8,
                'row' => 2,
                'seat' => json_encode(["B5", "B6", "","B7", "B8"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 8,
                'row' => 2,
                'seat' => json_encode(["E1", "E2", "","E3", "E4"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 8,
                'row' => 2,
                'seat' => json_encode(["E5", "E6", "","E7", "E8"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 8,
                'row' => 2,
                'seat' => json_encode(["E9", "E10", "","E11", "E12"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 8,
                'row' => 2,
                'seat' => json_encode(["V1", "V2", "","V3", "V4"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 8,
                'row' => 2,
                'seat' => json_encode(["V5", "V6", "","V7", "V8"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 8,
                'row' => 2,
                'seat' => json_encode(["V9", "V10", "","V11", "V12"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 8,
                'row' => 2,
                'seat' => json_encode(["L1", "L2", "","L3", "L4"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 8,
                'row' => 2,
                'seat' => json_encode(["L5", "L6", "","L7", "L8"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 8,
                'row' => 2,
                'seat' => json_encode(["L9", "L10", "L11","L12", "L13"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],



            // Thêm dữ liệu cho các loại xe khác nếu cần
        ]);

    }
}
