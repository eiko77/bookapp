<?php

use Illuminate\Database\Seeder;

class RentalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            'id' =>'1',
            'bookname' =>'Test本',
            'borrower' =>'Taro',
        ];
    }
}
