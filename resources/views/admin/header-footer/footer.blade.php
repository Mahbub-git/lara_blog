@extends('admin.master')
@section('title')
 footer update
@endsection
@section('body')
 <div class="container">
     <div class="row">
              <div class="col-lg-10">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Update Footer</h1>
                  </div>
                  <form  action="{{route('footer-update')}}" method="post">
                    @csrf
                    <div class="form-group">
                        @foreach($footer as $foot)
                      <input type="text" name="title" class="form-control form-control" value="{{$foot->title}}">
                      <input type="hidden" name="id" value="{{$foot->id}}">
                      @endforeach
                    </div>
                    <button  class="btn btn-primary btn-user btn-block">Update Footer</button>
                </form>
              </div>
            </div>
          </div>
  </div>
  @include('admin.header-footer.add-header')
@endsection