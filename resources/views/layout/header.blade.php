<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
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

            @foreach($navMenu as $menu)
                <li>
                  <a href="{{$menu['href']}}" >
                      <span aria-hidden="true" class="{{$menu['class']}}"></span>
                      {{$menu['title']}}
                  </a>
                </li>
            @endforeach
          </ul>

          @if(Auth::check())
              <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a href="{{route('admin')}}">Messages
                      <span class="badge glyphicon glyphicon-envelope">
                        {{ Auth::user()->messages()->count() }}
                      </span>
                    </a>
                  </li>
              </ul>
          @endif
        </div><!--/.nav-collapse -->
      </div>
    </nav>
