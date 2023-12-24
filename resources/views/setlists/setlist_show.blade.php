<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>セットリストサイト</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="../css/setlist.css">
    </head>
    <body>
    <div class="py-5">
  <h1  style="font-style: italic;">♫ セットリストサイト♫</h1>
            <h2 class="subtitle-style mb-5">セットリスト閲覧画面</h2>     
    <main>      
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="row mb-3">
        <div class="col">
            <h3 class="text-center">タイトル</h3>
        </div>
        <div class="col">
            <h3 class="text-center">アーティスト名</h3>
        </div>
        <div class="col">
            <h3 class="text-center">会場名</h3>
        </div>
        <div class="col">
            <h3 class="text-center">日程</h3>
        </div>
        <div class="col">
            <h3 class="text-center">説明</h3>
        </div>
        <div class="col">
            <h3 class="text-center">いいね数</h3>
        </div>

 <div class="row mb-3">
        <div class="col">
            <h3 class="text-center">{{$setlist->live_title}}</h3>
        </div>
       <div class="col">
    @foreach ($setlist->artists as $artist)
        <h3 class="text-center">{{ $artist->artist_name }}</h3>
    @endforeach
</div>

        <div class="col">
            <h3 class="text-center">{{$venue->venue_name}}</h3>
        </div>
        <div class="col">
            <h3 class="text-center">{{$setlist->event_date}}</h3>
        </div>
        <div class="col">
            <h3 class="text-center">{{$setlist->live_explation}}</h3>
        </div>
        <div class="col">
            <h3 class="text-center">{{$setlist->nice}}</h3>
        </div>

    <table class="setlist-table">
        <thread>
            <tr>
         <th>曲順</th>
         <th>曲名</th>
         <th> ライブメモ</th>
        </tr>
        </thead>
      <tbody>
             @foreach ($musics as $music)
            <tr>
                <td>{{ $music->pivot->song_order }}</td>
                <td>{{ $music->music_name }}</td>
                <td>{{ $music->pivot->live_memo }}</td>
            </tr>
        @endforeach
        </table>


<form action="/setlists/{{ $setlist->id }}/like" method="POST">
    @csrf
    <button type="submit" class="btn btn-outline-primary btn-custom">
        <i class="fa fa-thumbs-up"></i> いいね
    </button>
</form>

           
 <button type="button" class="btn btn-primary btn-custom">戻る</button>
  <button type="button" class="btn btn-warning btn-custom">トップページへ</button>
        </div>
        </div>
        </main> 
    </body>
    <script>

</script>
</html>