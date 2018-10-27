<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>E-Invoice &raquo; Dashboard</title>
  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />

  <!-- Demo Dependencies -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.3.2/holder.min.js" type="text/javascript"></script>
  <script>
    Holder.add_theme("white", { background:"#fff", foreground:"#a7a7a7", size:10 });
  </script>

  <!-- keen-analysis@1.2.2 -->
  <script src="https://d26b395fwzu5fz.cloudfront.net/keen-analysis-1.2.2.js" type="text/javascript"></script>

  <!-- keen-dataviz@1.1.3 -->
  <link href="https://d26b395fwzu5fz.cloudfront.net/keen-dataviz-1.1.3.css" rel="stylesheet" />
  <script src="https://d26b395fwzu5fz.cloudfront.net/keen-dataviz-1.1.3.js" type="text/javascript"></script>  

  <!-- Dashboard -->
  <link href="{{ asset('css/keen-dashboards.css') }}" rel="stylesheet" type="text/css" >
</head>


<body class="keen-dashboard" style="padding-top: 80px;">

  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="http://localhost/E-Invoice/Einvoice/public/">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>

        <a class="navbar-brand" href="http://localhost/E-Invoice/Einvoice/public/">HOME</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="http://localhost/E-Invoice/Einvoice/public/">Link1</a></li>
          <li><a href="http://localhost/E-Invoice/Einvoice/public/">Link2</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">

      <div class="col-sm-6">
        <div class="chart-wrapper">
          {{-- <div class="chart-title">
            Create a new Invoice
          </div> --}}
          <div class="chart-stage" id = 'wrapper'>
            <a href="http://localhost/E-Invoice/Einvoice/public/CreateInvoice">  <button class="bigBtn btn btn-success" style="font-size: 80px; padding: 100px 80px; text-align:center;">Create New Invoice</button></a>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="chart-wrapper">
          {{-- <div class="chart-title">
            Manage Items
          </div> --}}
          <div class="chart-stage" id = 'wrapper'>
          <a href="http://localhost/E-Invoice/Einvoice/public/ManageItems">  <button class="bigBtn btn btn-primary" style="font-size: 80px; padding: 100px 150px; text-align:center;">Manage Items</button>  </a>
          </div>
        </div>
      </div>

    </div>
    <div class="row">

      <div class="col-sm-12">
        <div class="chart-wrapper">
          {{-- <div class="chart-title">
                Manage Templates
          </div> --}}
          <div class="chart-stage" id = 'wrapper'>
            <a href="http://localhost/E-Invoice/Einvoice/public/ManageTemplates">  <button class="bigBtn btn btn-primary" style="font-size: 50px; padding: 80px 90px; text-align:center;">Manage Templates</button></a>
          </div>
        </div>
      </div>

    </div>

  </div>

  <!-- Project Analytics -->
  <script type="text/javascript" src="{{ asset('js/keen-analytics.js') }}"></script>
</body>
</html>

@section('content')

    

@endsection