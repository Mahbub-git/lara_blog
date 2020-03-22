 <div class="modal fade" id="editModal{{$slider->slider}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Slider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate  action="{{route('slider-update')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleInputName">Image</label>
              <input type="file" name="slider_image" class="form-control-file @error('slider_image') is-invalid @enderror" id="exampleInputName">
               @error('slider_image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </br>
                <img src ="{{$slider->slider_image}}" height="100" width="150">
          </div>
           <div class="invalid-feedback">
              Please enter a Slider Image
            </div>
            <input type="hidden" name="id" value="{{$slider->id}}">
          <button type="submit" id="success" class="btn btn-primary">Update</button>
          <button type="button"  class="btn btn-danger" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>