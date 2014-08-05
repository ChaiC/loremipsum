<!DOCTYPE html>
<html>
<head>
    <title>Lorem-Ipsum</title>
	<link rel='stylesheet' href='/css/styles.css' type='text/css'>
	
</head>
<body>
<div id="page-wrap">

<h2> This page will generate a few random paragraphs for you. </h2>

	{{ Form::open(array('url' => '/random')) }}
		
		How many paragraphs do you want? {{ Form::selectRange('numberPara', 1, 10) }}<br><br>
						
		{{ Form::submit('Submit') }}
		
	{{ Form::close() }}
	
	@yield('content')
	
</div>

</body>
</html>