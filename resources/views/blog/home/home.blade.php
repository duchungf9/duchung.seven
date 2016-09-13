@extends('layouts.home.blog.home_base')
@section('body_content')
    <div class="demo-blog__posts mdl-grid">
        @include('blog.partials.newest_article')
    </div>
@endsection