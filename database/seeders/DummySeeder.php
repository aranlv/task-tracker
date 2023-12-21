<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            'title' => 'Submit revision',
            'desc' => "Readjust to Mr. Ahmad's advice",
            'dueDate' => '2024/05/01',
            'status' => 'On Going',
            'image' => 'Submit revision-revision.jpg',
            'categoryID' => 1
        ]);

        DB::table('tasks')->insert([
            'title' => 'Buy groceries',
            'desc' => "Lucky mart sale on 03/28",
            'dueDate' => '2024/04/29',
            'status' => 'Not Yet',
            'image' => 'Buy groceries-fridge.jpg',
            'categoryID' => 2
        ]);
    }
}
