<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['name', 'age', 'bio', 'workplace_id'];
    /** @use HasFactory<\Database\Factories\PersonFactory> */
    use HasFactory;

    public function workplace(){
        return $this->belongsTo(Workplace::class);
    }
}
