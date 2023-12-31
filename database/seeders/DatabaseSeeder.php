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
            ['type_name' => '9'],
            ['type_name' => '11'],
            ['type_name' => '16'],
            ['type_name' => '29'],
            ['type_name' => '35'],
            ['type_name' => '45'],
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
                'vehicle_id' => 3,
                'row' => 1,
                'seat' => json_encode(["icon","","T1", "T2"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 3,
                'row' => 2,
                'seat' => json_encode(["T3", "T4", "T5",""]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 3,
                'row' => 3,
                'seat' => json_encode(["T6", "T7", "","T8"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 3,
                'row' => 4,
                'seat' => json_encode(["A1", "A2", "","A3"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 3,
                'row' => 5,
                'seat' => json_encode(["A4", "A5", "A6","A7"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],








            [
                'vehicle_id' => 4,
                'row' => 1,
                'seat' => json_encode(["icon","", "","",""]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 4,
                'row' => 2,
                'seat' => json_encode(["B1","B2","","B3","B5"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 4,
                'row' => 3,
                'seat' => json_encode(["B6", "B7", "","B8","B9"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 4,
                'row' => 4,
                'seat' => json_encode(["N1", "N2", "","N3","N4"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 4,
                'row' => 5,
                'seat' => json_encode(["N5", "N6", "","N7","N8"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 4,
                'row' => 6,
                'seat' => json_encode(["K1", "K2", "","K3","K4"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 4,
                'row' => 7,
                'seat' => json_encode(["K5", "K6", "","K7","K8"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 4,
                'row' => 8,
                'seat' => json_encode(["V1", "V2", "V3","V4","V5"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'vehicle_id' => 5,
                'row' => 1,
                'seat' => json_encode(["icon", "", "","",""]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 5,
                'row' => 2,
                'seat' => json_encode(["H1", "H2", "","H3","H4"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 5,
                'row' => 3,
                'seat' => json_encode(["H5", "H6", "","H7","H8"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 5,
                'row' => 4,
                'seat' => json_encode(["K1", "K2", "","K3","K4"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 5,
                'row' => 5,
                'seat' => json_encode(["K5", "K6", "","K7","K8"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 5,
                'row' => 6,
                'seat' => json_encode(["N1", "N2", "","N3","N4"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 5,
                'row' => 7,
                'seat' => json_encode(["N5", "N6", "","N7","N8"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 5,
                'row' => 8,
                'seat' => json_encode(["P1", "P2", "","P3","P4"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 5,
                'row' => 9,
                'seat' => json_encode(["P5", "P6", "","P7","P8"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 5,
                'row' => 10,
                'seat' => json_encode(["Y1", "Y2", "","Y3","Y4"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 5,
                'row' => 11,
                'seat' => json_encode(["Y5", "Y6", "","Y7","Y8"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 5,
                'row' => 12,
                'seat' => json_encode(["M1", "M2", "M3","M4","M5"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],




            [
                'vehicle_id' => 6,
                'row' => 1,
                'seat' => json_encode(["icon", "", "","", ""]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 6,
                'row' => 2,
                'seat' => json_encode(["B1", "B2", "","B3", "B4"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 6,
                'row' => 2,
                'seat' => json_encode(["B5", "B6", "","B7", "B8"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 6,
                'row' => 2,
                'seat' => json_encode(["E1", "E2", "","E3", "E4"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 6,
                'row' => 2,
                'seat' => json_encode(["E5", "E6", "","E7", "E8"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 6,
                'row' => 2,
                'seat' => json_encode(["E9", "E10", "","E11", "E12"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 6,
                'row' => 2,
                'seat' => json_encode(["V1", "V2", "","V3", "V4"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 6,
                'row' => 2,
                'seat' => json_encode(["V5", "V6", "","V7", "V8"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 6,
                'row' => 2,
                'seat' => json_encode(["V9", "V10", "","V11", "V12"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 6,
                'row' => 2,
                'seat' => json_encode(["L1", "L2", "","L3", "L4"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 6,
                'row' => 2,
                'seat' => json_encode(["L5", "L6", "","L7", "L8"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 6,
                'row' => 2,
                'seat' => json_encode(["L9", "L10", "L11","L12", "L13"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],



            // Thêm dữ liệu cho các loại xe khác nếu cần
        ]);

    }
}
