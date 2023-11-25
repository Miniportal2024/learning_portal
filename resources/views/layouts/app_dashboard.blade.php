<!DOCTYPE html>
<html lang="en">

<head>
   <!-- All Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">

	<!-- Page Title Here -->
	<title>Dompet - Payment Admin Dashboard Bootstrap Template</title>
	
	
	
    <!-- Datatable -->
    <link href="{{asset('vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="{{asset('vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{asset('css/dashboard_style.css')}}" rel="stylesheet">

</head>

<body>
    <div id="preloader">
        <div class="waviy">
		   <span style="--i:1">C</span>
		   <span style="--i:3">o</span>
		   <span style="--i:5">m</span>
		   <span style="--i:7">p</span>
		   <span style="--i:9">u</span>
		   <span style="--i:11">t</span>
		   <span style="--i:13">e</span>
		   <span style="--i:15">r</span>
		   <span style="--i:17"> - </span>
		   <span style="--i:19">E</span>
		   <span style="--i:21">n</span>
		   <span style="--i:23">g</span>
		   <span style="--i:25">i</span>
		   <span style="--i:27">n</span>
		   <span style="--i:29">e</span>
		   <span style="--i:31">e</span>
		   <span style="--i:33">r</span>
		   <span style="--i:35">i</span>
		   <span style="--i:37">n</span>
		   <span style="--i:39">g</span>
		   <span style="--i:41">.</span>
		   <span style="--i:43">.</span>
		   <span style="--i:45">.</span>
		</div>
    </div>

    @yield('content')

    <script src="{{asset('vendor/global/global.min.js')}}"></script>
    <script src="{{asset('vendor/chart-js/chart.bundle.min.js')}}"></script>
	<!-- Apex Chart -->
	<script src="{{asset('vendor/apexchart/apexchart.js')}}"></script>
	
    <!-- Datatable -->
    <script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/plugins-init/datatables.init.js')}}"></script>

	<script src="{{asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>

      <script src="{{asset('js/custom.min.js')}}"></script>
	<script src="{{asset('js/dlabnav-init.js')}}"></script>
	<script src="{{asset('js/demo.js')}}"></script>
    <script src="{{asset('js/styleSwitcher.js')}}"></script>

</body>
</html>