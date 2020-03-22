@extends('admin.master')
@section('title')
 header list
@endsection
@section('body')
 <div class="container">
    <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h1 class="h3 mb-4 text-gray-800 text-center">Header List</h1>    
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add Header</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>SN</th>
                      <th>Title</th>
                      <th>image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php($i=1)
                    @foreach($headers as $header)
                    <tr>
                      <td>{{$i++}}</td>   
                      <td>{{$header->title}}</td> 
                      <td><img src="{{$header->image}}"></td>  
                      <td>
                           <a href="#exampleModal{{$header->id}}" data-toggle="modal" class="btn btn-warning">
                                <span><i class="fa fa-edit"></i></span>
                            </a>
                      </td>     
                    </tr>
                     @include('admin.header-footer.editHeader')
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  </div>
  @include('admin.header-footer.add-header')
@endsection