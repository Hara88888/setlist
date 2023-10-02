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
            <h1>感想投稿画面</h1>
        </div>
        
    <div class='setlist_show'>
 <h2>(仮)ライブの名前</h2>
  <h2>(仮)アーティスト名</h2>
    <h2>(仮)会場</h2>
      <h2>(仮)日時</h2>
    
   <textarea name="impression" placeholder="感想を入力する"></textarea>
         <button type="submit"  value="store">登録</button>  
         </form>
        </div>
    </body>
</html>