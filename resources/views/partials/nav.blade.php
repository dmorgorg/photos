<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        <!-- for screen readers -->
        <span class="sr-only">Toggle navigation</span>
        <!-- build a triple burger -->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav navbar-left">
        <li>
          <a class="navbar-brand" href="/">dmorg.photos</a>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
        <li><a href="/images/create" >Create &nbsp;<i class="fa fa-camera-retro fa-lg"></i></a>
        </li>
        <li><a href="/">Upload &nbsp;<i class="fa fa-camera-retro fa-lg"></i></a>
        </li>
        <li><a href="/">Find &nbsp;<i class="fa fa-camera-retro fa-lg"></i></a>
        </li>
        <li><a href="/logout">Sign Out, {{ Auth::user()->name }}</a>
        </li>
        @else
        <li><a href="/">View Photos &nbsp;<i class="fa fa-camera-retro fa-lg"></i></a>
        </li>
        <li><a href="/">View Album</a>
        </li>
        <li><a href="/login">Sign In</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
