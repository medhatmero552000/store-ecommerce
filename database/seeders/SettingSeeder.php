<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // if error happened class not exist run composer dump-autoload in terminal
        Setting::truncate();
        // setting Model -> setMany function
        setting::setMany([
            'default_lang' => 'en',
            'default_timezone' => 'Africa/Cairo',
            'reviews_enabled' => true,
            'auto_approve_reviews' => true,
            'supported_currency' => ['usd', 'LE', 'SAR'],
            'default_currency' => 'USD',
            'store_email' => 'medhatmero552000@gmail.com',
            'search-engin' => 'mysql',
            'free_delivery ' => 0, // التوصيل  المجانى
            'internal_delivery' => 0, // التوصيل الداخلى
            'external_delivery' => 0, // التوصيل الخارجى
            'translatable' => [
                'store name' => 'Fleet Card',
                'free delivery ' => 'free delivery ',
                'internal delivery  ' => 'internal delivery',
                'external delivery ' => 'External deliver'
            ],
        ]);
    }
}
