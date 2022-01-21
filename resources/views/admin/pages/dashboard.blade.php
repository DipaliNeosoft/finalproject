<!DOCTYPE html>
<html lang="en">
<head>
 @include('admin.includes.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed mt-5">
  @include('admin.includes.nav')
  @include('admin.includes.sidebar')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper text-center">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h2 class="text-center">Welcome to Dashboard</h2>
      <div class="container-fluid mt-3 ">
        <div class="row mb-2">
          <div class="col-lg-4 col-6">
            <!-- small box -->
             <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$ordercnt}}</h3>

          <p>Total Orders</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="{{route('orders')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{$usercnt}}</h3>

          <p>User Registrations</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="{{url('users')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{$productcnt}}</h3>

          <p>Products</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="{{url('products')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  @include('admin.includes.foot')
  </body>
</html>

