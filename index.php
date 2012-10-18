<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>AJAX Sample</title>

<script type="text/javascript" src="http://www.conocimientospc.com/ajax/ajax.js"></script>

<style>
	#content_analisis {width: 50%; margin: 0 auto; font-family: "Trebuchet MS"; font-size: 12px;}
	#links {width: 65%; margin: 0 auto; font-family: Verdana; font-size: 20px;}
</style>
</head>

<body>
	<div id="content_analisis">
	</div>
	
	<div id="links">
		<a href="javascript:sndReq('rpc.php', 'content_analisis')">Normal</a> 
		<a href="javascript:sndReq('wtf.php?asco=yes', 'content_analisis')">Asco</a>
		<a href="javascript:sndReq('rpc.php?felicity=yes', 'content_analisis')">Felicity</a>
	</div>
</body>

</html>