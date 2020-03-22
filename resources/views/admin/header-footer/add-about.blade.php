 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add About</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate  action="{{route('about-save')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleInputName">Company Title</label>
            <input type="text" class="form-control" id="exampleInputName" name="com_title" placeholder="Header Title" required>
            <div class="invalid-feedback">
              Please enter a Company Title
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputName">Company Name</label>
            <input type="text" class="form-control" id="exampleInputName" name="com_name" placeholder="Header Title" required>
            <div class="invalid-feedback">
              Please enter a Company Title
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputName">Company Mission</label>
            <input type="text" class="form-control" id="exampleInputName" name="com_mission" placeholder="Header Title" required>
            <div class="invalid-feedback">
              Please enter a Company Title
            </div>
             <div class="form-group">
                <label for="exampleInputDescription">Company Short Description</label>
                <textarea name="short_desc" class="form-control" id="exampleInputDescription" required></textarea>
                <div class="invalid-feedback">
                  Please enter a Short Description
                </div>
            </div>
             <div class="form-group">
                <label for="exampleInputDescription">Company Long Description</label>
                <textarea name="long_desc" id="editor1" class="form-control" id="exampleInputDescription" required></textarea>
                <div class="invalid-feedback">
                  Please enter a Long Description
                </div>
            </div>
          </div>
          <button type="submit" id="success" class="btn btn-primary">Save</button>
          <button type="button"  class="btn btn-danger" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>