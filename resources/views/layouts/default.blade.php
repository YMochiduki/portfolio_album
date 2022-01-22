<!DOCTYPE html>
<html lang="ja">
<head>
    <title>アルバム</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--bootstrap4の読み込み-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body>
    <header>
        <a class="btn btn-info" href="">TOP</a>
        <a class="btn btn-info" href="">検索</a>
        <a class="btn btn-info" href="">使い方</a>
        
    </header>
    
    <div class="row">
        <div class="col-md-9 col-12 order-2 order-md-1 content">
            @yield('content')
        </div>
    
    
        <div class="col-md-3 col-0 order-1 order-md-2 right-menu">
             <nav class="navbar navbar-expand-md navbar-light navbar-light">
                <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNav">
                    @if(Auth::check())
                        <p>ユーザー名</p>
                        <a class="btn btn-info" href="">新規投稿</a>
                        <a class="btn  btn-info" href="">投稿一覧</a>
                        <a class="btn btn-info" href="">お気に入り</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input class="btn btn-dark" type="submit" value="ログアウト">
                            </form>
                    @else
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <label>
                            <p>ゲスト</p>
                                ユーザー名：
                                <input type="text" name="name" value="{{ old('name') }}">
                            </label>
                            <label>
                                パスワード：
                                <input type="text" name="name" value="{{ old('password') }}">
                            </label>
                            <input class="btn" type="submit" value="ログイン">
                        </form>
                    @endif
                </div>
            </nav>
        </div>
    </div>
</body>
</html>