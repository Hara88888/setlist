<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>セットリストサイト</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/setlist2.css">
    </head>
 <body class="py-5">
        <div class="container text-center py-5">
            <h1 class="mb-5" style="font-style: italic;">♫ セットリストサイト ♫</h1>
    <nav>
      </header>
      <form action="/search" method="GET">
 <input type="text"  name="query" class="form-control mb-5" placeholder="アーティスト、曲名...">
 <button type="submit">検索</button>
 </form>
    </nav>
  </header>
  <main>
    <table class="setlist-table">
      <thead>
        <tr>
          <th>ライブタイトル</th>
          <th>アーティスト名</th>
          <th>日付</th>
          <th>会場名</th>
          <th>セットリストを閲覧する</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>ライブタイトル1</td>
          <td>アーティスト名1</td>
          <td>2023-12-01</td>
          <td>会場名1</td>
          <td><a href="#">セットリストを閲覧する</a></td>
        </tr>
        <tr>
          <td>ライブタイトル2</td>
          <td>アーティスト名2</td>
          <td>2023-12-02</td>
          <td>会場名2</td>
          <td><a href="#">セットリストを閲覧する</a></td>
        </tr>
        <tr>
          <td>ライブタイトル3</td>
          <td>アーティスト名3</td>
          <td>2023-12-03</td>
          <td>会場名3</td>
          <td><a href="#">セットリストを閲覧する</a></td>
        </tr>
      </tbody>
    </table>
    <div class="button-group">
       <a href='/setlists/create' class="btn btn-lg mb-3">♫ セットリストを投稿 ♫</a>  
       <a href='/setlists/artist_create' class="btn btn-lg mb-3">♫ アーティストを登録 ♫</a>    
            <a href='setlists/venue_create' class="btn btn-lg mb-3">♫ 会場を登録 ♫</a>  
             <a href='setlists/music_create' class="btn btn-lg mb-3">♫ 曲を登録 ♫</a>  
            
            
            <div class="mt-5">
                <h2>♫ 自分の保存したセットリストを探す ♫</h2>
  </main>
</body>
</html>
