@extends('front-end.master')
@section('title')
home
@endsection
@section('body')
<div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
            @foreach($blogs as $blog)
          <h2><a href="{{route('blog-details',['id'=>$blog->blog_id])}}">{{$blog->blog_title}}</a></h2>
          <p class="infopost">Posted <span class="date">{{$blog->created_at}}</span> by <a href="#">{{$blog->author_name}}</a></p>
          <div class="clr"></div>
          <div class="img"><img src="{{ asset('/')}}/{{$blog->bog_image}}" width="620" height="154" alt="" class="fl" /></div>
          <div class="post_content">
            <p>{{$blog->short_desc}}</p>
            <p class="spec"><a href="{{route('blog-details',['id'=>$blog->blog_id])}}" class="rm">more...</a></p>
          </div>
          @endforeach
          <div class="clr"></div>
        </div>    
        <p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
      </div>
@endsection