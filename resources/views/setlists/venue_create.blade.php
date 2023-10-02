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
            <h1>会場登録画面</h1>
        </div>
        
    <div class='artist_create'>

<input type="text" name="artist_name" placeholder="会場">    
   <textarea name="artist_explain" placeholder="会場の説明など"></textarea>
         <button type="submit"  value="store">登録</button>  
         </form>
        </div>
    </body>
</html>