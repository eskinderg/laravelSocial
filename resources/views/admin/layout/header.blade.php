
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
     <div class="navbar-header">
     </div>

     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class=""><a href="{{URL::to('/')}}">Home <span class="sr-only">(current)</span></a></li>
          <li><a href="{{URL::to('/authors')}}">Authors</a></li>

            @if(Auth::check())
              <li><a href="{{ URL::to('/auth/logout') }}">Logout {{ Auth::user()->name }}</a></li>
            @else
              <li><a href="{{ URL::to('/auth/login') }}">Login</a></li>
              <li><a href="{{ URL::to('/auth/register') }}">Register</a></li>
            @endif

      </ul>
    </div>
  </div>
</nav>
