@extends('layout')
@section('content')
    <h1 class="title">Edit Project "{{$project->title}}"</h1>
    <form method="post" action="{{route('projects.update',$project->id)}}">
        @csrf
        {{method_field('PATCH')}}
        <div class="field">
            <label for="title" class="label">Title</label>
            <div class="control">
                <input type="text" value="{{$project->title}}" name="title" placeholder="Title">
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>
            <div class="control">
                <textarea name="description" class="textarea">{{$project->description}}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control ">
                <button type="submit" class="button is-link">
                    Update Project
                </button>
            </div>
        </div>
    </form>
@endsection
