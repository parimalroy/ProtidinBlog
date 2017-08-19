<?php

use Illuminate\Database\Seeder;

class tbl_admin_TableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('tbl_admin')->insert([
            'admin_name' => 'Parimal Kumar Roy',
            'email_address' => 'parimal.reg@gmail.com',
            'password' => md5('demo125'),
            'phone_number' => '01737620970',
            'access_label' => '1',
        ]);
    }

}
