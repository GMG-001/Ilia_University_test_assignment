@extends('layouts.layout')
@section('content')
    <div class="card card-default">
        <div class="card-body">
            <ul class="list-group">
                    <li class="list-group-item">
                        <div class="card-header"> <h4 class="text-center">{{$post['title']}}</h4> </div>
                        <div class="card-body bg-secondary">{{$post['body']}}</div>
                    </li>
            </ul>
        </div>
    </div>
@endsection
