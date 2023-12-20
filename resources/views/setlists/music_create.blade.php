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
             @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 
        <form action="/posts/musics" method="POST">
            @csrf
          <div class="mb-3 text-center">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#artistModal">
  アーティスト名を追加
</button>

<!-- モーダル -->
<div class="modal fade" id="artistModal" tabindex="-1" aria-labelledby="artistModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="artistModalLabel">アーティストの追加</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
                @foreach ($artists as $artist)
<div class="col-mb-3 artist">
    <label>
        <input type="radio" name="artist_id" value="{{ $artist->id }}" data-artist-name="{{ $artist->artist_name }}">
        {{$artist->artist_name}}
    </label>
</div>
@endforeach
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
      </div>
    </div>
  </div>
</div>

            <div class="mb-3">
                 <input type="text" class="form-control" name="artist[artist_name]" placeholder="アーティスト名">
                </div>
            <div class="mb-3">
                 <input type="text" class="form-control" name="music[music_name]" placeholder="曲名">
                </div>
            <div class="mb-3">
                <input type="date" class="form-control" name="music[release_date]" placeholder="発売日">
            </div>
            <div class="mb-3">
                <textarea name="music[music_explanation]" class="form-control" placeholder="曲の説明など"></textarea>
            </div>
            <!-- <div class="mb-3 text-center">-->
            <!--    <input type="file" class="form-control">-->
            <!--</div>-->
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-lg mb-3" value="store">登録</button> 
                 <a href="{{route('setlist.index') }}">一覧に戻る</a> 
                 </div>
    </div>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('[name="artist_id"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            if (this.checked) {
                var artistName = this.getAttribute('data-artist-name');
                document.querySelector('[name="artist[artist_name]"]').value = artistName;
            }
        });
    });
});
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </main>
</body>
</html>
