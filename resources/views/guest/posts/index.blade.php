<!doctype html>
<html lang="en">
  @include('partials/head')
  

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



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
                  <li><a href="{{url('/')}}" class="nav-link">Home</a></li>
                  <!-- <li><a href="about.html" class="nav-link">About</a></li>
                  <li><a href="trips.html" class="nav-link">Trips</a></li> -->
                  <li class="active"><a href="{{route('posts.index')}}" class="nav-link">Blog</a></li>
                  <li><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-5" data-aos="fade-up">
              <h1 class="mb-3 text-white">Our Blog</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">

      <div>
        <div class="mx-auto pull-right">
            <div class="">
                <form action="{{ route('posts.index') }}" method="GET" role="search">

                    <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" title="Search projects">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search projects" id="term">
                        <a href="{{ route('posts.index') }}" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>




        <div class="row">
          @foreach($search_results as $post)
          <div class="col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
            <div class="post-entry-1 h-100">
              <a href="{{route('posts.show', ['slug' => $post->slug])}}">
                <img src="{{asset('storage/'.$post->image)}}" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">{{$post->title}}</a></h2>
                <span class="meta d-inline-block mb-3">{{$post->created_at->format('d-m-Y')}} <span class="mx-2">by</span> <!--<a href="#">nome autore</a>--></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>

        
        <div class="col-12 mt-5 text-center">
          <span class="p-3">1</span>
          <a href="#" class="p-3">2</a>
          <a href="#" class="p-3">3</a>
          <a href="#" class="p-3">4</a>
        </div>
        
      </div>
    </div> <!-- END .site-section -->

    @include('partials/footer')

    </div>

    @include('partials/scripts')

  </body>

</html>

