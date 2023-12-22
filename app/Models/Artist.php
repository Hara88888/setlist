<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'artist_name',
        'formation_date',
        'artist_explanation',
        
        ];
    
    use HasFactory;
    
    public function setlists()
    {
        return $this->belongsToMany(Setlist::class);
    }
    
    public function musics()
    {
        return $this->hasMany(Music::class);
    }
    
}
