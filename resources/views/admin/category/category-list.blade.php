@extends('admin.master')
@section('title')
 category list
@endsection
@section('body')
 <div class="container">
    <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h1 class="h3 mb-4 text-gray-800 text-center">Category List</h1>    
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Category</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>SN</th>
                      <th>Category Name</th>
                      <th>Category Description</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php($i=1)
                    @foreach($categories as $category)
                    <tr>
                      <td>{{$i++}}</td>
                       <td>{{$category->cat_name}}</td>
                        <td>{{$category->cat_desc}}</td>
                         <td>{{$category->status ==1 ? 'Published' : 'Unpublished'}}</td>
                         <td>
                            @if($category->status==1)
                            <a href="{{route('unpublished-category',['id'=>$category->id])}}" class="btn btn-primary">
                                <span><i class="fa fa-arrow-up"></i></span>
                            </a>
                            @else
                            <a href="{{route('published-category',['id'=>$category->id])}}" class="btn btn-warning">
                                <span><i class="fa fa-arrow-down"></i></span>
                            </a>
                            @endif
                            <a href="#editModal{{$category->id}}" class="btn btn-success" data-toggle="modal">
                                        <span><i class="fa fa-edit"></i></span>
                            </a>
                            <a href="{{route('delete-category',['id'=>$category->id])}}" class="btn btn-danger">
                                <span><i class="fa fa-trash"></i></span>
                            </a>                                   
                         </td>
                    </tr>
                     @include('admin.category.edit-category')
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  </div>
 @include('admin.category.add-category')
@endsection