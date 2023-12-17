<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
            <h2 class="subtitle-style mb-5">曲登録画面</h2>    
       <main>
        <form action="/posts/artists" method="POST">
            @csrf
            <div class="mb-3">
                 <input type="text" class="form-control" name="music[music_name]" placeholder="曲名">
                </div>
            <div class="mb-3">
                <input type="date" class="form-control" name="music[release_date]" placeholder="発売日">
            </div>
            <div class="mb-3">
                <textarea name="music[music_explanation]" class="form-control" placeholder="曲の説明など"></textarea>
            </div>
             <div class="mb-3 text-center">
                <input type="file" class="form-control">
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-lg mb-3" value="store">登録</button> 
                 <a href="{{route('setlist.index') }}">一覧に戻る</a> 
                 </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </main>
</body>
</html>
