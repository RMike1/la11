<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategoryIntervieweeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_interviewee')->insert([
            [
                'category_id'=>1,
                'interviewee_id'=>1
            ],
            [
                'category_id'=>4,
                'interviewee_id'=>2
            ],
            [
                'category_id'=>3,
                'interviewee_id'=>1
            ],
            [
                'category_id'=>3,
                'interviewee_id'=>2
            ],
            [
                'category_id'=>3,
                'interviewee_id'=>2
            ],
            [
                'category_id'=>4,
                'interviewee_id'=>5
            ],
            [
                'category_id'=>2,
                'interviewee_id'=>5
            ],
        ]);
    }
}
