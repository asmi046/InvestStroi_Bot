<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kvartira extends Model
{
    use HasFactory;

    public $fillable = [
        'type',
        'number',
        'area',
        'area_live',
        'flor',
        'rooms',
        'plan_img',
        'home_1_img',
        'home_2_img',
        'koridor_img',
        'home_id'
    ];

    public function home_info() {
        return $this->hasOne(Home::class);
    }

}
