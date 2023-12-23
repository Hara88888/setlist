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
            <h2 class="subtitle-style mb-5">アーティスト登録画面</h2> 
             <div aria-live="polite" aria-atomic="true" class="position-relative">
        <div class="toast-container position-absolute top-0 end-0 p-3" id="toastPlacement">
            <!-- トースト -->
            <div class="toast my-toast" id="successToast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">成功</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    </div>
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
        <form action="/posts/artists" method="POST">
            @csrf
            <div class="mb-3">
               <input type="text" class="form-control" name="artist[artist_name]" placeholder="アーティスト名">
            </div>
            <div class="mb-3">
                <input type="date" class="form-control" name="artist[formation_date]" placeholder="結成日">
            </div>
            <div class="mb-3">
                <textarea name="artist[artist_explanation]" class="form-control" placeholder="アーティストの説明など"></textarea>
            </div>

            <div class="mb-3">
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-lg mb-3" value="store">登録</button> 
                 <a href="{{route('setlist.index') }}">一覧に戻る</a> 
                 </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        // セッションに成功メッセージがあればトーストを表示
        if('{{ session('success') }}' !== '') {
    var toast = new bootstrap.Toast(document.getElementById('successToast'));
    toast.show();
}

    });
    </script>
    </main>
</body>
</html>
