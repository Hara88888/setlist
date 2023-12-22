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
        <td>{{ $setlist->live_title }}</td>
        <td>
            @foreach ($setlist->artists as $artist)
                {{ $artist->artist_name }}
            @endforeach
        </td>
        <td>{{ $setlist->venue->venue_name }}</td>
        <td>{{ $setlist->event_date }}</td>
        <td>その他のデータ...</td>
    </tr>
@endforeach

    </tbody>
     <tbody>
      <tr>
        <td>サンプルテキスト</td>
        <td>アーティストA</td>
        <td>会場X</td>
        <td>2023-12-16</td>
        <td>100</td>
      </tr>
    </tbody>
     <tbody>
      <tr>
        <td>サンプルテキスト</td>
        <td>アーティストA</td>
        <td>会場X</td>
        <td>2023-12-16</td>
        <td>100</td>
      </tr>
    </tbody>
     <tbody>
      <tr>
        <td>サンプルテキスト</td>
        <td>アーティストA</td>
        <td>会場X</td>
        <td>2023-12-16</td>
        <td>100</td>
      </tr>
    </tbody>
     <tbody>
      <tr>
        <td>サンプルテキスト</td>
        <td>アーティストA</td>
        <td>会場X</td>
        <td>2023-12-16</td>
        <td>100</td>
      </tr>
    </tbody>
      <tbody>
      <tr>
        <td>サンプルテキスト</td>
        <td>アーティストA</td>
        <td>会場X</td>
        <td>2023-12-16</td>
        <td>100</td>
      </tr>
    </tbody>
      <tbody>
      <tr>
        <td>サンプルテキスト</td>
        <td>アーティストA</td>
        <td>会場X</td>
        <td>2023-12-16</td>
        <td>100</td>
      </tr>
    </tbody>
      <tbody>
      <tr>
        <td>サンプルテキスト</td>
        <td>アーティストA</td>
        <td>会場X</td>
        <td>2023-12-16</td>
        <td>100</td>
      </tr>
    </tbody>
      <tbody>
      <tr>
        <td>サンプルテキスト</td>
        <td>アーティストA</td>
        <td>会場X</td>
        <td>2023-12-16</td>
        <td>100</td>
      </tr>
    </tbody>
      <tbody>
      <tr>
        <td>サンプルテキスト</td>
        <td>アーティストA</td>
        <td>会場X</td>
        <td>2023-12-16</td>
        <td>100</td>
      </tr>
    </tbody>
      <tbody>
      <tr>
        <td>サンプルテキスト</td>
        <td>アーティストA</td>
        <td>会場X</td>
        <td>2023-12-16</td>
        <td>100</td>
      </tr>
    </tbody>
      <tbody>
      <tr>
        <td>サンプルテキスト</td>
        <td>アーティストA</td>
        <td>会場X</td>
        <td>2023-12-16</td>
        <td>100</td>
      </tr>
    </tbody>
      <tbody>
      <tr>
        <td>サンプルテキスト</td>
        <td>アーティストA</td>
        <td>会場X</td>
        <td>2023-12-16</td>
        <td>100</td>
      </tr>
    </tbody>
      <tbody>
      <tr>
        <td>サンプルテキスト</td>
        <td>アーティストA</td>
        <td>会場X</td>
        <td>2023-12-16</td>
        <td>100</td>
      </tr>
    </tbody>
    
  </table>
  
  <button type="button" class="btn btn-primary">戻る</button>
  <button type="button" class="btn btn-warning">トップページへ</button>
</div>
</main>
</body>
</html>