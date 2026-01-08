@extends ("backend.layouts.master")


@section("head")

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Biz Admin - Multipurpose bootstrap 4 admin templates</title>
<!-- Tell the browser to be responsive to screen width -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Biz Admin is a Multipurpose bootstrap 4 Based Dashboard & Admin Site Responsive Template by uxliner." />
<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Biz Admin, Biz Adminadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
<meta name="author" content="uxliner"/>
<!-- v4.1.3 -->
<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicon-16x16.png">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="dist/css/style.css">
<link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="dist/css/themify-icons/themify-icons.css">
<link rel="stylesheet" href="dist/css/simple-lineicon/simple-line-icons.css">
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

@endsection




<!-- ============================================================================================ -->




@section("content")


  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Products</h1>
      
    </div>
    
    <!-- Main content -->
    <div class="content">
      <div class="card">
      <div class="card-body">

        @if (session('success'))
         <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <h4 class="text-black"><span>Product List</span> <span class="pull-right"><a href="{{route('product.create')}}" class="btn  btn-success">Add Product</a></span></h4>
        <p>Just add the base class  .</p>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">description</th>
                <th scope="col">price</th>
                <th scope="col">sku</th>
                <th scope="col">stock</th>
                <th scope="col">category_id</th>
                <!-- <th scope="col">image_url</th> -->
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach ( $products as $product )
              <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->sku }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->category_id }}</td>
                <!-- <td>{{ $product->image_url }}</td> -->
                <td style="display: flex; justify-content: space-between;">
                  <a class="mr-3" href="{{ route('product.edit', $product->id) }}">
                    <i class="fa fa-pencil btn btn-primary"></i>
                  </a>

                <form action="{{ route('product.destroy', $product->id) }}" method="post" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="fa fa-trash btn btn-danger" onclick="return confirm('Are you sure to delete?')"></button>
                </form>


                </td>

              </tr>

              @endforeach

            </tbody>
          </table>
        </div>
      </div>
      </div>
    </div>
    <!-- /.content --> 
  </div>

  
 

@endsection




<!-- =================================================================================== -->




@section("script")

<script src="dist/js/jquery.min.js"></script>  
<script src="dist/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="dist/js/bizadmin.js"></script> 

<!-- Jquery Sparklines --> 
<script src="dist/plugins/jquery-sparklines/jquery.sparkline.min.js"></script> 
<script src="dist/plugins/jquery-sparklines/sparkline-int.js"></script> 

<!-- Morris JavaScript --> 
<script src="dist/plugins/raphael/raphael-min.js"></script> 
<script src="dist/plugins/morris/morris.js"></script> 
<script src="dist/plugins/functions/dashboard1.js"></script> 

<!-- for demo purposes --> 
<script src="dist/js/demo.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b7257d2afc2c34e96e78bfc/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

@endsection