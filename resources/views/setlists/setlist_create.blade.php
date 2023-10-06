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
        <div class='post'>
            <h1>セットリスト投稿画面</h1>
        </div>
        
        <div class='artist_submit'>
   <input type="text" name="artist" placeholder="アーティスト名">
    <input type="text" name="venue" placeholder="会場">
     <input type="text" name="livetitle" placeholder="ライブのタイトル">
      <input type="text" name="date" placeholder="日時">
    
        <textarea name="liveexplain" placeholder="ライブの説明"></textarea>
    
    <table border="1">
        <tr>
            <th>曲順</th>
            <th>曲名</th>
            <th>ライブメモ</th>
        </tr>
        <tr>
        <td> <input type="text" name="musicnum" placeholder="曲順"></td>
         <td> <input type="text" name="musicname" placeholder="曲名"></td>
         <td> <input type="text" name="livememo" placeholder="ライブメモ"></td>
        </tr>
    </table> 
    
        <button type="button" id="addRow">段を追加する</button>
         <button type="submit"  value="store">登録</button>  
         </form>
        </div>
    </body>
</html>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const addButton = document.getElementById("addRow");
    const musicTable = document.getElementById("musicTable");

    addButton.addEventListener("click", function () {
        const newRow = musicTable.insertRow(-1);
        const cell1 = newRow.insertCell(0);
        const cell2 = newRow.insertCell(1);
        const cell3 = newRow.insertCell(2);

        cell1.innerHTML = '<input type="text" name="musicnum[]" placeholder="曲順">';
        cell2.innerHTML = '<input type="text" name="musicname[]" placeholder="曲名">';
        cell3.innerHTML = '<input type="text" name="livememo[]" placeholder="ライブメモ">';
    });
});
</script>