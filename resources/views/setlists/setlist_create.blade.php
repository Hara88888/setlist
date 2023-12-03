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
                    <input type="text" class="form-control" name="artist[artist_name]" placeholder="アーティスト名">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="venue[venue_name]" placeholder="会場">
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
                        <td><input type="text" class="form-control" name="music[music_name][]" placeholder="曲名"></td>
                        <td><input type="text" class="form-control" name="music_setlist[live_memo][]" placeholder="ライブメモ"></td>
                        <td><a button type="button" class="btn btn-lg mb-3" onclick="deleteRow(this);">削除</button></td> <!-- Add a delete button to the row -->
                    </tr>
                </tbody>
            </table>
            <a button type="button" class="btn btn-lg mb-3" onclick="addRow();">♫ 段を追加する ♫</button>
            <a button type="submit" class="btn btn-lg mb-3" value="store">♫ 登録 ♫</button>
        </form>
    </div>
    <script>
      function addRow() {
        const musicTable = document.getElementById("musicTable");
        const newRow = musicTable.insertRow(-1);
        const cell1 = newRow.insertCell(0);
        const cell2 = newRow.insertCell(1);
        const cell3 = newRow.insertCell(2);
        const cell4 = newRow.insertCell(3); // Added this line

        cell1.innerHTML = '<input type="number" class="form-control" name="music_setlist[song_order][]" placeholder="曲順">';
        cell2.innerHTML = '<input type="text" class="form-control" name="music[music_name][]" placeholder="曲名">';
        cell3.innerHTML = '<input type="text" class="form-control" name="music_setlist[live_memo][]" placeholder="ライブメモ">';
        cell4.innerHTML = '<a button type="button" class="btn btn-lg mb-3" onclick="deleteRow(this);">削除</button>'; // Added this line
      }

      function deleteRow(btn) {
        var row = btn.parentNode.parentNode;
        row.parentNode.removeChild(row);
      }
    </script>
</body>
</html>