<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	

	<link rel="stylesheet" type="text/css" href="Css/header.css">
	<link rel="stylesheet" type="text/css" href="Css/footer.css">
	<link rel="stylesheet" type="text/css" href="Css/master.css">
</head>
<body>
{{View::make('header')}}
@yield('hhh')
<!-- Banner section was start------------- -->
<div class="banner">
	<div class="slide-container">
		<div class="slide">
			<img src="/Banner/Bean_Bag.png">
			<!-- <div class="content">
				<div class="slogan">
					<h2>Rest</h2>
					<p>Bean to Being</p>
				</div>
				<button class="shop-btn">Shop Now</button>
			</div>	 -->
		</div>

		<div class="slide">
			<img src="/Banner/Tv-Unit.png">
			<!-- <div class="content">
				This is second Slide 
			</div>	 -->
		</div>

		<div class="slide">
			<img src="/Banner/Sofa_set.png">
			<!-- <div class="content">
				This is three Slide 
			</div>	 -->
		</div>
	</div>
	<span class="backward btn" onclick="controller(-1)">&#171;</span>
	<span class="forward btn" onclick="controller(1)">&#187;</span>
</div>
<!-- Banner section was close------------- -->
{{View::make('footer')}}
</body>
<script src="js/banner.js"></script>
<script src="js/stickynavbar.js"></script>
</html>