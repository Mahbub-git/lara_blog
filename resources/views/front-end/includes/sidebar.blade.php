 <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
            <input name="button_search" src="{{ asset('/')}}/front-end/images/search.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="clr"></div>
        <div class="gadget">
          <h2 class="star">Categories</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            @foreach($categories as $category)
            <li><a href="{{route('category-blog',['id'=>$category->id])}}">{{$category->cat_name}}</a></li>
            @endforeach
          </ul>
        </div>
		 <div class="gadget">
          <h2 class="star">Latest Post</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            @foreach($categories as $category)
            <li><a href="{{route('category-blog',['id'=>$category->id])}}">{{$category->cat_name}}</a></li>
            @endforeach
          </ul>
        </div>
      </div>