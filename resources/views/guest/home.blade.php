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
                <a href="{{url('/')}}" class="font-weight-bold">
                  <img src="images/logo-aborigine-full.png" alt="Image" class="img-fluid">
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
                  <!-- <li><a href="about.html" class="nav-link">About</a></li> -->
                  <!-- <li><a href="trips.html" class="nav-link">Trips</a></li> -->
                  <li><a href="{{route('posts.index')}}" class="nav-link">Blog</a></li>
                  <li><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('images/green.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5" data-aos="fade-right">
              <h1 class="mb-3 text-white">Let's Enjoy The Wonders of Nature</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p>
              <!-- <p class="d-flex align-items-center">
                <a href="https://vimeo.com/191947042" data-fancybox class="play-btn-39282 mr-3"><span class="icon-play"></span></a> 
                <span class="small">Watch the video</span>
              </p> -->
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="heading-39101 mb-5">
              <span class="backdrop">Story</span>
              <span class="subtitle-39191">Discover Story</span>
              <h3>Our Story</h3>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quae expedita fugiat quo incidunt, possimus temporibus aperiam eum, quaerat sapiente.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis enim a pariatur molestiae.</p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <img src="images/logotype.png" alt="Image" class="img-fluid slide-pic">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">

      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <div class="heading-39101 mb-5">
              <span class="backdrop text-center">Articles</span>
              <span class="subtitle-39191">Articles</span>
              <h3>Our latest Articles</h3>
            </div>
          </div>
        </div>
        <div class="row">
            @foreach($posts as $post)
            @if($loop->index < 6)

            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
              <a href="{{route('posts.show', ['slug' => $post->slug])}}">  
              <div class="listing-item">
                  <div class="listing-image">
                    <img src="{{asset('storage/'.$post->image)}}" alt="Image" class="img-fluid">
                  </div>
                  <div class="listing-item-content">
                    <!-- <a class="px-3 mb-3 category bg-primary" href="#">$200.00</a> -->
                    <h2 class="mb-1">{{$post->title}}</h2>
                  </div>
                </div>
              </a>
              </div>
            @endif
            @endforeach


          <!-- <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <div class="listing-item">
              <div class="listing-image">
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a class="px-3 mb-3 category bg-primary" href="#">$390.00</a>
                <h2 class="mb-1"><a href="trip-single.html">Consectetur adipisicing</a></h2>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <div class="listing-item">
              <div class="listing-image">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a class="px-3 mb-3 category bg-primary" href="#">$180.00</a>
                <h2 class="mb-1"><a href="trip-single.html">Temporibus aperiam</a></h2>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <div class="listing-item">
              <div class="listing-image">
                <img src="images/img_4.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a class="px-3 mb-3 category bg-primary" href="#">$600.00</a>
                <h2 class="mb-1"><a href="trip-single.html">Expedita fugiat</a></h2>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <div class="listing-item">
              <div class="listing-image">
                <img src="images/img_5.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a class="px-3 mb-3 category bg-primary" href="#">$330.00</a>
                <h2 class="mb-1"><a href="trip-single.html">Consectetur adipisicing</a></h2>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <div class="listing-item">
              <div class="listing-image">
                <img src="images/img_6.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a class="px-3 mb-3 category bg-primary" href="#">$450.00</a>
                <h2 class="mb-1"><a href="trip-single.html">Consectetur Amet</a></h2>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </div>

    <!-- <div class="site-section">

      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-10">
            <div class="heading-39101 mb-5">
              <span class="backdrop text-center">Our Team</span>
              <span class="subtitle-39191">Amazing Staff</span>
              <h3>Meet Our Team</h3>
            </div>
          </div>
        </div>


        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person-29191 text-center">
              <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-4">
              <div class="px-4">
                <h2 class="mb-2">John Doe</h2>
                <p class="caption mb-4">Staff</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, maiores? Eos alias fugit eius, repudiandae molestias error</p>
                <div class="social_29128 mt-5">
                <a href="#"><span class="icon-facebook"></span></a>  
                <a href="#"><span class="icon-instagram"></span></a>  
                <a href="#"><span class="icon-twitter"></span></a>  
               </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person-29191 text-center">
              <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-4">
              <div class="px-4">
                <h2 class="mb-2">Jean Doe</h2>
                <p class="caption mb-4">Staff</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, maiores? Eos alias fugit eius, repudiandae molestias error</p>
                <div class="social_29128 mt-5">
                <a href="#"><span class="icon-facebook"></span></a>  
                <a href="#"><span class="icon-instagram"></span></a>  
                <a href="#"><span class="icon-twitter"></span></a>  
               </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person-29191 text-center">
              <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-4">
              <div class="px-4">
                <h2 class="mb-2">Claire Dormey</h2>
                <p class="caption mb-4">Staff</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, maiores? Eos alias fugit eius, repudiandae molestias error</p>
                <div class="social_29128 mt-5">
                <a href="#"><span class="icon-facebook"></span></a>  
                <a href="#"><span class="icon-instagram"></span></a>  
                <a href="#"><span class="icon-twitter"></span></a>  
               </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div> -->


    

    <!-- <div class="site-section">

      <div class="container">

        <div class="row justify-content-center text-center">
          <div class="col-md-10">
            <div class="heading-39101 mb-5">
              <span class="backdrop text-center">Testimonials</span>
              <span class="subtitle-39191">Testimony</span>
              <h3>Happy Customers</h3>
            </div>
          </div>
        </div>

        <div class="owl-carousel slide-one-item">
          <div class="row">
            <div class="col-md-6">

              <div class="testimonial-39191 d-flex">
                <div class="mr-4">
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid">
                </div>
                <div>
                <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, accusamus, facilis! Placeat praesentium alias porro aperiam facilis accusantium veniam?&rdquo;</blockquote>
                <p>&mdash; John Doe</p>
                </div>
              </div>    
              
            </div>

            <div class="col-md-6">

              <div class="testimonial-39191 d-flex">
                <div class="mr-4">
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                </div>
                <div>
                <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, accusamus, facilis! Placeat praesentium alias porro aperiam facilis accusantium veniam?&rdquo;</blockquote>
                <p>&mdash; John Doe</p>
                </div>
              </div>    
              
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">

              <div class="testimonial-39191 d-flex">
                <div class="mr-4">
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid">
                </div>
                <div>
                <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, accusamus, facilis! Placeat praesentium alias porro aperiam facilis accusantium veniam?&rdquo;</blockquote>
                <p>&mdash; John Doe</p>
                </div>
              </div>    
              
            </div>

            <div class="col-md-6">

              <div class="testimonial-39191 d-flex">
                <div class="mr-4">
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                </div>
                <div>
                <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, accusamus, facilis! Placeat praesentium alias porro aperiam facilis accusantium veniam?&rdquo;</blockquote>
                <p>&mdash; John Doe</p>
                </div>
              </div>    
              
            </div>
          </div>

        </div>

      </div>
    </div> -->

    <div class="site-section bg-image overlay" style="background-image: url('images/woman.jpg'); min-height: 400px">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <!-- <h2 class="font-weight-bold text-white">Join and Trip With Us</h2>
            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ut, doloremque quo molestiae nesciunt officiis veniam, beatae dignissimos!</p>
            <p class="mb-0"><a href="#" class="btn btn-primary text-white py-3 px-4">Get In Touch</a></p> -->
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">

      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-10">
            <div class="heading-39101 mb-5">
              <span class="backdrop text-center">Autumn</span>
              <span class="subtitle-39191">Series</span>
              <h3>Autumn</h3>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="images/img_1.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="images/img_2.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="images/img_3.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section bg-image overlay" style="background-image: url('images/beach.jpg')">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-bold text-white">Join and Trip With Us</h2>
            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ut, doloremque quo molestiae nesciunt officiis veniam, beatae dignissimos!</p>
            <p class="mb-0"><a href="#" class="btn btn-primary text-white py-3 px-4">Get In Touch</a></p>
          </div>
        </div>
      </div>
    </div>

    @include('partials/footer')

    </div>

    
  </body>
  @include('partials/scripts')

</html>

