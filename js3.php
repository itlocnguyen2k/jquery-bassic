<!DOCTYPE html>
<html>
<head>
	<title>js2</title>
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js"></script>
	<!-- neu jQuery cdn chet thi nhung thu vien jQuery da tai ve vao -->
	<script type="text/javascript">
		window.jQuery || document.write("<script src='script/jquery-3.6.0.js'><\/script>")
	</script> 
	<!-- <script type="text/javascript" src="script/jquery-3.6.0.js"></script> -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('#div1').html("width:" + $('#img1').width()+". Height:"+$('#img1').height());
		});
	</script>
</head>
<body>
	<div id="div1"></div>
<img id="img1" src="insta6.jpg">
</body>
</html>