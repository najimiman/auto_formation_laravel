<?php

namespace App\Models;
use App\Models\Detail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    // public function detail():HasOne
    // {
    //     return $this->hasOne(Detail::class);
    // }

    public function onedetail(){
        return $this->hasOne(Detail::class);
    }
    function HasManydetail(){
        return $this->hasMany(Detail::class);
      }
}
