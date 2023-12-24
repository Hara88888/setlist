<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>セットリスト投稿画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/setlist.css">
    </head>
    <body>
        <div class="py-5">
            <h1 class="mb-5" style="font-style: italic;">♫ セットリストサイト♫</h1>
         <h2 class="subtitle-style mb-5">セットリスト投稿画面</h2>
         <main>
            <form action="/posts" method="POST">
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
                   <div class="mb-3 text-center">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#venueModal">
  会場名を追加
</button>

<div class="modal fade" id="venueModal" tabindex="-1" aria-labelledby="venueModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="venueModalLabel">会場の追加</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
              @foreach($venues as $venue)
        <div class="col-md-3 artist">
                 <label>
            <input type="radio" name="venue_id" value="{{ $venue->id }}" data-venue-name="{{$venue->venue_name}}">
       　{{$venue->venue_name}}
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
<div"mb-3">
     <input type="text" class="form-control" name="venue[venue_name]" placeholder="会場名">
</div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="setlist[live_title]" placeholder="ライブのタイトル">
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control" name="setlist[event_date]" placeholder="日時">
                </div>
                <div class="mb-3">
                    <textarea name="setlist[live_explation]" class="form-control" placeholder="ライブの説明"></textarea>
                </div>

               <h2 class="mb-3">♫ セットリスト ♫</h2>
            <table border="1" id="musicTable" class="table">
                <thead class="table-dark">
                    <tr>
                        <th>曲順</th>
                        <th>曲名</th>
                        <th>ライブメモ</th>
                        <th>操作</th> <!-- Add a header for the delete button -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="number" class="form-control" name="music_setlist[song_order][]" placeholder="曲順"></td>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#musicModal">
                    曲名を追加
                </button>
            </div>

            <!-- モーダルウィンドウ -->
            <div class="modal fade" id="musicModal" tabindex="-1" aria-labelledby="musicModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="musicModalLabel">曲名を追加</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           <div class="container py-5">
    <div class="row">
        @foreach ($musics as $music)
        <div class="col-md-3 artist">
            <label>
                <input type="radio" name="music_id" value="{{ $music->id }}" data-music-name="{{ $music->music_name }}">
            {{$music->music_name}}
            </label>
       </div>
       @endforeach
    </div>
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
                 <input type="text" class="form-control" name="music[music_name][]" placeholder="曲名">
                </div>
                        <td><input type="text" class="form-control" name="music_setlist[live_memo][]" placeholder="ライブメモ"></td>
                        <td><button type="button" class="btn btn-lg mb-3" onclick="deleteRow(this);">削除</button></td> <!-- Add a delete button to the row -->
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-lg mb-3" onclick="addRow();">♫ 段を追加する ♫</button>
            <button type="submit" class="btn btn-lg mb-3" value="store">♫ 登録 ♫</button>
             <a href="{{route('setlist.index') }}">一覧に戻る</a>
             <button type="button" class="btn btn-lg mb-3" onclick="window.history.back();">戻る</button>
        </form>
    </div>
    <script>
    var musics=@json($musics);
    function deleteRow(btn) {
    var row = btn.closest('tr');
    row.parentNode.removeChild(row);
}
  function addRow() {
    const musicTable = document.getElementById("musicTable");
    const newRow = musicTable.insertRow(-1);
    const cell1 = newRow.insertCell(0);
    const cell2 = newRow.insertCell(1);
    const cell3 = newRow.insertCell(2);
    const cell4 = newRow.insertCell(3);

    // 一意のモーダルIDを生成
    const modalId = 'musicModal' + musicTable.rows.length;

    cell1.innerHTML = '<input type="number" class="form-control" name="music_setlist[song_order][]" placeholder="曲順">';

    cell2.innerHTML = `
        <input type="text" class="form-control" name="music[music_name][]" placeholder="曲名">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#${modalId}">
            曲名を追加
        </button>
        <!-- モーダルウィンドウの構造 -->
        <div class="modal fade" id="${modalId}" tabindex="-1" aria-labelledby="${modalId}Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="${modalId}Label">曲名を追加</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container py-5">
                            <div class="row">
                                ${musics.map(music => `
                                    <div class="col-md-3 artist">
                                        <label>
                                            <input type="radio" name="music_id_${modalId}" value="${music.id}" data-music-name="${music.music_name}">
                                            ${music.music_name}
                                        </label>
                                    </div>
                                `).join('')}
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                    </div>
                </div>
            </div>
        </div>`;
    
    // ラジオボタンのイベントリスナーを設定
    setTimeout(() => {
        document.querySelectorAll(`#${modalId} input[type="radio"]`).forEach(radio => {
            radio.addEventListener('change', event => {
                if (event.target.checked) {
                    const selectedMusicName = event.target.getAttribute('data-music-name');
                    cell2.querySelector('input[type="text"]').value = selectedMusicName;
                }
            });
        });
    }, 500);

    cell3.innerHTML = '<input type="text" class="form-control" name="music_setlist[live_memo][]" placeholder="ライブメモ">';
    cell4.innerHTML = '<button type="button" class="btn btn-danger mb-3" onclick="deleteRow(this);">削除</button>';
}


document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('[name="artist_id"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            if (this.checked) {
                var artistName = this.getAttribute('data-artist-name');
                document.querySelector('[name="artist[artist_name]"]').value = artistName;
            }
        });
    });
    
    document.querySelectorAll('[name="venue_id"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            if (this.checked) {
                var venueName = this.getAttribute('data-venue-name');
                document.querySelector('[name="venue[venue_name]"]').value = venueName;
            }
        });
    });
    
    document.querySelectorAll('[name="music_id"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            if (this.checked) {
                var musicName = this.getAttribute('data-music-name');
                document.querySelector('[name="music[music_name][]"]').value = musicName;
            }
        });
    });
    
    
});



    </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</main>
</body>
</html>