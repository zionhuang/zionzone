@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">文章列表</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @foreach($data['articleInfo'] as $article)
                            <a href="article?id={{ $article['aid'] }}">{{ $article['title'] }}</a>
                            <br>
                        @endforeach
                    </div>
                    <div class="panel-body">
                        <a href={{ $data['pre'] }}>pre</a>
                        <br>
                        <a href={{ $data['next'] }}>next</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
