<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    // I campi che sono mass assignable sono: src, title, type...
    protected $fillable = [
        'title',
        'description',
        'src',
        'price',
        'series',
        'sale_date',
        'type',
        'artists',
        'writers'
    ];
}
