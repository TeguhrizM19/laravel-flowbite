<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyUserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $userData = [
      [
        'name' => 'Teguh',
        'email' => 'teguh@gmail.com',
        'role' => 'operator',
        'password' => bcrypt('12345'),
      ],
      [
        'name' => 'Rizqi',
        'email' => 'rizqi@gmail.com',
        'role' => 'keuangan',
        'password' => bcrypt('12345'),
      ],
      [
        'name' => 'Ludin',
        'email' => 'ludin@gmail.com',
        'role' => 'marketing',
        'password' => bcrypt('12345'),
      ]
    ];

    foreach ($userData as $user) {
      User::create($user);
    }
  }
}
