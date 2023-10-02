<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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