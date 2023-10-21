<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artist;
use App\Models\Category;
use App\Models\Music;
use App\Models\Mysetlist;
use App\Models\Setlist;
use App\Models\Venue;
use App\Models\MusicSetlist;
use Illuminate\Support\Facades\DB;

class SetlistController extends Controller
{
      public function index()
    {
        return view('setlists.setlist_index'); 
    }
     
     public function create()
    {
        return view('setlists.setlist_create'); 
    }
    public function store(Request $request, Artist $artist, Setlist $setlist, Venue $venue,  Music $music,){
        $artistdata = $request['artist'];
        $venuedata = $request['venue'];
        $setlistdata = $request['setlist'];
        $musicdata = $request['music'];
        $songorders =$request->input('music_setlist.song_order');
        $livememos = $request->input('music_setlist.live_memo');
        // $setlistdata['song_order'] = intval($setlistdata['song_order']);
        
        $musicdataflat=[];
        foreach ($musicdata as $musicName){
            $musicdataflat=array_merge($musicdataflat,$musicName);
        }
        // $artist->fill($artistdata)->save();
        // $venue->fill($venuedata)->save();
        // $setlist->venue_id= $venue->id;
        
        // $music->artist_id=$artist->id;
        // $music->fill($musicdata)->save();
         if((DB::table('venues')->where('venue_name',$venuedata)->exists())){
          $venueId=$venue->where('venue_name',$venuedata)->value('id');
          $setlist->venue_id=$venueId;
          $setlist->user_id=1;
          $setlist->fill($setlistdata)->save();
        };
       
      foreach ($musicdataflat as $musicName) {
    if ((DB::table('musics')->where('music_name', $musicName)->exists())) {
        $musicId = $music->where('music_name', $musicName)->value('id');
        $musicsetlist = new MusicSetlist();
        $musicsetlist->music_id = $musicId;
        $musicsetlist->setlist_id = $setlist->id;
        $index=array_search($musicName,$musicdataflat);
        $musicsetlist->song_order = $songorders[$index];
        $musicsetlist->live_memo = $livememos[$index];
        $musicsetlist->save();
    }
};

        
         if((DB::table('artists')->where('artist_name',$artistdata)->exists())){
           $artistId=$artist->where('artist_name',$artistdata)->value('id');
           $setlist->artists()->attach($artistId);
        };
        
        
        return redirect('/');
    }
    
    public function show()
    {
        return view('setlists.setlist_show');
    }
    
    public function artist_create()
    {
        return view('setlists.artist_create'); 
    }
    
    public function venue_create()
    {
        return view('setlists.venue_create'); 
    }
}