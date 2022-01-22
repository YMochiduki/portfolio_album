@extends('layouts.default')

@section('content')
@forelse($albums as $album)
    <article>
        <div class="article_head">
            <div>
                <p>ユーザー名</p>
            </div>
            <div>
                <p>投稿コメント</p>
            </div>
        </div>
        <div>
            <p>favorite</p>
        </div>
        <div>
            <a href="">ここに写真</a>
        </div>
        <div>
            <form method="post" action ="{{ url('/diaries/' . $diary->id) }}">
                @csrf
                @method('DELETE')    
                <input type="submit" value="削除">
            </form>
        </div>
    </article>

@endsection