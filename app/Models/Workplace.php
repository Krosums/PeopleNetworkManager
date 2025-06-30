<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workplace extends Model
{
    protected $fillable = ['name', 'age', 'bio'];

    /** @use HasFactory<\Database\Factories\WorkplaceFactory> */
    use HasFactory;

    public function people(){
        return $this->hasMany(Person::class);      
    }
}
