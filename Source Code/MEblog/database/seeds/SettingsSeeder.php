<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Setting::create([
            'blog_name'=>'nada',
            'phone_number'=>('077777'),
            'blog_email'=>('xyz@gmail.com'),
            'address'=>('orang coding acadeem'),
        ]);
 
    }
}
