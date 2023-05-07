<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
  
        $role = Role::create(['name' => 'admin']);
        User::create([
            'name'=>'Juan Pablo Rodriguez',
            'email'=>'pablojuan123sc@gmail.com',
            'password'=>bcrypt(12345678)
        ])->assignRole('admin');
                   
        
    }
}
