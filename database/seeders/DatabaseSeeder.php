<?php

namespace Database\Seeders;
use App\Models\Customer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        Customer::factory()->count(20)->create();
    }
}
