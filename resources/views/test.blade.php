@extends('layout')
@section('tiitle', 'แบบประเมินพนักงาน');
@section('content')


    <form action="{{ route('post.save') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>


@endsection
