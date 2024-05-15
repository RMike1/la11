<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IntervieweeSocialmediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('interviewee_socialmedia')->insert([
            [
                'socialmedia_id'=>1,
                'interviewee_id'=>1
            ],
            [
                'socialmedia_id'=>1,
                'interviewee_id'=>1
            ],
            [
                'socialmedia_id'=>1,
                'interviewee_id'=>1
            ],
            [
                'socialmedia_id'=>3,
                'interviewee_id'=>2
            ],
            [
                'socialmedia_id'=>3,
                'interviewee_id'=>2
            ],
            [
                'socialmedia_id'=>4,
                'interviewee_id'=>5
            ],
            [
                'socialmedia_id'=>2,
                'interviewee_id'=>5
            ],
            [
                'socialmedia_id'=>6,
                'interviewee_id'=>5
            ],
            [
                'socialmedia_id'=>7,
                'interviewee_id'=>4
            ],
        ]);
    }
}
