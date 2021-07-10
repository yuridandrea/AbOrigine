
<header>
  <nav class="navbar navbar-expand-lg navbar-light my_nav">
    <a class="navbar-brand" href="{{route('guest-homepage')}}"><h3>Ab-Origine</h3></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('guest-homepage')}}">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('posts.index')}}">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('aboutUs')}}">About Us</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

