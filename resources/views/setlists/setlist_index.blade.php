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
            
            <h3 class="mb-3">探す</h3>
            <input type="search" class="form-control mb-5" placeholder="アーティスト、曲名...">
            
            <a href='/setlists/create' class="btn btn-lg mb-3">♫ セットリストを投稿 ♫</a>  
            <a href='/setlists/artist_create' class="btn btn-lg mb-3">♫ アーティストを登録 ♫</a>    
            <a href='setlists/venue_create' class="btn btn-lg mb-3">♫ 会場を登録 ♫</a>  
            
            <div class="mt-5">
                <h2>♫ 自分の保存したセットリストを探す ♫</h2>
            </div>
        </div>
    </body>
</html>
