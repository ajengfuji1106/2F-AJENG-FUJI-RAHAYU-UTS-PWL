<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class review_barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review_barang')->insert([
            [ 'ReviewBarang' => 
            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam quaerat, quasi iste adipisci corrupti fugiat ea sit aperiam cupiditate inventore, natus at dolores. Officiis asperiores sed eligendi, libero molestias vero?', 
            'IDBarang' => 1],
            [ 'ReviewBarang' => 
            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam quaerat, quasi iste adipisci corrupti fugiat ea sit aperiam cupiditate inventore, natus at dolores. Officiis asperiores sed eligendi, libero molestias vero?', 
            'IDBarang' => 2],
            [ 'ReviewBarang' => 
            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam quaerat, quasi iste adipisci corrupti fugiat ea sit aperiam cupiditate inventore, natus at dolores. Officiis asperiores sed eligendi, libero molestias vero?', 
            'IDBarang' => 3],
            [ 'ReviewBarang' => 
            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam quaerat, quasi iste adipisci corrupti fugiat ea sit aperiam cupiditate inventore, natus at dolores. Officiis asperiores sed eligendi, libero molestias vero?', 
            'IDBarang' => 4],
            [ 'ReviewBarang' => 
            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam quaerat, quasi iste adipisci corrupti fugiat ea sit aperiam cupiditate inventore, natus at dolores. Officiis asperiores sed eligendi, libero molestias vero?', 
            'IDBarang' => 5],
        ]);
    }
}
