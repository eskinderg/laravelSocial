
<nav class="navbar navbar-default">
  <div class="container-fluid">
     <div class="navbar-header">
     </div>

     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">

              <li class="">
                <a href="{{URL::to('/')}}">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    Home
                </a>
              </li>


              <li>
                <a href="{{URL::to('/authors')}}">
                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                    Authors
                </a>

              </li>

                @if(Auth::check())

                <li>
                  <a href="{{ URL::to('/profile') }}">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    My Profile
                  </a>
                </li>


                    <li>
                      <a href="{{ URL::to('/auth/logout') }}">
                        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                        Logout {{-- Auth::user()->name --}}
                      </a>
                    </li>
                @else
                    <li>
                      <a href="{{ URL::to('/auth/login') }}">
                        <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                        Login
                      </a>
                    </li>
                    <li><a href="{{ URL::to('/auth/register') }}">Register</a></li>
                @endif

          </ul>
    </div>
  </div>
</nav>
