<a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
  <i class="fas fa-bars"></i>
</a>
<nav id="sidebar" class="sidebar-wrapper">
  <div class="sidebar-content">
    <div class="sidebar-brand">
      <a href="#">Admin Panel</a>
      <div id="close-sidebar">
        <i class="fas fa-times"></i>
      </div>
    </div>
    <div class="sidebar-header">
      <div class="user-pic">
        <img class="img-responsive img-rounded"
          src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
          alt="User picture">
      </div>
      <div class="user-info">
        <span class="user-name">
          <strong>{{Auth::user()->name ?? ''}}</strong>
        </span>
        <span class="user-role">Administrator</span>
        <span class="user-status">
          <i class="fa fa-circle"></i>
          <span>Online</span>
        </span>
      </div>
    </div>
    <!-- sidebar-header  -->
    <div class="sidebar-search">
      <div>
        {{-- <div class="input-group">
          <input type="text" class="form-control search-menu" placeholder="Search...">
          <div class="input-group-append">
            <span class="input-group-text">
              <i class="fa fa-search" aria-hidden="true"></i>
            </span>
          </div>
        </div> --}}
      </div>
    </div>
    <!-- sidebar-search  -->
    <div class="sidebar-menu">
      <ul>
        <li class="header-menu">
          <span>General</span>
        </li>
        {{-- <li class="sidebar-dropdown">
          <a href="#">
            <i class="fa fa-tachometer-alt"></i>
            <span>Dashboard</span>
            <span class="badge badge-pill badge-warning">New</span>
          </a>
          <div class="sidebar-submenu">
            <ul>
              <li>
                <a href="#">Dashboard 1
                  <span class="badge badge-pill badge-success">Pro</span>
                </a>
              </li>
              <li>
                <a href="#">Dashboard 2</a>
              </li>
              <li>
                <a href="#">Dashboard 3</a>
              </li>
            </ul>
          </div>
        </li> --}}
        <li class="sidebar-dropdown  {{ Request::is('*/pages*') ? 'active' : '' }}">
          <a href="#">
            <i class="fas fa-tasks"></i>
            <span>Pages</span>
          </a>
          <div class="sidebar-submenu" style=" {{ Request::is('*/pages*') ? 'display: block;' : '' }}">
            <ul>
              <li>
                <a href="{{ url('admin/pages/home/1/edit') }}"
                  style=" {{ Request::is('*/home/1/edit*') ? 'background: #212529;' : '' }}">Home</a>
              </li>
              <li>
                <a href="{{ url('admin/pages/about/1/edit/') }}"
                  style=" {{ Request::is('*/about/1/edit*') ? 'background: #212529;' : '' }}">About</a>
              </li>
              <li>
                <a href="{{ url('admin/pages/skill/1/edit/') }}"
                  style=" {{ Request::is('*admin/pages/skill/1/edit') ? 'background: #212529;' : '' }}">Skills</a>
              </li>
              <li>
                <a href="{{ url('admin/pages/contact/1/edit/') }}"
                  style=" {{ Request::is('*admin/pages/contact/1/edit') ? 'background: #212529;' : '' }}">Contact</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="sidebar-dropdown  {{ Request::is('*/categories*') ? 'active' : '' }}">
          <a href="#">
            <i class="fas fa-tasks"></i>
            <span>Product Category</span>
          </a>
          <div class="sidebar-submenu" style=" {{ Request::is('*/categories*') ? 'display: block;' : '' }}">
            <ul>
              <li>
                <a href="{{ url('/admin/categories/create') }}"
                  style=" {{ Request::is('*/categories/create*') ? 'background: #212529;' : '' }}">Add Categories</a>
              </li>
              <li>
                <a href="{{ url('/admin/categories/') }}"
                  style=" {{ Request::is('admin/categories') ? 'background: #212529;' : '' }}">Categories List</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="sidebar-dropdown {{ Request::is('*/projects*') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-shopping-cart"></i>
            <span>Projects</span>
          </a>
          <div class="sidebar-submenu" style=" {{ Request::is('*/projects*') ? 'display: block;' : '' }}">
            <ul>
              <li>
                <a href="{{ url('/admin/projects/create') }}"
                  style=" {{ Request::is('*/projects/create*') ? 'background: #212529;' : '' }}">Add Projects</a>
              </li>
              <li>
                <a href="{{ url('/admin/projects/') }}"
                  style=" {{ Request::is('admin/projects') ? 'background: #212529;' : '' }}">Projects List</a>
              </li>
            </ul>
          </div>
        </li>

      </ul>
    </div>
    <!-- sidebar-menu  -->
  </div>
  <!-- sidebar-content  -->
  <div class="sidebar-footer">
    <a href="#">
      <i class="fa fa-bell"></i>
      <span class="badge badge-pill badge-warning notification">3</span>
    </a>
    <a href="#">
      <i class="fa fa-envelope"></i>
      <span class="badge badge-pill badge-success notification">7</span>
    </a>
    <a href="#">
      <i class="fa fa-cog"></i>
      <span class="badge-sonar"></span>
    </a>
    <a href="#">
      <i class="fa fa-power-off"></i>
    </a>
  </div>
</nav>
<!-- sidebar-wrapper  -->