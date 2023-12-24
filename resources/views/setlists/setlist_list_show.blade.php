<!DOCTYPE html>
<html lang="ja">
  <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>セットリストサイト</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/setlist.css">
    </head>
<body>

<div class="py-5">
  <h1 class="mb-5" style="font-style: italic;">♫ セットリストサイト♫</h1>
            <h2 class="subtitle-style mb-5">セットリスト一覧画面</h2>        
 <main>
  <table class="setlist-table">
    <thead>
      <tr>
        <th>ライブタイトル</th>
        <th>アーティスト名</th>
        <th>会場名</th>
        <th>日付</th>
        <th>いいね数</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($searchResults as $setlist)
    <tr>
        <td><a href="/setlists/{{$setlist->id}}">{{ $setlist->live_title }}</a></td>
        <td>
            @foreach ($setlist->artists as $artist)
                {{ $artist->artist_name }}
            @endforeach
        </td>
        <td>{{ $setlist->venue->venue_name }}</td>
        <td>{{ $setlist->event_date }}</td>
        <td>{{$setlist->nice}}</td>
    </tr>
@endforeach

    
  </table>
  
<a href="{{route('setlist.index') }}">一覧に戻る</a>
<button type="button" class="btn btn-lg mb-3" onclick="window.history.back();">戻る</button>
</div>
</main>
</body>
</html>