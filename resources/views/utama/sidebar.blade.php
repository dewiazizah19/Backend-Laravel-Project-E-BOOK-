<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="Template/dist/img/user2-160x160.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info"> 
          <p>Dewi Isarotul A</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="{{ request()->is('/') ? 'active' : '' }}">
          <a href="/">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="{{ request()->is('transaksi') ? 'active' : '' }}">
          <a href="transaksi">
            <i class="fa fa-table"></i> <span>Transaksi</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">4</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li class="{{ request()->is('userdata') ? 'active' : '' }}"><a href="./userdata"><i class="fa fa-circle-o"></i> User Data</a></li> 
           <li class="{{ request()->is('bookdata') ? 'active' : '' }}"><a href="./bookdata"><i class="fa fa-circle-o"></i> Book Data</a></li> 
          </ul>
        </li>
        <li class="{{ request()->is('input_userdata') ? 'active' : '' }}">
          <a href="input_userdata">
            <i class="fa fa-table"></i> <span>Input Data</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  