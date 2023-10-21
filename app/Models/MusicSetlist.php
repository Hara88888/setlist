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
    
    public function setlist()
    {
        return $this->belongsTo(Setlist::class,'setlist_id','id');
    }
}
