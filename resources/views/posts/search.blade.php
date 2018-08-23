@extends('layouts.app') 
@section('content')


<div class="container">
    <h1>Search Posts</h1>
    <form action="{{ route('posts.search') }} " method="get">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" name="q" class="form-control input-lg" placeholder="Search for a post..." value=" {{ old('q') }}">

            <span class="input-group-btn">
            <button type="submit" class="btn btn-default btn-lg"> Search </button>
        </span>
        </div>
    </form>

    <hr />

    <pre>
        {{ dd($results) }}
    </pre>
</div>
@endsection