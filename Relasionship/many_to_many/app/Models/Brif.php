<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brif extends Model
{
    use HasFactory;
    protected $table='brifs';
    public function apprenents(){
        return $this->belongsToMany(Apprenent::class,'brifappres');
    }
}
