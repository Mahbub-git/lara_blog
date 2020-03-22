 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Header</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate  action="{{route('header-save')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleInputName">Header Title</label>
            <input type="text" class="form-control" id="exampleInputName" name="title" placeholder="Header Title" required>
            <div class="invalid-feedback">
              Please enter a Header Title
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputName">Image</label>
              <input type="file" name="image" class="form-control-file">
          </div>
          <button type="submit" id="success" class="btn btn-primary">Save</button>
          <button type="button"  class="btn btn-danger" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>