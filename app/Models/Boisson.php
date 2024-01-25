<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
    use HasFactory;
    protected $table = 'boisson';
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    
        
}
