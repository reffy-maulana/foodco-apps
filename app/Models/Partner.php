<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'photo',
        'nohp',
        'deskripsi',
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
