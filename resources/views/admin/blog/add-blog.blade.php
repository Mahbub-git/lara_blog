 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Blog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate  action="{{route('blog-save')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleInputName">Blog Id</label>
            <input type="text" class="form-control" name="id" required readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputName">Blog Title</label>
            <input type="text" class="form-control" id="exampleInputName" name="blog_title" placeholder="Blog Title" required>
            <div class="invalid-feedback">
              Please enter a Blog Title
            </div>
          </div>
           <div class="form-group">
            <label for="exampleInputName">Category Name</label>
            <select name="category_id" class="form-control">
              <option>--select category--</option>
               @foreach($categories as $category) 
              <option value="{{$category->id}}">{{$category->cat_name}}</option>
              @endforeach
            </select>
          </div>
           <div class="form-group">
                <label for="exampleInputDescription">Blog Short Description</label>
                <textarea name="short_desc" class="form-control" id="exampleInputDescription" required></textarea>
                <div class="invalid-feedback">
                  Please enter a Short Description
                </div>
            </div>
             <div class="form-group">
                <label for="exampleInputDescription">Blog Long Description</label>
                <textarea name="long_desc" id="editor1" class="form-control" id="exampleInputDescription" required></textarea>
                <div class="invalid-feedback">
                  Please enter a Long Description
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputName">Blog Image</label>
                <input type="file" id="exampleInputName" name="bog_image" required>
                <div class="invalid-feedback">
                  Please enter a Blog Image
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputName">Author Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="author_name" placeholder="Author Name" required>
                <div class="invalid-feedback">
                  Please enter a Author Name
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputName">Hit Counter</label>
                <input type="number" class="form-control" id="exampleInputName" name="hit_counter" placeholder="Hit Counter" required>
                <div class="invalid-feedback">
                  Please enter a Hit Counter
                </div>
            </div>
          <div class="form-group">
            <label for="">Publication Status</label>
            <select name="status" class="form-control">
              <option value="1">Published</option>
              <option value="0">Unpublished</option>
            </select>
          </div>
          <button type="submit" id="success" class="btn btn-primary">Save Blog</button>
          <button type="button"  class="btn btn-danger" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>