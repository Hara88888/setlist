<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>セットリスト投稿画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/setlist.css">
    </head>
    <body class="py-5">
        <div class="container text-center py-5">
            <h1 class="mb-5" style="font-style: italic;">♫ セットリストサイト♫</h1>
         <h2 class="subtitle-style">セットリスト投稿画面</h2>
            <form action="/posts" method="POST">
                @csrf
                      <div class="mb-3">
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
            <div class="col-md-3 artist">
              アーティスト１
              <img src="../../../images/ライブ.jpg" class="img-fluid">
            </div>
              <div class="col-md-3 artist">
              アーティスト１
              <img src="../../../images/ライブ.jpg" class="img-fluid">
            </div>
              <div class="col-md-3 artist">
              アーティスト１
              <img src="../../../images/ライブ.jpg" class="img-fluid">
            </div>
              <div class="col-md-3 artist">
              アーティスト１
              <img src="../../../images/ライブ.jpg" class="img-fluid">
            </div>
              <div class="col-md-3 artist">
              アーティスト１
              <img src="../../../images/ライブ.jpg" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
        <button type="button" class="btn btn-primary">保存</button>
      </div>
    </div>
  </div>
</div>
                   <div class="mb-3">
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
        <div class="col-md-3 artist">
            会場１
            <img src="../../../images/ライブ.jpg" class="img-fluid">
        </div>
        <div class="col-md-3 artist">
            会場２
            <img src="../../../images/ライブ.jpg" class="img-fluid">
        </div>
        <div class="col-md-3 artist">
            会場３
            <img src="../../../images/ライブ.jpg" class="img-fluid">
        </div>
        <div class="col-md-3 artist">
            会場４
            <img src="../../../images/ライブ.jpg" class="img-fluid">
        </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
        <button type="button" class="btn btn-primary">保存</button>
      </div>
    </div>
  </div>
</div>

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
                            <h5 class="modal-title" id="artistModalLabel">曲名を追加</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="form-control" name="artist_name" placeholder="曲名">
                           <div class="container py-5">
    <div class="row">
        <div class="col-md-3 artist">
            曲1
            <img src="../../../images/ライブ.jpg" class="img-fluid">
        </div>
        <div class="col-md-3 artist">
            曲２
            <img src="../../../images/ライブ.jpg" class="img-fluid">
        </div>
        <div class="col-md-3 artist">
            曲３
            <img src="../../../images/ライブ.jpg" class="img-fluid">
        </div>
        <div class="col-md-3 artist">
            曲４
            <img src="../../../images/ライブ.jpg" class="img-fluid">
        </div>
    </div>
</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                            <button type="button" class="btn btn-primary">保存</button>
                        </div>
                    </div>
                </div>
            </div>
</td>
                        <td><input type="text" class="form-control" name="music_setlist[live_memo][]" placeholder="ライブメモ"></td>
                        <td><button type="button" class="btn btn-lg mb-3" onclick="deleteRow(this);">削除</button></td> <!-- Add a delete button to the row -->
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-lg mb-3" onclick="addRow();">♫ 段を追加する ♫</button>
            <button type="submit" class="btn btn-lg mb-3" value="store">♫ 登録 ♫</button>
             <a href="{{route('setlist.index') }}">一覧に戻る</a>   
        </form>
    </div>
    <script>
    function addRow() {
  const musicTable = document.getElementById("musicTable");
  const newRow = musicTable.insertRow(-1);
  const cell1 = newRow.insertCell(0);
  const cell2 = newRow.insertCell(1);
  const cell3 = newRow.insertCell(2);
  const cell4 = newRow.insertCell(3);

  // 一意のモーダルIDを生成するためのタイムスタンプ
  const timestamp = Date.now();

  cell1.innerHTML = '<input type="number" class="form-control" name="music_setlist[song_order][]" placeholder="曲順">';
  cell2.innerHTML = `<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#musicModal${timestamp}">
                        曲名を追加
                      </button>
                      <div class="modal fade" id="musicModal${timestamp}" tabindex="-1" aria-labelledby="musicModalLabel${timestamp}" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="musicModalLabel${timestamp}">曲名を追加</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <input type="text" class="form-control" name="music[music_name][]" placeholder="曲名">
                           <div class="row">
        <div class="col-md-3 artist">
            曲1
            <img src="../../../images/ライブ.jpg" class="img-fluid">
        </div>
        <div class="col-md-3 artist">
            曲２
            <img src="../../../images/ライブ.jpg" class="img-fluid">
        </div>
        <div class="col-md-3 artist">
            曲３
            <img src="../../../images/ライブ.jpg" class="img-fluid">
        </div>
        <div class="col-md-3 artist">
            曲４
            <img src="../../../images/ライブ.jpg" class="img-fluid">
        </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                              <button type="button" class="btn btn-primary">保存</button>
                            </div>
                          </div>
                        </div>
                      </div>`;
  cell3.innerHTML = '<input type="text" class="form-control" name="music_setlist[live_memo][]" placeholder="ライブメモ">';
  cell4.innerHTML = '<button type="button" class="btn btn-danger mb-3" onclick="deleteRow(this);">削除</button>';
}

    </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>