<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="/default.css" rel="stylesheet" type="text/css">
<link href="/fonts.css" rel="stylesheet" type="text/css">

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">SimpleWork</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="{{ Request::is('simple') ? 'current_page_item' : ''}}"><a href="/simple" accesskey="1" title="">Homepage</a></li>
				<li class="{{ Request::is('simple/clients') ? 'current_page_item' : '' }}"><a href="#" accesskey="2" title="">Our Clients</a></li>
				<li class="{{ Request::is('simple/about') ? 'current_page_item' : '' }}"><a href="/simple/about" accesskey="3" title="">About Us</a></li>
				<li class="{{ Request::is('simple/articles') ? 'current_page_item' : '' }}"><a href="/simple/articles" accesskey="4" title="">Articles</a></li>
				<li class="{{ Request::is('simple/contact') ? 'current_page_item' : '' }}"><a href="#" accesskey="5" title="">Contact Us</a></li>
			</ul>
		</div>
	</div>
    @yield('content')

	@include('templates.footer')
