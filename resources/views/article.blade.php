@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">title: {{ $data['title'] }}</div>
                    <div class="panel-heading">content: {{ $data['content'] }}</div>
                    <div class="panel-heading">user: {{ $data['user'] }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
