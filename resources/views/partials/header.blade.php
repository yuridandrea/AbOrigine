<header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.html" class="font-weight-bold">
                  <img src="images/logo.png" alt="Image" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              <!-- <div class="links">
                    <a href="{{route('users.index')}}">Users</a>
					@auth
						<a href="{{route('admin.posts.index')}}">Posts</a>
						<a href="{{route('admin.categories.index')}}">Categories</a>
						<a href="{{route('admin.tags.index')}}">Tags</a>
						<a href="{{route('admin-profile')}}">Profile</a>
					@else
						<a href="{{route('posts.index')}}">Posts</a>
						<a href="{{route('categories.index')}}">Categories</a>
						<a href="{{route('tags.index')}}">Tags</a>
					@endauth
                    <a href="{{route('contact')}}">Contact<a>
				</div> -->

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                  <li><a href="about.html" class="nav-link">About</a></li>
                  <li><a href="trips.html" class="nav-link">Trips</a></li>
                  <li><a href="{{route('posts.index')}}" class="nav-link">Blog</a></li>
                  <li><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

