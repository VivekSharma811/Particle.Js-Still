<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="index_style.css" />
<script type='text/javascript' src='jquery.particleground.min.js'></script>
<script type="text/javascript">


document.addEventListener('DOMContentLoaded', function () {
  particleground(document.getElementById('particles'), {
    dotColor: '#5cbdaa',//#5cbdaa
    lineColor: '#5cbdaa',
	minSpeedX: 0.6,
	maxSpeedX: 0.6,
	density: 8000,//density kam dots jyada
	proximity:100,
	parallax:false//kitni paas m dots judengi..value jyada to jyada distance ki dots judengi
  });
 
}, false);

</script>

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div id="particles">
				<div id="intro">
		
    <a href="https://github.com/vs811" class="btn">More..!!</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>