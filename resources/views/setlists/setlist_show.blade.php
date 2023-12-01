<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>セットリストサイト</title>
    </head>
    <body>
        <h1>セットリストサイト</h1>
        <div class='post'>
            <h1>セットリスト閲覧画面</h1>
        </div>
        
        <div class='setlist_show'>
 <h2>{{$setlist->live_title}}</h2>
  <h2>{{$artist[0]->artist_name}}</h2>
    <h2>{{$venue->venue_name}}</h2>
      <h2>{{$setlist->event_date}}</h2>
    <div style="border:solid;">{{$setlist->live_explation}}</div>
    
    <table border="1">
         <td>曲順</td>
         <td>曲名</td>
         <td> ライブメモ</td>
        </tr>
        {{$musics}}
        @foreach($musics as $music)
<tr>
    <td>{{ $music->musicsetlist->song_order }}</td>
    <td>{{ $music->music_name }}</td> 
    <td>{{ $music->musicsetlist->live_memo }}</td>
</tr>
@endforeach
    </table> 
    
    <h2>感想</h2>
    <table border="1">
        <tr>
            <th>Aさん</th>
            <th>○○○○○○○○</th>
        </tr>
        <tr>
            <th>Bさん</th>
        <th>○○○○○○○○</th>
        </tr>
    </table>
        
      <h2 class='create'>
            <a href='/setlists/create'>トップ画面に戻る</a>
</h2>
<h2 class='mysetlist'>
            <a href='/setlists/create'>このセットリストを保存する</a>
</h2>
<h2 class='listen'>
            <a href='/setlists/create'>試聴する</a>
</h2>
<h2 class='good'>
            <a href='/setlists/create'>いいね</a>
</h2>
<h2 class='post_impression'>
            <a href='/setlists/create'>感想を投稿する</a>
</h2>
        </div>
    </body>
</html>