 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate  action="{{route('category-save')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="exampleInputName">Category Id</label>
            <input type="text" class="form-control" name="id" required readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputName">Category Name</label>
            <input type="text" class="form-control" id="exampleInputName" name="cat_name" placeholder="Category Name" required>
            <div class="invalid-feedback">
              Please enter a Category Name
            </div>
          </div>
           <div class="form-group">
            <label for="exampleInputDescription">Category Description</label>
            <textarea name="cat_desc" class="form-control" id="exampleInputDescription" required></textarea>
            <div class="invalid-feedback">
              Please enter a Description
            </div>
          </div>
          <div class="form-group">
            <label for="">Publication Status</label>
            <select name="status" class="form-control">
              <option value="1">Published</option>
              <option value="0">Unpublished</option>
            </select>
          </div>
          <button type="submit" id="success" class="btn btn-primary">Save Category</button>
          <button type="button"  class="btn btn-danger" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>