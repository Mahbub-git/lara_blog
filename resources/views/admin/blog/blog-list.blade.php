@extends('admin.master')
@section('title')
 category list
@endsection
@section('body')
 <div class="container-fluid">
    <div class="card shadow mb-3">
            <div class="card-header py-3">
            <h1 class="h3 mb-4 text-gray-800 text-center">Blog List</h1>    
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Blog</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>SN</th>
                      <th>Blog Title</th>
                      <th>Category Name</th>
                      <th>Blog Image</th>
                       <th>Author Name</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     @php($i=1)
                    @foreach($blogs as $blog)
                    <tr>
                      <td>{{$i++}}</td>
                       <td>{{$blog->blog_title}}</td>
                        <td>{{$blog->cat_name}}</td>
                        <td><img src="{{$blog->bog_image}}" height="80" width="100"></td>
                         <td>{{$blog->author_name}}</td>
                         <td>{{$blog->status ==1 ? 'Published' : 'Unpublished'}}</td>
                         <td>
                            @if($blog->status==1)
                            <a href="{{route('unpublished-blog',['id'=>$blog->blog_id])}}" class="btn btn-primary">
                                <span><i class="fa fa-arrow-up"></i></span>
                            </a>
                            @else
                            <a href="{{route('published-blog',['id'=>$blog->blog_id])}}" class="btn btn-warning">
                                <span><i class="fa fa-arrow-down"></i></span>
                            </a>
                            @endif
                            <a href="#editModal{{$blog->blog_id}}" class="btn btn-success" data-toggle="modal">
                                        <span><i class="fa fa-edit"></i></span>
                            </a>
                            <a href="{{route('delete-blog',['id'=>$blog->blog_id])}}" class="btn btn-danger">
                                <span><i class="fa fa-trash"></i></span>
                            </a>                                   
                         </td>
                    </tr>
                     @include('admin.blog.edit-blog')
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  </div>
  
 @include('admin.blog.add-blog')
@endsection