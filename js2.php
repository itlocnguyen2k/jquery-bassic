<!DOCTYPE html>
<html>
<head>
	<title>js2</title>
	<script type="text/javascript" src="script/jquery-3.6.0.js"></script>
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