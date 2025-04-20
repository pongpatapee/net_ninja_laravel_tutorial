<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ninja extends Model
{
    /** @use HasFactory<\Database\Factories\NinjaFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'skill',
        'bio',
    ];

    public function dojo()
    {
        return $this->belongsTo(Dojo::class);
    }
}
