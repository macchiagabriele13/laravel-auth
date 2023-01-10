@extends('layouts.admin')
@section('content')
<h2>add project</h2>
<form action="{{route('admin.projects.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">title</label>
        <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <input type="text" class="form-control" name="description" id="description" aria-describedby="helpId" placeholder="">
    </div>
    <div class="mb-3">
        <label for="difficulty" class="form-label">difficulty </label>
        <input type="text" class="form-control" name="difficulty" id="difficulty" aria-describedby="helpId" placeholder="">
    </div>
    <div class="mb-3">
        <label for="languages" class="form-label">languages</label>
        <input type="text" class="form-control" name="languages" id="languages" aria-describedby="helpId" placeholder="">
    </div>
    <button type="submit">add new project</button>
</form>
@endsection