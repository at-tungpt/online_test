<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        @if(!empty(Auth::user()->avatar))
          <img src="{{ config('path.path_avatar')}}{{Auth::user()->avatar }}" class="img-circle avatar" id="output">
        @else
          <img src="{{ config('path.path_avatar')}}avatar-default.png" class="img-circle avatar">
        @endif
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
      </div>
    </div>
      
    @if (Auth::user()->role_id == Config::get('define.ROLEADMIN'))
    <!-- search form (Optional) -->
    <form action="" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="btn-search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
   @else 
  <!-- search form (Optional) -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="search" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
        <button type="submit" name="btn-search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
        </button>
      </span>
    </div>
  </form>
  @endif

    <!-- /.search form -->
    @if (Auth::user()->role_id == Config::get('define.ROLEADMIN'))
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">{!! trans('left_bar_trans.management') !!}</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="treeview">
        <a href="#"><i class="fa fa-book"></i> <span>{!! trans('left_bar_trans.student') !!}</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{!! url('admin/student') !!}">{!! trans('left_bar_trans.view_list') !!}</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href=""><i class="glyphicon glyphicon-user"></i> <span>{!! trans('left_bar_trans.teacher') !!}</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
         <li><a href="{!! url('admin/teacher') !!}">{!! trans('left_bar_trans.view_list') !!}</a></li>
      </ul>

      <li class="treeview">
        <a href="#"><i class="glyphicon glyphicon-home"></i> <span>{!! trans('left_bar_trans.subject_category') !!}</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="">{!! trans('left_bar_trans.view_list') !!}</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fa fa-credit-card"></i> <span>{!! trans('left_bar_trans.post_category') !!}</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{!! url('admin/category') !!}">{!! trans('left_bar_trans.view_list') !!}</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="">{!! trans('left_bar_trans.create_new') !!}</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fa fa-table"></i> <span>{!! trans('left_bar_trans.media') !!}</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{!! url('admin/media')!!}">{!! trans('left_bar_trans.view_list') !!}</a></li>
        </ul>
        <ul class="treeview-menu">
          <li><a href="{!! url('admin/media/create') !!}">{!! trans('left_bar_trans.create_new') !!}</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fa fa-list"></i> <span>{!! trans('left_bar_trans.document') !!}</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="">{!! trans('left_bar_trans.create_new') !!}</a></li>
        </ul>
      </li>

    </ul>

    @else

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">{!! trans('left_bar_trans.management') !!}</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="treeview">
        <a href="#"><i class="fa fa-book"></i>
        <span>
        {!! trans('left_bar_trans.point') !!}
        <strong id="point">{!! Auth::user()->point !!}</strong>
        </span>
        </a>
      </li>


      <li class="treeview">
        <a href=""><i class="fa fa-book"></i> <span>{!! trans('left_bar_trans.order') !!}</span>
        </a>
      </li>

      <li class="treeview">
        <a href="#"><i class="glyphicon glyphicon-info-sign"></i> <span>{!! trans('left_bar.history') !!}</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="">{!! trans('left_bar.voted') !!}</a></li>
          <li><a href="">{!! trans('left_bar.join_event') !!}</a></li>
        </ul>
      </li>

      @if (Auth::user()->role_id == Config::get('define.ROLESTUDENT'))

      <li class="treeview">
        <a href="#"><i class="glyphicon glyphicon-home"></i> <span>{!! trans('left_bar.bussiness') !!}</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href=""></a></li>
          <li><a href="">{!! trans('left_bar.event') !!}</a></li>
          <li><a href="">{!! trans('left_bar.promotion') !!}</a></li>
          <li><a href="">{!! trans('left_bar.order') !!}</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="glyphicon glyphicon-apple"></i> <span>{!! trans('product.product') !!}</span>
          <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="">{!! trans('left_bar_trans.create_new') !!}</a></li>
        </ul>
      </li>
      @endif
    </ul>
    @endif
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
