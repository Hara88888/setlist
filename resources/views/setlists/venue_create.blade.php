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
            <h2 class="subtitle-style mb-5">会場登録画面</h2>    
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
            <form action="/posts/venues" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="venue[venue_name]" placeholder="会場名">
                <div class="mb-3">
                    <input type="number" class="form-control" name="venue[venue_capacity]" placeholder="収容人数">
                </div>
                <div class="mb-3">
                    <textarea name="venue[venue_explanation]" class="form-control" placeholder="会場の説明など"></textarea>
                </div>
            <!--                <div class="mb-3 text-center">-->
            <!--    <input type="file" class="form-control">-->
            <!--</div>-->
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-lg mb-3" value="store">登録</button> 
                 <a href="{{route('setlist.index') }}">一覧に戻る</a> 
                 </div>
            </form>
        </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
          </main>
    </body>
</html>
