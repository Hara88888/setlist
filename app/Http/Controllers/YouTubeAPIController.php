<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Google_Client;
use Google_Service_YouTube;

class YouTubeAPIController extends Controller
{
    public function search($query)
    {
        $client = new Google_Client();
        $client->setDeveloperKey(env('YOUTUBE_API_KEY'));

        $youtube = new Google_Service_YouTube($client);

        $response = $youtube->search->listSearch('id,snippet', [
            'q' => $query,
            'maxResults' => 1,
            'type' => 'video',
        ]);

　　　　　if (empty($response['items'])) {
        return response()->json(['error' => 'No video found'], 404);
    }
    
        return response()->json(['videoId' => $response['items'][0]['id']['videoId']]);
    }
}
