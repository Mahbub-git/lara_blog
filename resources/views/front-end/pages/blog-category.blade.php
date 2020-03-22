@extends('front-end.master')
@section('title')
category || blog
@endsection
@section('body')
<div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
         @foreach($categories_blog as $cat_blog)
          <h2>{{$cat_blog->blog_title}}</h2>
          <div class="img"><img src="{{ asset('/')}}/{{$cat_blog->bog_image}}" width="250" height="100" alt="" class="fl" /></div>
          <div class="post_content">
            <p></p>
          </div>
          @endforeach
          <div class="clr"></div>
        </div>     
        <p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
      </div>
@endsection