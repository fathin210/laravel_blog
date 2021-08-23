<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        "list"
    ];

    //method ini untuk ngasih tau kolom mana yang jadi identifier nya defaultnya id,
    //Khusus Route yang sifatnya resource itu klo mau custom wildcardnya harus dari
    //method ini.
    public function getRouteKeyName()
    {
        return 'id';
    }
}
