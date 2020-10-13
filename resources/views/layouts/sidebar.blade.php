<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li @if(\Request::route()->getName() == "Dashboard")class="active" @endif>
          <a href="/company-dashboard">
            <i class="fa fa-th"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Applications</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" @if(\Request::route()->getName() == "Unread Applications")class="active" @endif>
            <li><a href="/unread-application"><i class="fa fa-circle-o"></i> Not Read</a></li>
            <li class="active"><a href="/read-application"><i class="fa fa-circle-o"></i> Read</a></li>
          </ul>
        </li>
        <li class="treeview menu-open" @if(\Request::route()->getName() == "Unread Message")class="active" @endif>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Messages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/unread-message"><i class="fa fa-circle-o"></i> Not Read </a></li>
            <li class="active"><a href="/read-message"><i class="fa fa-circle-o"></i> Read</a></li>
          </ul>
        </li>
        <li @if(\Request::route()->getName() == "News")class="active" @endif>
          <a href="/display-news-in-dashboard">
            <i class="fa fa-th"></i> <span>News</span>
          </a>
        </li>
        <li @if(\Request::route()->getName() == "Events")class="active" @endif>
          <a href="/display-events-in-dashboard">
            <i class="fa fa-th"></i> <span>Events</span>
          </a>
        </li>
        <li @if(\Request::route()->getName() == "Approve Comment")class="active" @endif>
          <a href="/approve-comment">
            <i class="fa fa-th"></i> <span>Comments</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>