<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicSetlist extends Model
{
    
    protected $table='music_setlist';
    
    protected $fillable=[
        'music_id',
        'setlist_id',
        'song_order',
        'live_memo',
        ];
        
    use HasFactory;
    
    public function music()
    {
        return $this->belongsTo(Music::class,'music_id','id');
    }
    
    public function setlists()
{
    return $this->belongsToMany(Setlist::class, 'music_setlist', 'music_id', 'setlist_id');
        // ->withPivot('song_order', 'live_memo');
}

}
