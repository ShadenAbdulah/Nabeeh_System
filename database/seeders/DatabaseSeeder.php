<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Test;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Test::create(['type' => 'تتبع ', 'title' => 'نمط الخط المتعرج', 'session_name' => 'ZL_trace', 'content' => 'في الخطوة الأولى من النمط الأول،', 'dots' => 1]);
        Test::create(['type' => 'تنبأ ', 'title' => 'بنمط الخط المتعرج', 'session_name' => 'ZL_predict', 'content' => 'في الخطوة الثانية من النمط الأول،', 'dots' => 2]);
        Test::create(['type' => 'تتبع ', 'title' => 'نمط الخط المتعرج', 'session_name' => 'ZL_trace', 'content' => 'في الخطوة الثالثة من النمط الأول،', 'dots' => 3]);
        Test::create(['type' => 'تنبأ ', 'title' => 'بنمط الخط المتعرج', 'session_name' => 'ZL_predict', 'content' => 'في الخطوة الرابعة من النمط الأول،', 'dots' => 4]);
        Test::create(['type' => 'تتبع ', 'title' => 'نمط الخط المتعرج', 'session_name' => 'ZL_trace', 'content' => 'في الخطوة الخامسة من النمط الأول،', 'dots' => 5]);
        Test::create(['type' => 'تنبأ ', 'title' => 'بنمط الخط المتعرج', 'session_name' => 'ZL_predict', 'content' => 'في الخطوة السادسة من النمط الأول،', 'dots' => 6]);

        Test::create(['type' => 'تتبع ', 'title' => 'نمط الخط الدوري', 'session_name' => 'PL_trace', 'content' => 'في الخطوة الأولى من النمط الثاني،', 'dots' => 1]);
        Test::create(['type' => 'تنبأ ', 'title' => 'بنمط الخط الدوري', 'session_name' => 'PL_predict', 'content' => 'في الخطوة الثانية من النمط الثاني،', 'dots' => 2]);
        Test::create(['type' => 'تتبع ', 'title' => 'نمط الخط الدوري', 'session_name' => 'PL_trace', 'content' => 'في الخطوة الثالثة من النمط الثاني،', 'dots' => 3]);
        Test::create(['type' => 'تنبأ ', 'title' => 'بنمط الخط الدوري', 'session_name' => 'PL_predict', 'content' => 'في الخطوة الرابعة من النمط الثاني،', 'dots' => 4]);
        Test::create(['type' => 'تتبع ', 'title' => 'نمط الخط الدوري', 'session_name' => 'PL_trace', 'content' => 'في الخطوة الخامسة من النمط الثاني،', 'dots' => 5]);
        Test::create(['type' => 'تنبأ ', 'title' => 'بنمط الخط الدوري', 'session_name' => 'PL_predict', 'content' => 'في الخطوة السادسة من النمط الثاني،', 'dots' => 6]);
    }
}
