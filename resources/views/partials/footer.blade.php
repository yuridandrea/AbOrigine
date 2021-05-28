
<footer>
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">For the first version we will have just the log In, for have your auth for write, modify, dalate your articles</p>
      @if (Route::has('login'))
        @auth
          @else
            <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
          @if (Route::has('register'))
              <a class="btn btn-light" href="{{ route('register') }}">Register</a>      
          @endif
        @endauth
      @endif
    </div>
  </div>
</footer>