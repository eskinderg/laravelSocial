
<!-- <nav class="navbar navbar-default">
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

              <li>
                <a href="{{URL::to('/wizard')}}">
                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                    Wizard
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
-->

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{route('home')}}">Social</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

              <ul class="nav navbar-nav">

                  <li class="">
                    <a href="{{route('home')}}">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        Home
                    </a>
                  </li>


                  <li>
                    <a href="{{route('authors')}}">
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                        Authors
                    </a>

                  </li>

                  <li>
                    <a href="{{route('wizard')}}">
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                        Wizard
                    </a>

                  </li>

                    @if(Auth::check())

                    <li>
                      <a href="{{ route('profile') }}">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        My Profile
                      </a>
                    </li>


                        <li>
                          <a href="{{ route('auth.logout') }}">
                            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                            Logout {{-- Auth::user()->name --}}
                          </a>
                        </li>
                    @else
                        <li>
                          <a href="{{ route('auth.login') }}">
                            <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                            Login
                          </a>
                        </li>
                        <li><a href="{{ route('auth.register') }}">Register</a></li>
                    @endif

              </ul>

          @if(Auth::check())
              <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a href="{{route('admin')}}">Messages <span class="badge">{{ Auth::user()->messages()->count() }}</span>
                    </a>
                  </li>
              </ul>
          @endif
        </div><!--/.nav-collapse -->
      </div>
    </nav>
