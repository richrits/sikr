@extends('user.userdash')

@section('usercontent')
      
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
          <!-- Content Header (Page header) -->
        
          <section class="content-header">
            <h1>
              Beranda
              <small></small>
            </h1>
            {{-- <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="#">Layout</a></li>
              <li class="active">Collapsed Sidebar</li>
            </ol> --}}
          </section>
      
          <!-- Main content -->
          <section class="content">
            {{-- Announcement box --}}
            <div class="callout callout-info">
              <h4>Pengumuman!</h4>
      
              <p>Ini Pengumuman Ini Pengumuman Ini Pengumuman Ini Pengumuman Ini Pengumuman Ini Pengumuman Ini Pengumuman Ini Pengumuman Ini Pengumuman, Tolong diperhatikan!</p>
            </div>

            {{-- Info boxes --}}
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12"><div class="info-box bg-green">
                  <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>
      
                  <div class="info-box-content">
                    <span class="info-box-text">Data box 1</span>
                    <span class="info-box-number">xxxx</span>
      
                    <div class="progress">
                      <div class="progress-bar" style="width: 20%"></div>
                    </div>
                    <span class="progress-description">
                          Detail data box
                        </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box bg-red">
                      <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>
          
                      <div class="info-box-content">
                        <span class="info-box-text">Data box 2</span>
                        <span class="info-box-number">xxxx</span>
          
                        <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                              Detail data box
                            </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box bg-aqua">
                      <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>
          
                      <div class="info-box-content">
                        <span class="info-box-text">Data box 3</span>
                        <span class="info-box-number">xxxx</span>
          
                        <div class="progress">
                          <div class="progress-bar" style="width: 40%"></div>
                        </div>
                        <span class="progress-description">
                              Detail data box
                            </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
      
              </div>
            </div>
            
            <!-- Default box -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Pekerjaan Saya</h3>
      
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="box-body">
                <table class="table no-margin">
                  <thead>
                    <tr>
                      <th>ID Pekerjaan</th>
                      <th>Judul Pekerjaan</th>
                      <th>Catatan</th>
                      <th>Status Kerja</th>
                      <th>progress Kerja</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($task as $i)
                      <tr>
                        <th>{{$i->id}}</th>
                        <th>{{$i->judul}}</th>
                        <th>{{$i->detail}}</th>
                        <th><span class="label label-info">Sedang dikerjakan</span></th>
                        <th>70%</th>
                        <th><button disabled="disabled">Ubah info kerja</button></th>
                      </tr>                    
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              </div>
              <!-- /.box-footer-->
            </div>
            <!-- /.box -->
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
  
      
    
@endsection

@section('usersidebar')

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('AdminLTE-2.4.5/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      {{-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> --}}
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        {{-- <li class="header">MAIN NAVIGATION</li> --}}
        <li>
          <a href="{{route('userhome')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        {{-- <li>
          <a href="../widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li> --}}
        {{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li> --}}
        {{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li> --}}
        <li>
          <a href="{{route('usertask')}}">
            <i class="fa fa-edit"></i> <span>Pekerjaan</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> contoh </a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> contoh </a></li>
          </ul>
        </li>
        <li>
          <a href="{{route('usercalendar')}}">
              <i class="fa fa-calendar"></i> <span>Kalender</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

    
@endsection