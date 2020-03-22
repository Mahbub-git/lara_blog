 <div class="modal fade" id="editModal{{$blog->blog_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Blog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" id="edit_blog" novalidate  action="{{route('about-save')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="exampleInputName">Blog Title</label>
            <input type="text" class="form-control" id="exampleInputName" value="{{$blog->blog_title}}" name="blog_title" placeholder="Category Name">
            <input type="hidden" name="id" value="{{$blog->blog_id}}">
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
                <textarea name="short_desc" class="form-control" id="exampleInputDescription">{{$blog->short_desc}}</textarea>
            </div>
             <div class="form-group">
                <label for="exampleInputDescription">Blog Long Description</label>
                <textarea name="long_desc"  class="form-control">{{$blog->long_desc}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputName">Blog Image</label>
                <input type="file" id="exampleInputName" name="bog_image">
            </br>
                <img src="{{$blog->bog_image}}" height="80" width="100">
            </div>
            <div class="form-group">
                <label for="exampleInputName">Author Name</label>
                <input type="text" class="form-control" id="exampleInputName" value="{{$blog->author_name}}"" name="author_name" placeholder="Author Name">
            </div>
            <div class="form-group">
                <label for="exampleInputName">Hit Counter</label>
                <input type="number" class="form-control" id="exampleInputName" value="{{$blog->hit_counter}}"" name="hit_counter" placeholder="Hit Counter">
            </div>
          <div class="form-group">
            <label for="">Publication Status</label>
            <select name="status" class="form-control">
              <option value="1" {{$blog->status == 1 ? 'selected' : ''}}>Published</option>
              <option value="0" {{$blog->status == 0 ? 'selected' : ''}}>Unpublished</option>
            </select>
          </div>
          <button type="submit" id="success" class="btn btn-primary">Update Blog</button>
          <button type="button"  class="btn btn-danger" data-dismiss="modal">Close</button>
          
        </form>
      </div>
    </div>
  </div>
</div>
 