<!DOCTYPE html>
<!--[if lte IE 8]> <html class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no">
    <title>Kid' school - Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    
	<link href='http://fonts.googleapis.com/css?family=Gochi+Hand|Arvo:400,700' rel='stylesheet' type='text/css'>
	<link href="{{ asset('web') }}/css/jquery.bxslider.css" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('web') }}/css/style.css" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper" class="homepage">
		<div class="wrapper-holder">

			@include('web.partials.header')

            <section id="main">
                <div>
                    @yield('duplicate')
                </div>
            
            </section>
            
		</div>
		<div class="top-blue-border"></div>
		@include('web.partials.footer')	
	</div>
	
	<script src="{{ asset('web') }}/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="{{ asset('web') }}/js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="{{ asset('web') }}/js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="{{ asset('web') }}/js/main.js"></script>
</body>
</html>