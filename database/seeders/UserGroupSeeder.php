<?php

namespace Database\Seeders;

use App\Models\UserGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserGroup::factory()->create([
            "name" => "Customer",
        ]);

        UserGroup::factory()->create([
            "name" => "Supplier",
        ]);

        UserGroup::factory()->create([
            "name" => "Landlord",
        ]);

        UserGroup::factory()->create([
            "name" => "Salesman",
        ]);

        UserGroup::factory()->create([
            "name" => "Other",
        ]);
    }
}
