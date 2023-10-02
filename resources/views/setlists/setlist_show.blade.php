<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>セットリストサイト</title>
    </head>
    <body>
        <h1>セットリストサイト</h1>
        <div class='search'>
            <h1>調べる</h1>
            <input type="search">
</div>

        <div class='post'>
            <h1>セットリスト閲覧画面</h1>
        </div>
        
        <div class='setlist_show'>
 <h2>(仮)ライブの名前</h2>
  <h2>(仮)アーティスト名</h2>
    <h2>(仮)会場</h2>
      <h2>(仮)日時</h2>
    <div style="border:solid;">(仮)ライブの説明</div>
    
    <table border="1">
        <tr>
            <th>曲順</th>
            <th>曲名</th>
            <th>ライブメモ</th>
        </tr>
        <tr>
        <td>曲順</td>
         <td>曲名</td>
         <td> ライブメモ</td>
        </tr>
    </table> 
    
    <h2>感想</h2>
    <table border="1">
        <tr>
            <th>Aさん</th>
            <th>○○○○○○○○</th>
        </tr>
        <tr>
            <th>Bさん</th>
        <th>○○○○○○○○</th>
        </tr>
    </table>
        
      <h2 class='create'>
            <a href='/setlists/create'>トップ画面に戻る</a>
</h2>
<h2 class='mysetlist'>
            <a href='/setlists/create'>このセットリストを保存する</a>
</h2>
<h2 class='listen'>
            <a href='/setlists/create'>試聴する</a>
</h2>
<h2 class='good'>
            <a href='/setlists/create'>いいね</a>
</h2>
<h2 class='post_impression'>
            <a href='/setlists/create'>感想を投稿する</a>
</h2>
        </div>
    </body>
</html>