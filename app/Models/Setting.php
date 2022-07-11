<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
   // use HasFactory;

    /*
    |---------------------------------------------------------------------------------
    | use Translatable;
    | Trait -> to make a relation between two tables [setting && setting translations ]
    | and return all translations
    |----------------------------------------------------------------------------------
    */
    use Translatable;

    //protected $with = ['translations'];
    protected $translatedAttributes = ['value']; // الحقول التى سوف يتم وضع الترجمه لها
    protected $guarded = []; // fileable fields
    protected $casts = ['is_translatable' => 'boolean'];


    /*
    |---------------------------------------------------------------------------------
    | setMany function for seeder
    | To insert data into DB settings table
    |----------------------------------------------------------------------------------
    */
    public static function setMany($settings)
    {
        foreach ($settings as $key => $value) {
            self::set($key, $value);
        }
    }

    public static function set($key, $value)
    {
        if ($key === 'translatable') {
            return static::setTrnslationSetting($value);
        }
        if (is_array($value)) {
            $value = json_encode($value);
        }
        static::updateOrCreate(['key' => $key], ['plan_value' => $value]);
    }

    public static function setTrnslationSetting($settings = [])
    {
        foreach ($settings as $key => $value) {
            static::updateOrCreate(
                ['key' => $key],
                [
                    'is_translatable' => true,
                    'value' => $value
                ]
            );
        }
    }
}
