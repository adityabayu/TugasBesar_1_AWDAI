Enter file contents here<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>jQuery Countdown</title>
	<style type="text/css">
	@import "jquery.countdown.css";
	#defaultCountdown { width: 240px; height: 45px; }
	#defaultCountUp { width: 240px; height: 45px; }
	</style>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery.countdown.js"></script>
	<script type="text/javascript">
<!-- austDay.getFullYear() menghasilkan tahun saat ini ; austDay.getFullYear() +1 menghasilkan tahun depan,misal 2013+1 =2014  -->
<!--0 menghasilkan bulan pertama-->
<!--1 menghasilkan hari pertama-->
	$(function () {
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 1, 0 , 1);
	$('#defaultCountdown').countdown({until: austDay});
	$('#year').text(austDay.getFullYear());
	});
	</script>
		<script type="text/javascript">
<!-- austDay.getFullYear() menghasilkan tahun saat ini ; misal 2013 -->
<!--0 merupakan bulan pertama,1 merupakan hari pertama-->
	$(function () {
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear(), 0 ,1);
	$('#defaultCountUp').countdown({since: austDay});
	$('#year').text(austDay.getFullYear());
	});
	</script>
</head>
<body>
	<h1>Tahun Baru kurang:</h1>
	<div id="defaultCountdown"></div>
	<h1> Counter ini dibuat sejak:</h1>
	<div id="defaultCountUp"></div>
</body>
</html>
