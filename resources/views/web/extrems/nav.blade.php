<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="{{ asset('images/zergicon.png') }}" width="50px" height="50px">
  
  <a class="navbar-brand" href="#">ProjectEmilin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('histories-veure')}}">Noticies<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Ultims Fanfictions</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Log in</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sign in</a>
            </li>
            
        </ul>
    </form>
  </div>
</nav>
