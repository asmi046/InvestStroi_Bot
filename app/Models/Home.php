<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'addres',
        'flors',
    ];

    public function home_kvartirs() {
        return $this->hasMany(Kvartira::class);
    }
}
