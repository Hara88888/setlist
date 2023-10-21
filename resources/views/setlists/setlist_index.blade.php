<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>セットリストサイト</title>
    </head>
    <body>
        <h1>セットリストサイト</h1>
        @csrf
        <div class='search'>
            <h1>調べる</h1>
            <input type="search">
</div>

 <h2 class='create'>
            <a href='/setlists/create'>セットリストを投稿する</a>
</h2>
    
        <h2 class='artist_create'>
            <a href='/setlists/artist_create'>アーティストを登録する</a>
        </h2>
        
         <h2 class='venue_create'>
            <a href='setlists/venue_create'>会場を登録する</a>
        </h2>
        
         <div class='show_mysetlist'>
            <h1>自分の保存したセットリストを閲覧する</h1>
        </div>
    </body>
</html>