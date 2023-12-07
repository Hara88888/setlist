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
            <h1 class="mb-5" style="font-style: italic;">♫ セットリストサイト♫</h1>
            <h2 class="subtitle-style">アーティスト登録画面</h2>
            <form action="/posts/artists" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="artist[artist_name]" placeholder="アーティスト名">
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control" name="artist[formation_date]" placeholder="結成日">
                </div>
                <div class="mb-3">
                    <textarea name="artist[artist_explanation]" class="form-control" placeholder="アーティストの説明など"></textarea>
                </div>
                <button type="submit" class="btn btn-lg mb-3" value="store">登録</button>
                <a button="{{route('setlist.index') }}">一覧に戻る</a>   
            </form>
        </div>
    </body>
</html>
