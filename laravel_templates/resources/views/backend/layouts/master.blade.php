<!DOCTYPE html>
<html lang="en">
@yield("head")
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
<!-- header-->

  @if(Auth::guard('web')->check())
  @include ("backend.layouts.header")
  @elseif(Auth::guard('admin')->check())
  @include ("backend.layouts.adminHeader")
  @elseif(Auth::guard('manager')->check())
  @include ("backend.layouts.managerHeader")
  @endif
<!--/ header-->
  <!-- Left side column. contains the logo and sidebar -->

    @if(Auth::guard('web')->check())
  @include ("backend.layouts.left_bar")
  @elseif(Auth::guard('admin')->check())
  @include ("backend.layouts.adminLeft_bar")
  @elseif(Auth::guard('manager')->check())
  @include ("backend.layouts.managerLeft_bar")
  @endif
   
  <!-- Left side column. contains the logo and sidebar -->
  
  <!-- Content Wrapper. Contains page content -->
  @yield("content")
  <!-- /.content-wrapper -->
  <!-- footer -->
   @include ("backend.layouts.footer")
  <!-- /footer -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"> 
    <!-- Tab panes -->
    <div class="tab-content"> 
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab"></div>
      <!-- /.tab-pane --> 
    </div>
  </aside>
  <!-- /.control-sidebar --> 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper --> 

<!-- jQuery 3 --> 
@yield("scripts")
<!--End of Tawk.to Script-->
</body>
</html>
