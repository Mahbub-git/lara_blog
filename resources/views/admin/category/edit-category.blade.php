 <div class="modal fade" id="editModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate  action="{{route('category-update')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="exampleInputName">Category Name</label>
            <input type="text" class="form-control" id="exampleInputName" value="{{$category->cat_name}}" name="cat_name" placeholder="Category Name" required>
            <input type="hidden" name="id" value="{{$category->id}}">
            <div class="invalid-feedback">
              Please enter a Category Name
            </div>
          </div>
           <div class="form-group">
            <label for="exampleInputDescription">Category Description</label>
            <textarea name="cat_desc" class="form-control" id="exampleInputDescription" required>{{$category->cat_desc}}</textarea>
            <div class="invalid-feedback">
              Please enter a Description
            </div>
          </div>
          <div class="form-group">
            <label for="">Publication Status</label>
            <select name="status" class="form-control">
              <option value="1" {{$category->status==1 ? 'selected' : ''}}>Published</option>
              <option value="0" {{$category->status==0 ? 'selected' : ''}}>Unpublished</option>
            </select>
          </div>
          <button type="submit" id="success" class="btn btn-primary">Update Category</button>
          <button type="button"  class="btn btn-danger" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>