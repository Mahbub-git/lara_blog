@extends('admin.master')
@section('title')
 about list
@endsection
    @section('body')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h3 mb-4 text-gray-800 text-center">About List</h1>    
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add AboutUs</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                      <th>SN</th>
                      <th>Title</th>
                      <th>Title</th>
                      <th>Mission</th>
                       <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php($i=1)
                    @foreach($abouts as $about)
                    <tr>
                      <td>{{$i++}}</td>   
                      <td>{{$about->com_title}}</td> 
                       <td>{{$about->com_name}}</td> 
                        <td>{{$about->com_mission}}</td> 
                         <td>{{$about->status == 1 ? 'Published' : 'Unpublished'}}</td> 
                      <td>
                           <a href="#exampleModal{{$about->id}}" data-toggle="modal" class="btn btn-warning">
                                <span><i class="fa fa-edit"></i></span>
                            </a>
                      </td>     
                    </tr>
                    
                    @endforeach
                  </tbody>
                 </table>
                </div>
            </div>
        </div>
    </div>
  @include('admin.header-footer.add-about')
@endsection