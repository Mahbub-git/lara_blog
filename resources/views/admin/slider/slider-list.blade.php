@extends('admin.master')
@section('title')
 slider list
@endsection
@section('body')
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h1 class="h3 mb-4 text-gray-800 text-center">Slider List</h1>    
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add Slider</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>SN</th>
                      <th width="200">Slider Image</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php($i=1)
                    @foreach($sliders as $slider)
                    <tr>
                      <td>{{$i++}}</td>   
                      <td><img src="{{$slider->slider_image}}" height="100"></td>  
                       <td>{{$slider->status ==1 ? 'Published' : 'Unpublished'}}</td>  
                      <td>
                            @if($slider->status==1)
                            <a href="{{route('unpublished-slider',['id'=>$slider->id])}}" class="btn btn-primary">
                                <span><i class="fa fa-arrow-up"></i></span>
                            </a>
                            @else
                            <a href="{{route('published-slider',['id'=>$slider->id])}}" class="btn btn-warning">
                                <span><i class="fa fa-arrow-down"></i></span>
                            </a>
                            @endif
                            <a href="#editModal{{$slider->slider}}" class="btn btn-success" data-toggle="modal">
                                        <span><i class="fa fa-edit"></i></span>
                            </a>
                            <a href="{{route('delete-slider',['id'=>$slider->id])}}" class="btn btn-danger">
                                <span><i class="fa fa-trash"></i></span>
                            </a>                                   
                         </td>
                    </tr>
                     @include('admin.slider.edit-slider')
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
   @include('admin.slider.add-slider')
@endsection