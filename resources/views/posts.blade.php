@extends('layouts.layout')
@section('content')
    <h1 class="text-center">Authors</h1>
    <div class="card card-default">
        <div class="card-header"></div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($uniqueUserIds as $uniqueUserId)
                        <li class="list-group-item d-flex  justify-content-around align-items-center">
                            <div class="col-md-1">
                                Author Id:{{$uniqueUserId['userId']}}
                            </div>
                            <span class="badge bg-primary rounded-pill">{{$countUniquePosts[$uniqueUserId['userId']]}} posts</span>
                            <div class="col-md-1">
                                <a href="{{route('userPosts',$uniqueUserId['userId'])}}" class="btn btn-sm-float-right btn-success">See All</a>
                            </div>
                        </li>

                @endforeach
            </ul>
        </div>
    </div>
@endsection
