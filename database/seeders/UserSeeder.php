<?php

namespace Database\Seeders;

use App\Models\Mentor;
use App\Models\Platinum;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'staff',
                'email' => 'staff@gmail.com',
                'email_verified_at' => '2024-05-28 15:00:00',
                'password' => bcrypt('asd12345'),
                'role' => 'staff',
                'photo' => '/storage/1/staff.jpeg'
            ],
            [
                'name' => 'platinum',
                'email' => 'asd@gmail.com',
                'email_verified_at' => '2024-05-28 15:00:00',
                'password' => bcrypt('asd12345'),
                'photo' => '/storage/2/Platinum.jpg'
            ],
            [
                'name' => 'mentor',
                'email' => 'mentor@gmail.com',
                'email_verified_at' => '2024-05-28 15:00:00',
                'password' => bcrypt('asd12345'),
                'role' => 'mentor',
                'photo' => '/storage/3/Mentor.webp'
            ]
        ];

        foreach ($users as $user) {
            $createdUser = User::create($user);

        // If this is the platinum user, create associated platinum record
            if ($user['name'] === 'platinum') {
                Platinum::create([
                    'user_id' => $createdUser->id,
                    'p_ic' => '020620060281',
                    'p_gender' => 'Male',
                    'p_religion' => 'Christian',
                    'p_race' => 'Chinese',
                    'p_citizenship' => 'Malaysian',
                    'p_address' => 'No 1, Jalan Bahagia 24, Taman Intan 28000 Temerloh Pahang',
                    'p_hp_no' => '017-9481932',
                    'p_fb_name' => 'Teh Kian He',
                    'p_edu_information' => 'Degree',
                    'p_pakej' => 'Premier',
                    'p_batch_no' => '22',
                    'p_cluster_of_study' => 'Software Engineering'
                ]);      
            }

            if ($user['name'] === 'staff') {
                Staff::create([
                    'user_id' => $createdUser->id,
                    's_ic' => '860413060751',
                    's_gender' => 'Male',
                    's_religion' => 'Islam',
                    's_race' => 'Malay',
                    's_citizenship' => 'Malaysian',
                    's_address' => 'No 1, Jalan Bahagia 24, Taman Intan 28000 Temerloh Pahang',
                    's_hp_no' => '012-3456789',
                    's_department' => 'IT',
                    's_position' => 'Member',
                ]);      
            }

            if ($user['name'] === 'mentor') {
                Mentor::create([
                    'user_id' => $createdUser->id,
                    'm_ic' => '740923064321',
                    'm_gender' => 'Male',
                    'm_religion' => 'Islam',
                    'm_race' => 'Malay',
                    'm_citizenship' => 'Malaysian',
                    'm_address' => 'No 1, Jalan Bahagia 24, Taman Intan 28000 Temerloh Pahang',
                    'm_hp_no' => '019-8765432',
                ]);      
            }
        }
    }
}
