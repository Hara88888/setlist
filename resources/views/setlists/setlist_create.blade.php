<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>セットリストサイト</title>
    </head>
    <body>
        <h1>セットリストサイト</h1>
   <form action="/posts" method="POST">
       @csrf
        <div class='post'>
            <h1>セットリスト投稿画面</h1>
        </div>
        
        <div class='artist_submit'>
   <input type="text" name="artist[artist_name]" placeholder="アーティスト名">
    <input type="text" name="venue[venue_name]" placeholder="会場">
     <input type="text" name="setlist[live_title]" placeholder="ライブのタイトル">
      <input type="date" name="setlist[event_date]" placeholder="日時">
    
        <textarea name="setlist[live_explation]" placeholder="ライブの説明"></textarea>
    
    <table border="1" id="musicTable" >
        <tr>
            <th>曲順</th>
            <th>曲名</th>
            <th>ライブメモ</th>
        </tr>
        <tr>
        <td> <input type="number" name="music_setlist[song_order][]" placeholder="曲順"></td>
         <td> <input type="text" name="music[music_name][]" placeholder="曲名"></td>
         <td> <input type="text" name="music_setlist[live_memo][]" placeholder="ライブメモ"></td>
        </tr>
    </table> 
        <button type="button" onclick="addRow();">段を追加する</button>
         <button type="submit"  value="store">登録</button>  
    </form>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const musicTable = document.getElementById("musicTable");
     function addRow() {
                const newRow = musicTable.insertRow(-1);
                const cell1 = newRow.insertCell(0);
                const cell2 = newRow.insertCell(1);
                const cell3 = newRow.insertCell(2);

                cell1.innerHTML = '<input type="number" name="music_setlist[song_order][]" placeholder="曲順">';
                cell2.innerHTML = '<input type="text" name="music[music_name][]" placeholder="曲名">';
                cell3.innerHTML = '<input type="text" name="music_setlist[live_memo][]" placeholder="ライブメモ">';
            }
         const addButton = document.querySelector("button");
        addButton.addEventListener("click", addRow);
            
            
        });
    
    </script>
</div>
    </body>
</html>