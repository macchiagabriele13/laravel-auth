@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex gap-4">
        <div class="details">
            <h1>{{$project->title}}</h1>
            <p>{{$project->slug}}</p>
            <div class="meta">
                <div class="difficulty">
                    price: {{$project->difficulty}}
                </div>
                <div>
                    language:{{$project->languages}}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection