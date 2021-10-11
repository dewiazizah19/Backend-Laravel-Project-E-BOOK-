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
        <li class="{{ request()->is('transaksi.html') ? 'active' : '' }}">
          <a href="transaksi.html">
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
           <li class="{{ request()->is('userdata.html') ? 'active' : '' }}"><a href="./userdata.html"><i class="fa fa-circle-o"></i> Data Pengguna</a></li> 
           <li class="{{ request()->is('bookdata.html') ? 'active' : '' }}"><a href="./bookdata.html"><i class="fa fa-circle-o"></i> Data Buku</a></li> 
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  