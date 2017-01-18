<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{url('/')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">{!! trans('header_trans.test') !!}</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">{!! trans('header_trans.online_test') !!}</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only"></span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              @if(!empty(Auth::user()->avatar))
                <img src="{{ config('image.path_avatar')}}/{{Auth::user()->avatar }}" class="user-image" alt="User Image">
              @else
                <img src="{{ config('image.path_avatar')}}/avatar-default.png" class="user-image" alt="User Image">
              @endif
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                @if(!empty(Auth::user()->avatar))
                  <img src="{{ config('image.path_avatar')}}/{{Auth::user()->avatar }}" class="img-circle" alt="User Image">
                @else
                  <img src="{{ config('image.path_avatar')}}/avatar-default.png" class="img-circle" alt="User Image">
                @endif
                <p>
                  {{ Auth::user()->name }}
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/user/{{ Auth::user()->id }}/edit" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-user"></span>{!! trans('header_trans.profile') !!}</a>
                </div>
                <div class="pull-right">
                  <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="submit" id="logout" name="" value="{!! trans('header_trans.sign_out') !!}">
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
