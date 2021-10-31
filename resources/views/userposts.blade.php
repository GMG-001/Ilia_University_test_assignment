@extends('layouts.layout')
@section('content')
<div class="card card-default">
    <div class="card-body">
        <ul class="list-group">
            @foreach($posts as $post)
                <li class="list-group-item">
                    <div class="card-header"> <h4 class="text-center">{{$post['title']}}</h4> </div>
                    <div class="card-body bg-secondary">{{$post['body']}}</div>
                    <div class="col-md-6">
                        <a href="{{route('post',$post['id'])}}" class="btn btn-sm-float-right btn-success">See Detail</a>
                    </div>
                </li>
                <hr>
            @endforeach
        </ul>
    </div>
</div>
@endsection
