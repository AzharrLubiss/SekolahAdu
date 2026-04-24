<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComplaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Admin Sarpras',
            'email' => 'admin@sekolah.adu',
            'role' => 'admin',
            'password' => bcrypt('11223344'),
        ]);

        \App\Models\Complaint::factory(20)->create();
    }
}
