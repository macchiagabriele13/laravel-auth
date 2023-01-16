@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex gap-4">
        <div class="details">
            <h1>{{$project->title}}</h1>
            <p>{{$project->slug}}</p>


            <img src="{{asset('storage/'. $project->cover_image)}}" alt="">

            <div class="meta">
                <div class="difficulty">
                    difficulty: {{$project->difficulty}}
                </div>


                <div>
                    language:{{$project->languages}}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection