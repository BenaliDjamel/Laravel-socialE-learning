<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Formation;

class Module extends Model
{
    protected $fillable = [
        'nom','formation_id'
    ];


    public function formation() {
        return $this->belongsTo(Formation::class);
    } 
}
