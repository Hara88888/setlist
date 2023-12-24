<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>セットリストサイト</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/setlist.css">
    </head>
 <body class="py-5">
        <div class="container text-center py-5">
            <h1 class="mb-5" style="font-style: italic;">♫ セットリストサイト ♫</h1>
  <nav>
    <form action="/search" method="GET">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
                <div class="input-group mb-3">
                    <input type="text" name="query" class="form-control" placeholder="アーティスト、曲名...">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-outline-secondary">検索</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</nav>


  <main>
    <div class="mb-3">
    <table class="setlist-table">
      <thead>
        <tr>
          <th>ライブタイトル</th>
          <th>アーティスト名</th>
          <th>日付</th>
          <th>会場名</th>
          <th>いいね数</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($setlists as $setlist)
        <tr>
          <td><a href="/setlists/{{$setlist->id}}">{{ $setlist->live_title }}</a></td>
          <td> @foreach ($setlist->artists as $artist)
                {{ $artist->artist_name }}
            @endforeach</td>
          <td>{{ $setlist->venue->venue_name }}</td>
          <td>{{ $setlist->event_date }}</td>
          <td>{{$setlist->nice}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
    <div class="button-group">
       <a href='/setlists/create' class="btn btn-lg mb-3">♫ セットリストを投稿 ♫</a>  
       <a href='/setlists/artist_create' class="btn btn-lg mb-3">♫ アーティストを登録 ♫</a>    
            <a href='setlists/venue_create' class="btn btn-lg mb-3">♫ 会場を登録 ♫</a>  
             <a href='setlists/music_create' class="btn btn-lg mb-3">♫ 曲を登録 ♫</a>  
            
  </main>
</body>
</html>
