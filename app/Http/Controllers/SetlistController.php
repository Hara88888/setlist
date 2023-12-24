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
         $setlists=Setlist::with('venue','artists')->latest()->take(10)->get();
        return view('setlists.setlist_index',compact('setlists')); 
    }
     
     public function create()
    {
        $artists=Artist::all();
        $venues=Venue::all();
        $musics=Music::all();
        return view('setlists.setlist_create', compact('artists','venues','musics')); 
    }
    
    
    public function store(Request $request, Artist $artist, Setlist $setlist, Venue $venue,  Music $music){
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
        
        
        return redirect('/setlists/' .$setlist->id);
    }
    
    public function show(Setlist $setlist)
    {
        $setlist=Setlist::with('venue','artists', 'musics.musicsetlist')->find($setlist->id);
        $artist=$setlist->artists;
        $venue=$setlist->venue;
        $musics=$setlist->musics()->orderBy('pivot_song_order','asc')->get();
        return view('setlists.setlist_show',compact('setlist','venue','artist','musics'));
    }
    
    public function show_artist_create()
    {
        return view('setlists.artist_create'); 
    }
    public function create_artist(Request $request,Artist $artist)
    {

        $request->validate([
            'artist.artist_name'=>'required',
            'artist.formation_date'=>'required'
            ],
            [
                'artist.artist_name.required'=>'アーティスト名は必須です。',
                'artist.formation_date.required'=>'結成日は必須です。'
                ]
            );
        $input=$request['artist'];
        $artist->fill($input)->save();
    $request->session()->flash('success', 'アーティストを登録しました。');
       return redirect('setlists/artist_create'); 
    }
    
    
    public function show_venue_create()
    {
        return view('setlists.venue_create'); 
    }
    
    public function create_venue(Request $request,Venue $venue)
    {

       $request->validate([
    'venue.venue_name' => 'required',
    'venue.venue_capacity' => 'required|numeric|min:1'
], [
    'venue.venue_name.required' => '会場名は必須です。',
    'venue.venue_capacity.required' => '収容人数は必須です。',
    'venue.venue_capacity.numeric' => '収容人数は数字である必要があります。',
    'venue.venue_capacity.min' => '収容人数は一人以上である必要があります。'
]);


          $input=$request['venue'];
        $venue->fill($input)->save();
     $request->session()->flash('success', '会場を登録しました。');
        
        return redirect('setlists/venue_create');
    }
    
    public function show_music_create()
    {
        
         $artists=Artist::all();
        return view('setlists.music_create',compact('artists'));
    }
    
    public function create_music(Request $request, Artist $artist, Music $music)
    {
         $request->validate([
    'artist.artist_name' => 'required',
    'music.music_name' => 'required',
    'music.release_date' => 'required',
], [
    'artist.artist_name.required' => 'アーティスト名は必須です。',
    'music.music_name.required' => '曲名は必須です。',
    'music.release_date.required' => '発売日は必須です。',
]);

        $artistId=$request->input('artist_id');
        $musicData = $request->input('music');
          if ($artistId && Artist::where('id', $artistId)->exists()) {
        $music->artist_id = $artistId;
    }
        
        $music->fill($musicData)->save();
        $request->session()->flash('success', '曲を登録しました。');
        
        return redirect('setlists/music_create');
    }
    public function show_list()
  {
      return view('setlists.setlist_list_show');
  }
  
 public function search(Request $request)
{
    $queryParam = $request->input('query');
    
    $searchResults = Setlist::with(['artists', 'venue', 'musics'])
    ->where('live_title', 'like', "%$queryParam%")
        ->orWhereHas('artists', function ($q) use ($queryParam) {
            $q->where('artist_name', 'like', "%$queryParam%");
        })
        ->orWhereHas('musics', function ($q) use ($queryParam) {
            $q->where('music_name', 'like', "%$queryParam%");
        })
        ->orWhereHas('venue', function ($q) use ($queryParam) {
            $q->where('venue_name', 'like', "%$queryParam%");
        })
        ->get();

    // dd($searchResults);

    return view('setlists.setlist_list_show', ['searchResults' => $searchResults]);
}

public function like(Request $request, Setlist $setlist)
{
    $setlist->increment('nice');
    return back()->with('success', 'いいねを追加しました。');
}

}