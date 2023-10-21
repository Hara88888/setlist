<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $fillable = [
        'venue_name',
        'venue_capacity',
        'venue_location',
        'venue_img',
        'venue_explanation',
        ];
    
    use HasFactory;
    
    public function setlists()
{
    return $this->hasMany(Setlist::class); 
}

}

