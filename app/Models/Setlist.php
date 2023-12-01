<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setlist extends Model
{
    protected $fillable = [
        'song_order',
        'event_date',
        'live_title',
        'live_memo',
        'nice',
        'live_explation',
        'live_img',
        
        ];
        
        // protected $casts = [
        //     'song_order' =>'array',
        //     'live_memo' =>'array',
        //     ];
    
    use HasFactory;
    
    public function artists(){
        return $this->belongsToMany(Artist::class);
    }
    
    public function musics(){
        return $this->belongsToMany(Music::class)
        ->withPivot('song_order','live_memo');
    }
    
    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }
      public function musicSetlists()
    {
        return $this->belongsToMany(MusicSetlist::class);
    }
}
