<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Apprenant extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prenom','classe'];
    // protected $guarded = [];

    public function formations(){
        return $this->hasMany(Formation::class);
    }
}
