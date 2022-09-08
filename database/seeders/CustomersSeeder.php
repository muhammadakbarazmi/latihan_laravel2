<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
            'image' => '/template/img/cappuccino.jpg',
            'nama' => 'Akbar',
            'tanggal' => '2022/09/08'],
            [
            'image' => '/template/img/espresso.jpg',
            'nama' => 'Azmi',
            'tanggal' => now()],
            [
            'image' => '/template/img/red eye.jpg',
            'nama' => 'Bruno',
            'tanggal' => now()],
            [
            'image' => '/template/img/kothok.jpeg',
            'nama' => 'Silviana',
            'tanggal' => now()],
            [
            'image' => '/template/img/toraja.jpeg',
            'nama' => 'Karina',
            'tanggal' => now()]

        ]);
    }
}
