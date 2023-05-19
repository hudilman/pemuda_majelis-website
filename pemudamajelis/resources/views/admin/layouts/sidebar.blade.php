<section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">BERANDA</li>
        <li><a href="{{ url('/') }}"><i class="fa fa-fw fa-home"></i> Home</span></a></li>

        <li class="header">KATEGORI</li>
        <li><a href="{{ url('admin/kategori') }}"><i class="fa fa-fw fa-tags"></i> Kategori</span></a></li>

        <li><a href="{{ url('admin/artikel') }}"><i class="fa fa-fw fa-pencil"></i> Artikel</span></a></li>

        <li class="header">Blocks</li>
        <li><a href="{{ url('admin/logo') }}"><i class="fa fa-image"></i> Logo</span></a></li>

        <li class="header">OTHER</li>
        <li><a href="{{ url('admin/komentar') }}"><i class="fa fa-fw fa-map-o"></i> Komentar</span></a></li>

        <li><a href="{{ url('admin/iklan') }}"><i class="fa fa-fw fa-bullhorn"></i> Iklan</span></a></li>

        <li><a href="{{ url('/keluar') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</span></a></li>


      </ul>
    </section>