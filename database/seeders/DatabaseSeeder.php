<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as Database;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    User::factory()->create([
      'name' => 'Admin',
      'email' => 'admin@example.com',
      'role' => 'admin',
    ]);

    User::factory()->create([
      'name' => 'Test User',
      'email' => 'test@example.com',
    ]);

    Message::factory()->count(20)->create();
  }
}
