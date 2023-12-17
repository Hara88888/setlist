<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $table='musics';
    
    protected $fillable = [
        'music_name',
        'release_date',
        'music_explanation',
        ];
        
        // protected $casts = [
        //     'music_name' =>'array',
        //     ];
    
    use HasFactory;
    
    public function Setlists(){
        return $this->belongsToMany(Setlist::class);
        // ->withPivot('song_order','live_memo');
    }
    
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function musicsetlist()
{
    return $this->hasOne(MusicSetlist::class);
}

}
