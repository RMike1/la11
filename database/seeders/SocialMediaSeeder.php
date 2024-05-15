<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('socialmedia')->insert([
            [
                'name'=>'facebook',
                'url'=>'www.facebook.com',
            ],
            [
                'name'=>'instagram',
                'url'=>'www.instagram.com',
            ],
            [
                'name'=>'pinterest',
                'url'=>'www.pinterest.com',
            ],
            [
                'name'=>'twitter',
                'url'=>'www.twitter.com',
            ],
            [
                'name'=>'youtube',
                'url'=>'www.youtube.com',
            ],
            [
                'name'=>'linkedin',
                'url'=>'www.linkedin.com',
            ],
            [
                'name'=>'whatsapp',
                'url'=>'www.whatsapp.com',
            ],
        ]);
    }
}
