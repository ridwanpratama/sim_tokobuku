<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345'),
            'akses' => 'Admin',
            'alamat' => 'Cimande Caringin Bogor',
            'telpon' => '08123456789',
            'status' => 'Aktif',
        ]);

        DB::table('users')->insert([
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => Hash::make('12345'),
            'akses' => 'Manager',
            'alamat' => 'Cimande Bogor',
            'telpon' => '081321212',
            'status' => 'Aktif',
        ]);
    }
}
